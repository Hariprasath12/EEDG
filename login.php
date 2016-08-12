<?php
session_start();
$username=$_POST["username"];
$password=$_POST["password"];
include 'db.php';
$cmm="select email from login where password='$password'and email='$username'";
$result=mysqli_query($conn,$cmm);
$res=mysqli_num_rows($result);

if($res!=0){

 $_SESSION['login_email']=$username;
 header("Location:indexl.php");
}
else{
  header("Location:loginmain.html");
}
?>