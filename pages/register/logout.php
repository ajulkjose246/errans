<?php
session_start();

// Destroy the session
session_unset(); // Clear all session variables
session_destroy(); // Destroy the session data on the server

echo "Session destroyed";
?>
