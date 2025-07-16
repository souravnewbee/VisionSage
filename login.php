<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "visionsage";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE phone='$phone'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
  $user = $result->fetch_assoc();
  if (password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user['name']; // or store full user array if needed
    header("Location: index.php");
    exit();
  } else {
    echo "Incorrect password.";
  }
} else {
  echo "Phone number not found.";
}
$conn->close();
?>
