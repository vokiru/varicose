<?php
// Uncomment these lines during development to display errors
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$file = 'comments.txt';
$maxCommentLength = 500; // Maximum allowed length for a comment

// Handle new comment submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['comment'])) {
        $comment = trim($_POST['comment']);
        // Validate comment length
        if (strlen($comment) > $maxCommentLength) {
            echo '<p style="color: red;">Error: Comment exceeds the maximum length of ' . $maxCommentLength . ' characters.</p>';
        } else {
            $sanitized_comment = htmlspecialchars($comment, ENT_QUOTES, 'UTF-8'); // Enhanced sanitization
            // Append the comment with a timestamp
            $timestamp = date("Y-m-d H:i:s");
            $formatted_comment = "[$timestamp] " . $sanitized_comment . "\n";
            file_put_contents($file, $formatted_comment, FILE_APPEND | LOCK_EX);
        }
    } else {
        echo '<p style="color: red;">Error: Comment cannot be empty.</p>';
    }
}

// Display existing comments
if (file_exists($file)) {
    $comments = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if (count($comments) > 0) {
        foreach ($comments as $comment) {
            // Split timestamp and comment
            $parts = explode('] ', $comment, 2);
            if (count($parts) == 2) {
                $timestamp = substr($parts[0], 1); // Remove leading '['
                $comment_text = $parts[1];
                // Output each comment within a <p> tag
                echo '<p><strong>' . htmlspecialchars($timestamp) . ':</strong> ' . nl2br(htmlspecialchars($comment_text)) . '</p>';
            } else {
                echo '<p>' . nl2br(htmlspecialchars($comment)) . '</p>';
            }
        }
    } else {
        echo '<p>No comments yet. Be the first to comment!</p>';
    }
} else {
    echo '<p>No comments yet. Be the first to comment!</p>';
}
?>
