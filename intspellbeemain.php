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
$cmm="select src from image where no='$sno'";
$spell=mysqli_query($conn,$cmm);
$row=mysqli_fetch_array($spell);
$img=$row[0];
?>
<!DOCTYPE html>
<html>
<head><title>Missing Letters</title>
	<script type="text/javascript">
	function val(){
  
var form = document.getElementById("f1");
form.submit();
}
window.onload = function() {
   setInterval(val, 1000); 
   
}
</script>
	<link rel="stylesheet" type="text/css" href="intspellbeemain.css">
	

	</head>
	<body>
	  <div id="frame0">
    <header id="header">
                
                    <ul>
                        <li id="h1"><a href="index.html">EDG</a></li>
                        <li id="ot1"><a href="index.html">Home</a></li>
                        <li id="ot"><a href="Blog.html">Blog</a></li>
                        <li id="ot"><a href="Games.php">Games</a></li>
                        <li><a href="#"><?php echo $name;?></a></li>
                        <li><a href="logout.php" >Logout</a></li>
                    </ul>
                
            </header>
</div>
<form action="intspellbee.php" method="get" id="f1">
<div id="main">
	<h1>Missing Letters</h1>

	<img src="<?php echo $img;?>" width="500px"; height="400px"; id="image">
	<input type="hidden" name="sno" value="<?php echo $sno;?>">
	<br>
	<button id="sub" type="hidden">submit</button>
</div></form>
</body>
</html>


