<?php
// Simulated array of shared files (replace this with your actual logic)
$sharedFiles = array(
    array("filename" => "file1.txt", "filedata" => "This is the content of file 1."),
    array("filename" => "file2.html", "filedata" => "<html><head><title>File 2</title></head><body><h1>Hello, world!</h1></body></html>")
);

// Loop through each shared file and display them
foreach ($sharedFiles as $file) {
    echo '<div class="file">';
    echo '<h3>' . $file["filename"] . '</h3>';
    echo '<pre>' . htmlspecialchars($file["filedata"]) . '</pre>';
    echo '</div>';
}
?>
