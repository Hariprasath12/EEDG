<?php
session_start();
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$_SESSION['name']=$name;
$_SESSION['age']=$age;
$_SESSION['gender']=$gender;

header("location:ssamplemain.php");

?>