<?php
session_start();
include 'db.php'; // Make sure this file connects to your database

// Get form data
$name = $_POST['name'];
$age = $_POST['age'];
$birthdate = $_POST['birthdate'];
$nid = $_POST['nid'];
$phone = $_POST['phone'];
$password = $_POST['password'];

// Validate required fields
if (empty($name) || empty($age) || empty($birthdate) || empty($nid) || empty($phone) || empty($password)) {
    die("❌ All fields are required.");
}

// Check if phone already registered
$stmt = $conn->prepare("SELECT id FROM users WHERE phone = ?");
$stmt->bind_param("s", $phone);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    die("❌ This phone number is already registered.");
}
$stmt->close();

// Hash password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Insert user into database
$stmt = $conn->prepare("INSERT INTO users (name, age, birthdate, nid, phone, password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sissss", $name, $age, $birthdate, $nid, $phone, $hashedPassword);

if ($stmt->execute()) {
    $_SESSION['user'] = $phone; // Save user login session
    header("Location: index.php"); // Redirect to homepage
    exit();
} else {
    echo "❌ Registration failed. Please try again.";
}

$stmt->close();
$conn->close();
?>
