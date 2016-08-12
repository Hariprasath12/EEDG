<?php
include"session.php";
$level=$_GET['level'];
$time=$_GET['time'];
$skip=$_GET['skip'];
$weight=0;
if($level<=2 && $skip>1){

$weight=1;

}
elseif ($level>=4 && $skip<2) {
	$weight=2;
}
elseif ($level>=6 && $skip<4) {
	$weight=3;
}
elseif ($level>=8 && $skip<6) {
	$weight=4;
}
elseif ($level>=10 && $skip<8) {
	$weight=5;
}
$weight=1;
$_SESSION['weight']=$weight;
$email=$check;
$date= date("m/d/y"); 
date_default_timezone_set('Asia/Kolkata');
$itime=date('H:i');
$iw=$weight;
$fw=0;
$ftime=0;
$cmm="insert into userdetails (email,date,iw,fw,itime,ftime)values('$email','$date','$iw','$fw','$itime','$ftime')";
if (mysqli_query($conn,$cmm)) {
header("location:Games.php");
}
else{

echo "error";

 }

?>