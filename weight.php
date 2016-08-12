<?php
include"session.php";
$weight=$_SESSION['weight'];
if(!isset($weight))
{
header("Location:samplemain.php");
}
?>