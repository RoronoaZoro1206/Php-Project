<?php
require 'db.php';

$event_id = $_GET['event_id'] ?? 0;

function fetchComments($pdo, $event_id, $parent_id = null, $level = 0) {
    $sql = $parent_id === null
        ? "SELECT * FROM COMMENTS WHERE COMS_EVENT_ID = ? AND COMS_PARENT_ID IS NULL ORDER BY COMS_CREATED_AT ASC"
        : "SELECT * FROM COMMENTS WHERE COMS_EVENT_ID = ? AND COMS_PARENT_ID = ? ORDER BY COMS_CREATED_AT ASC";

    $stmt = $pdo->prepare($sql);
    $stmt->execute($parent_id === null ? [$event_id] : [$event_id, $parent_id]);
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($comments as $comment) {
        
        $replyTo = '';
        if (!empty($comment['COMS_PARENT_ID'])) {
            $stmt2 = $pdo->prepare("SELECT COMS_USERNAME FROM COMMENTS WHERE COMS_ID = ?");
            $stmt2->execute([$comment['COMS_PARENT_ID']]);
            $parent = $stmt2->fetch(PDO::FETCH_ASSOC);
            if ($parent) {
                $replyTo = $parent['COMS_USERNAME'];
            }
        }

        
        $time = (new DateTime($comment['COMS_CREATED_AT']))->format('Y-m-d H:i:s');

        echo "<div style='margin-left:" . ($level * 20) . "px; margin-bottom: 10px'>";
        echo "<strong>" . htmlspecialchars($comment['COMS_USERNAME']) . "</strong> ";
        echo "<small>$time</small><br>";

        if ($replyTo) {
            echo "<small style='color: gray;'>in reply to " . htmlspecialchars($replyTo) . "</small><br>";
            echo "<span class='mention'>@" . htmlspecialchars($replyTo) . "</span> ";
        }

        echo nl2br(htmlspecialchars($comment['COMS_COMMENT']));
        echo "<br><button class='btn btn-sm btn-link reply-btn' data-id='{$comment['COMS_ID']}'>Reply</button>";
        echo "</div>";

        
        fetchComments($pdo, $event_id, $comment['COMS_ID'], $level + 1);
    }
}

fetchComments($pdo, $event_id);