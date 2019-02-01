<?php
/// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = new mysqli("localhost", "root", "","shishyavruti");

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "select username from useraccount where username='$user_check'";
$result = $conn->query($query);
$row = $result->fetch_assoc();

$login_session =$row['username'];
if(!isset($login_session)){
header('Location: index.php'); // Redirecting To Home Page
}
?>