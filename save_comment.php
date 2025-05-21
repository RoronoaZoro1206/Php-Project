<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $event_id = $_POST['event_id'] ?? null;
    $parent_id = !empty($_POST['parent_id']) ? $_POST['parent_id'] : null;
    $username = $_POST['username'] ?? '';
    $comment = $_POST['comment'] ?? '';

    if (!$event_id || !$username || !$comment) {
        echo json_encode(['success' => false, 'error' => 'Missing input']);
        exit;
    }

    // Updated column names to match the database schema with COMS_ prefix
    $sql = "INSERT INTO COMMENTS (COMS_EVENT_ID, COMS_PARENT_ID, COMS_USERNAME, COMS_COMMENT) 
            VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $success = $stmt->execute([$event_id, $parent_id, $username, $comment]);

    if ($success) {
        $comment_id = $pdo->lastInsertId();
        echo json_encode(['success' => true, 'comment_id' => $comment_id]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Failed to save comment']);
    }
}