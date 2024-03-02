<?php
// Start or resume the session
session_start();

// Simulated array of shared files (replace this with your actual logic)
$sharedFiles = isset($_SESSION["shared_files"]) ? $_SESSION["shared_files"] : array();

// Display shared files
foreach ($sharedFiles as $file) {
    echo '<div class="file">';
    echo '<h3>' . $file["filename"] . '</h3>';
    echo '<pre>' . htmlspecialchars($file["filedata"]) . '</pre>';
    echo '</div>';
}
?>

<style>
    /* CSS for shared files */
    .file {
        margin-bottom: 20px;
        padding: 20px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 4px;
    }
    .file h3 {
        margin-top: 0;
        color: #333;
    }
    .file pre {
        white-space: pre-wrap;
        word-wrap: break-word;
    }
</style>
