<?php
// Database configuarartion
$host = "localhost";
$dbname = "secure_app";
$username = "root";
$password = "";

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed");
}

// Sanitize input
$user = htmlspecialchars(trim($_POST['username']));
$pass = trim($_POST['password']);

// Hash password
$hashed_pass = hash('sha256', $pass);

// Prepared statement to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $user, $hashed_pass);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Login successful!";
} else {
    echo "Invalid credentials.";
}

$stmt->close();
$conn->close();
?>