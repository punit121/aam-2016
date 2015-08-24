<?php
session_start();
$password = $_POST["password"];
$password = hash('sha256',$password);
if (isset($_SESSION["forgotPasswordEmail"])) {
  $email = $_SESSION["forgotPasswordEmail"];
}
include 'connection.php';
$sql = "UPDATE users SET password=$password WHERE email=$email";
if ($connection->query($sql)) {
  $connection->close();
  $_SESSION["email"] = $email;
  header('Location: ./login-complete.php');
} else {
  echo "Update failed";
}
?>
