<?php
session_start();
include"db.php";
$sno=$_GET['sno'];
$cmm="select question,options from sample where sno='$sno' ";
$result=mysqli_query($conn,$cmm);
$row=mysqli_fetch_array($result);
$options=$row[1];
$opt=explode(",",$options);

?>
<!DOCTYPE html>
<html>
<head><title>Sample questions</title>
<SCRIPT TYPE="text/javascript" src="samplemain.js"></SCRIPT>
<link rel="stylesheet" type="text/css" href="samplemain.css">
	</head>
	<body>
		<div id="topic">
			Sample Test
		</div>
		<div id="name">Welcome&nbsp;<?php echo $_SESSION['name'];?></div>
		<div id="main">
		<div id="form1">
		
<form  name="nextform" action="samplemaincheck.php"  method="get" onsubmit="return validation();">
<h1 id="que"><?php echo $row[0];?></h1>
<div id="option">
	<input type="radio" name="options" value="<?php echo "$opt[0]";?>" id="opt"><?php echo "$opt[0]";?>
	<input type="radio" name="options" value="<?php echo "$opt[1]";?>" id="opt"><?php echo "$opt[1]";?>
	<input type="radio" name="options" value="<?php echo "$opt[2]";?>" id="opt"><?php echo "$opt[2]";?>
	<input type="radio" name="options" value="<?php echo "$opt[3]";?>" id="opt"><?php echo "$opt[3]";?>
	<input type="hidden" name="sno" value="<?php echo "$sno";?>">
	<input type="hidden" name="skip" value="1">
</div>
	<br>
<input type="Submit" value="Next" id="next"></form></div>
<div id="form2">
<form  method="get"   action="samplemaincheck.php"  >
	<input type="hidden" name="sno" value="<?php echo "$sno";?>">
	<input type="hidden" name="skip" value="0">
<input type="Submit" value="Skip" id="skip" >
</form></div>
</div>
</body>