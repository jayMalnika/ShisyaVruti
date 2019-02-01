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

$conn = new mysqli("localhost", "root", "","shishyavruti");
$query = "select * from useraccount where password='$password' AND username='$username'";
$result = $conn->query($query);
if ($result->num_rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: account.php"); // Redirecting 

} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); 
}
}

?>