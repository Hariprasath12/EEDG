<?php
include 'db.php';
$sno=$_GET['sno'];

$cmm1="select words from eng where sno='$sno'";
$res1=mysqli_query($conn,$cmm1);
$row=mysqli_fetch_array($res1);
$w=$row[0];
$w1=array();
$words=explode(",",$w);

for ($i=0; $i < sizeof($words); $i++) { 
	$w1[]=$_GET[$i];
}
$check=0;

for ($i=0; $i <sizeof($words) ; $i++) { 
     
	if(strcasecmp('$words[$i]','$w1[$i]')!=0){
$check=1;
		break;
}
	
}
if($check==0){
	echo "<script type=\"text/javascript\">alert('YOU wins the game');</script>"; 
}
else{
	echo "<script type=\"text/javascript\">alert('YOU lose the game');</script>"; 

}
?>