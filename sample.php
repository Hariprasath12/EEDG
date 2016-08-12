<?php
session_start();
include"db.php";
$level=$_GET['level'];
$time=$_GET['time'];
$skip=$_GET['skip'];
$name=$_SESSION['name'];
$age=$_SESSION['age'];
$gender=$_SESSION['gender'];
$cmm="insert into testdata (name,age,gender,time,level,skip)values('$name','$age','$gender','$time','$level','$skip')";
if (mysqli_query($conn,$cmm)) {
header("location:Thanks.php");
}
?>


