<?php
include"weight.php";
$name=$login_session;
$no=$_GET['sno'];
$weight=$_SESSION['weight'];
$level=$weight+1;
$cmm="select words from image where no='$no'";
$spell=mysqli_query($conn,$cmm);
$row=mysqli_fetch_array($spell);
$sr=$row[0];
$optx=array();
$donex=array();
$done=$_SESSION['ques'];
$donex=explode(",",$done);
$optx=explode(",",$sr);
	for ($i=0; $i < sizeof($optx); $i++) { 
		$resmain=0;
    	$resmain=array_search("$optx[$i]",$donex);
    	if($resmain==0){ $opt[$i]=$optx[$i];}
	}
$ran=array_rand($opt);
$arr=str_split($opt[$ran]);
$select=array_rand($arr,$level);
$_SESSION['ques']=$opt[$ran].",".$done;
?>
<!DOCTYPE html>
<html>
<head><title>Missing Letters</title>
	<link rel="stylesheet" type="text/css" href="intspellbee.css">
	
	</head>

	<body>
		<div id="frame0">
    <header id="header">
                
                    <ul>
                        <li id="h1"><a href="index.html">EDG</a></li>
                        <li id="ot1"><a href="index.html">Home</a></li>
                        <li id="ot"><a href="Blog.html">Blog</a></li>
                        <li id="ot"><a href="Games.php">Games</a></li>
                      <li id="ot"><a href="#"><?php echo $name;?></a></li>
						<li id="ot"><a href="logout.php">Logout</a></li>
                    </ul>
                
            </header>
</div>
<div id="main">
<?php
echo "<form method='get' action='intspellbeecheck.php' >";
echo"<div id='que'>";

for ($i=0; $i <sizeof($arr) ; $i++) { 
	$copy=0;
	for ($j=0; $j <$level ; $j++) { 
		if($i==$select[$j]){
          $copy=1;
		}
	}
if($copy!=1){echo "<input type='text' name='$i' id='words' maxlength='1' autocomplete='off' required> ";
	$copy=1;
}
	else{echo "<input type='text' name='$i' id='words' value='$arr[$i]' autocomplete='off' readonly> ";}
	}
echo"<br>";

	echo "<input type='submit' id='submit' value='Submit'> ";
	echo "<input type='hidden'  name='no' value='$no'>";
echo"</div>";	echo "<input type='hidden' name='arr' value='$ran'>";
echo "</form>";

?>
</div>
</body>
</html>