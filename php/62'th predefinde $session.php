<?php
// Start a session or resume the current session
session_start();

// Check if a session variable is set, and if not, initialize it
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

// Increment the counter session variable
$_SESSION['counter']++;

// Display the counter value
echo "Page visits: " . $_SESSION['counter'];
?>
