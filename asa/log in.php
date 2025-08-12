<?php
// Simple hardcoded credentials (not for production)
$valid_username = "admin";
$valid_password = "12345";  // In real life, never store plain text passwords

// Get form data
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Check credentials
if ($username === $valid_username && $password === $valid_password) {
    echo "<h2>Welcome, $username!</h2>";
} else {
    echo "<h2>Login failed. Invalid username or password.</h2>";
}
?>
