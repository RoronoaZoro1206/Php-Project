<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

require_once 'db.php';

function formatPhilippinesTime($timestamp) {
    if (!$timestamp) return null;
    $dt = new DateTime($timestamp, new DateTimeZone('Asia/Manila'));
    return $dt->format('F j, Y - g:i A'); // Example: May 14, 2025 - 11:30 PM
}

// Check if request is for getting count or incrementing
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['pdf'])) {
    try {
        $pdf = $_GET['pdf'];
        
        $stmt = $pdo->prepare("SELECT PDF_DOWNLOAD_COUNT, PDF_LAST_DOWNLOADED FROM PDF_DOWNLOADS WHERE PDF_NAME = :name");
        $stmt->bindParam(':name', $pdf);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row) {
            // Format the timestamp and include it in response
            $lastDownloaded = isset($row['pdf_last_downloaded']) ? 
                formatPhilippinesTime($row['pdf_last_downloaded']) : null;
            
            echo json_encode([
                'count' => $row['pdf_download_count'], 
                'last_downloaded' => $lastDownloaded
            ]);
        } else {
            echo json_encode(['count' => 0]);
        }
    } catch (PDOException $e) {
        echo json_encode(['error' => $e->getMessage()]);
    }
    exit;
}

// Track download increment - with rate limiting to prevent multiple increments
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pdf'])) {
    try {
        $pdf = $_POST['pdf'];
        
        // Check if this PDF was just incremented (within last 3 seconds)
        $checkStmt = $pdo->prepare("SELECT PDF_LAST_DOWNLOADED FROM PDF_DOWNLOADS 
                                    WHERE PDF_NAME = :name AND 
                                    PDF_LAST_DOWNLOADED > (CURRENT_TIMESTAMP - INTERVAL '3 seconds')");
        $checkStmt->bindParam(':name', $pdf);
        $checkStmt->execute();
        
        // If it was just updated, do not increment again
        if ($checkStmt->rowCount() > 0) {
            echo json_encode(['success' => true, 'message' => 'Skipped duplicate increment']);
            exit;
        }
        
        // Update download count - increment by exactly 1
        $stmt = $pdo->prepare("UPDATE PDF_DOWNLOADS SET PDF_DOWNLOAD_COUNT = PDF_DOWNLOAD_COUNT + 1, 
                           PDF_LAST_DOWNLOADED = CURRENT_TIMESTAMP AT TIME ZONE 'Asia/Manila' WHERE PDF_NAME = :name");
        $stmt->bindParam(':name', $pdf);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            echo json_encode(['success' => true]);
        } else {
            // Try to insert if update failed
            $insertStmt = $pdo->prepare("INSERT INTO PDF_DOWNLOADS (PDF_NAME, PDF_DOWNLOAD_COUNT) VALUES (:name, 1)");
            $insertStmt->bindParam(':name', $pdf);
            $insertStmt->execute();
            
            echo json_encode(['success' => true]);
        }
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
    }
    exit;
}

// Invalid request
echo json_encode(['success' => false, 'message' => 'Invalid request']);
?>