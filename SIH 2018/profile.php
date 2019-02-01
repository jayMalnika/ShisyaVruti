<?php
session_start(); 
$error=''; 

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{

$username=$_POST['username'];
$password=$_POST['password'];

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$conn = mysqli("localhost", "root", "","shishyavruti");
// SQL query to fetch information of registerd users and finds user match.
$query = "select * from useraccount where password='$password' AND username='$username'";
$result = $conn->query($query);
if ($result->num_rows > 0) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>