<?php
// Start or resume the session
session_start();

// Reset the session data
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect back to index.php
header("Location: index.php");
exit;
?>
