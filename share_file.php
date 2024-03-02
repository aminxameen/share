<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if filename and filedata are set and not empty
    if (isset($_POST["filename"]) && isset($_POST["filedata"]) && !empty($_POST["filename"]) && !empty($_POST["filedata"])) {
        // Get filename and filedata from the form
        $filename = $_POST["filename"];
        $filedata = $_POST["filedata"];
        
        // Simulated database or storage saving logic
        // For demonstration, we'll just print the filename and filedata
        echo "<h2>File Shared Successfully</h2>";
        echo "<p>Filename: $filename</p>";
        echo "<pre>File Data: $filedata</pre>";
    } else {
        // If filename or filedata is not set or empty, display an error message
        echo "<h2>Error: Filename and File Data are required</h2>";
    }
} else {
    // If the form is not submitted, redirect back to create.php
    header("Location: create.php");
    exit; // Stop executing further
}
?>
