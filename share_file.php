<?php
// Start or resume the session
session_start();

// Check if the form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if filename and filedata are set and not empty
    if (isset($_POST["filename"]) && isset($_POST["filedata"]) && !empty($_POST["filename"]) && !empty($_POST["filedata"])) {
        // Get filename and filedata from the form
        $filename = $_POST["filename"];
        $filedata = $_POST["filedata"];
        
        // Simulated array of shared files in session (replace this with your actual logic)
        $sharedFiles = isset($_SESSION["shared_files"]) ? $_SESSION["shared_files"] : array();
        
        // Add the new file to the shared files array
        $sharedFiles[] = array("filename" => $filename, "filedata" => $filedata);

        // Store the updated shared files array in session
        $_SESSION["shared_files"] = $sharedFiles;

        // Display the updated shared files list
        include 'display_shared_files.php';
    } else {
        // If filename or filedata is not set or empty, display an error message
        echo "<p class='error'>Error: Filename and File Data are required</p>";
    }
} else {
    // If the form is not submitted via POST, display an error message
    echo "<p class='error'>Error: Form submission method not allowed</p>";
}
?>

<style>
    /* CSS for error messages */
    .error {
        color: #FF0000;
        font-weight: bold;
    }
</style>
