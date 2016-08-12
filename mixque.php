<?php
include"weight.php";
$name=$login_session;
$weight=$_SESSION['weight'];
$cmm1="select sno from eng where weight='$weight'";
$res1=mysqli_query($conn,$cmm1);
while ($row=mysqli_fetch_row($res1))
 {
    $selque[]=$row[0];
 }
$random=0;
$random_keys=array_rand($selque,1);
$sno=$selque[$random_keys];
 $_SESSION['ssno']=$sno;
header("Location:puzzleandspellbee1.php");
?>