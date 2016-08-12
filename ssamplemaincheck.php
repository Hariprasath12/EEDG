<?php
session_start();
include "db.php";
$sno=$_GET['sno'];
$skip=$_GET['skip'];
$selque=array();
$random=0;
$myquenum=$_SESSION['questionnum']['ques'];
$count=$_SESSION['count'];
$done=explode(",",$myquenum);
$cmm="select level from sample where sno='$sno' ";
$res=mysqli_query($conn,$cmm);
$lev=mysqli_fetch_array($res);
$level=$lev[0];
if($skip==1)
{ //no skip
$cmm="select answer from sample where sno='$sno' ";
$result=mysqli_query($conn,$cmm);
$row=mysqli_fetch_array($result);
$options=$_GET['options'];
//if answer is correct
if(strcmp("$options","$row[0]")==0){
//change sublevel
$level++;
//select next question level and sublevel
$cmm1="select sno from sample where level='$level'";
$res1=mysqli_query($conn,$cmm1);
$nques=mysqli_num_rows($res1);
while ($row=mysqli_fetch_row($res1))
    {
$selque[]=$row[0];
    	 }
 //random 
$random_keys=array_rand($selque,1);
$random=$selque[$random_keys];
if($count==10){
	$start=$_SESSION['start'];
	$end=time();
	$fin=$end-$start;
	$skip=$_SESSION['skip'];
    unset($_SESSION['skip']);
    unset($_SESSION['start']);
unset($_SESSION['questionnum']['ques']);
    header("Location:sample.php?level=$level&time=$fin&skip=$skip");}
    else{
    $count++;
    $_SESSION['count']=$count;

$_SESSION['questionnum']['ques'].=",".$random;

header("Location:samplemain1.php?sno=$random");}
}
else{
	if($count==10){
		$start=$_SESSION['start'];
	$end=time();
	$fin=$end-$start;
    $skip=$_SESSION['skip'];
    unset($_SESSION['skip']);
    unset($_SESSION['start']);
 unset($_SESSION['questionnum']['ques']);
     header("Location:ssample.php?level=$level&time=$fin&skip=$skip");

    }
    else{
 $cmm1="select sno from sample where level='$level'";
$res1=mysqli_query($conn,$cmm1);
$nques=mysqli_num_rows($res1);
while ($row=mysqli_fetch_row($res1))
    {
    	$resmain=0;
    	$resmain=array_search("$row[0]",$done);
    	if($resmain==0){ $selque[]=$row[0];}
       }
       $random_keys=array_rand($selque,1);
$random=$selque[$random_keys];
$count++;
    $_SESSION['count']=$count;
$_SESSION['questionnum']['ques'].=",".$random;
header("Location:ssamplemain1.php?sno=$random");
 }
}}
else{
    $skp=0;
    $skp=$_SESSION['skip'];
    $_SESSION['skip']=1+$skp;
	if($count==10){
		$start=$_SESSION['start'];
	$end=time();
	$fin=$end-$start;
	$skip=$_SESSION['skip'];
    unset($_SESSION['skip']);
  unset($_SESSION['start']);
unset($_SESSION['questionnum']['ques']);
    header("Location:ssample.php?level=$level&time=$fin&skip=$skip");
    }
    else{
    $cmm1="select sno from sample where level='$level'";
$res1=mysqli_query($conn,$cmm1);
$nques=mysqli_num_rows($res1);
while ($row=mysqli_fetch_row($res1))
    {
    	$resmain=0;
    	$resmain=array_search("$row[0]",$done);
    	if($resmain==0){ $selque[]=$row[0];}
       }
       $random_keys=array_rand($selque,1);
$random=$selque[$random_keys];
$count++;
    $_SESSION['count']=$count;
$_SESSION['questionnum']['ques'].=",".$random;
header("Location:ssamplemain1.php?sno=$random");
}
}
?>