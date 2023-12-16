<?php
// Read the package.json file
$packageJson = json_decode(file_get_contents('package.json'), true);

// Access specific values
$appName = $packageJson['name'];
$appVersion = $packageJson['version'];


// secured_page.php

// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php'); // Redirect to the login page if not logged in
    exit();
}

// The rest of your secured page code goes here...
header('Location: douma.php'); 
?>

