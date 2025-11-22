<?php
include 'config.php'; // sambungkan ke database
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kang_biting";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  if (password_verify($pass, $row['password'])) {
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['username'] = $row['username'];
    header("Location: Home.php");
    exit();
  } else {
    echo "Incorrect password!";
  }
} else {
  echo "Email not found!";
}

$conn->close();
?>