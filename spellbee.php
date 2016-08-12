<?php
include"weight.php";
$name=$login_session;
$no=$_SESSION['ssno'];
$weight=$_SESSION['weight'];
$level=$weight+1;
$cmm="select words from image where no='$no'";
$spell=mysqli_query($conn,$cmm);
$row=mysqli_fetch_array($spell);
$sr=$row[0];
$optx=array();
$donex=array();
$opt=explode(",",$sr);
$ran=array_rand($opt);
$arr=str_split($opt[$ran]);
$select=array_rand($arr,$level);
$_SESSION['ques']=$opt[$ran];
?>
<!DOCTYPE html>
<html>
<head><title>spell bee</title>
	<script type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="spellbee.css">
	</head>
	<body>
<div id="main">
<?php
echo "<form method='get' action='spellbeecheck.php' >";
echo"<div id='que'>";
echo"<div id='submain'>";
for ($i=0; $i <sizeof($arr) ; $i++) { 
	$copy=0;
	for ($j=0; $j <$level ; $j++) { 
		if($i==$select[$j]){
          $copy=1;
		}
	}
if($copy!=1){echo "<input type='text' name='$i' id='words'  maxlength='1' autocomplete='off' required> ";
	$copy=1;
}
	else{echo "<input type='text' name='$i' id='words' value='$arr[$i]' autocomplete='off' readonly> ";}
	}
	echo"<br>";

	echo "<input type='submit' id='submit' value='Submit'> ";
	echo"</div>";
	echo "<input type='hidden' id='words' name='no' value='$no'>";
	echo"</div>";echo "<input type='hidden'  name='arr' value='$ran'>";
echo "</form>";

?>


</div><div >
<p id="hint">
	Hint:Image which you solved in Puzzle.
</p>


</div>
</body>
</html>