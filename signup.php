<?php
session_start();
$username=$_POST["name"];
$password=$_POST["password"];
$mail=$_POST["email"];
include 'db.php';
$cmm="insert into login (name,password,email)values('$username','$password','$mail')";
if (mysqli_query($conn,$cmm)) {
header("location:loginmain.html");
}
else{
	

header("location:signup.html");

 }

?>