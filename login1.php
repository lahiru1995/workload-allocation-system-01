<?php
session_start();
if(isset($_SESSION["email"])){
session_destroy();
}
include_once 'dbConnection.php';
$ref=@$_GET['q'];
$email = $_POST['email'];
$password = $_POST['password'];
$v = $_POST['login'];

$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password); 
$password = addslashes($password);
$password=md5($password); 
$result = mysqli_query($con,"SELECT name FROM user WHERE email = '$email' and password = '$password' and login = '$v'") or die('Error');
$count=mysqli_num_rows($result);
if($count==1){
while($row = mysqli_fetch_array($result)) {
	$name = $row['name'];
}
$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
header("location:index.php?q=1");
//header("location:account.php?q=1");
}
else{
//header("location:login.php");
header("location:$ref?w=Wrong Username or Password");
//echo '<script>alert("Welcome to Geeks for Geeks")</script>';
}
?>