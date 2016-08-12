<?php
session_start();
include "db.php";
$sno=$_GET['arr'];
$no=$_GET['no'];
$cmm="select words from image where no='$no'";
$spell=mysqli_query($conn,$cmm);
$row=mysqli_fetch_array($spell);
$sr=$row[0];
$opt=explode(",",$sr);
$ran=$opt[$sno];
$arr=str_split($ran);
$val=array();
$fin=0;
for ($i=0; $i <strlen($ran) ; $i++) { 
	$val[$i]=$_GET[$i];}
for ($i=0; $i <strlen($ran) ; $i++) { 
	if(strcasecmp($val[$i], $arr[$i])!=0){
$fin=1;}
}
$count=$_SESSION['ques'];
$countx=explode(",",$count);
if(sizeof($countx)<sizeof($opt)){
if($fin==1){	
	echo "<script type=\"text/javascript\">alert('You Lose the game');</script>";
	header("Location:Games.php");
	}
else{
	header("Location:intspellbee2.php?sno=$no");

}
}
else{
	echo "<script type=\"text/javascript\">alert('game over');</script>";
	

}
?>