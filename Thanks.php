<?php
session_start();
$name=$_SESSION['name'];
unset($_SESSION['name']);
unset($_SESSION['age']);
unset($_SESSION['gender']);
?>
<!DOCTYPE html>
<html>
<head><title>Thanks</title>
	<style type="text/css">
#thanks{
	position: absolute;
	top: 20%;
	left: 40%;
	font-size: 20px;
	font-style: italic;
      text-align: center;

}
	</style>
	</head>
	<body>
<div id="thanks">Thanks &nbsp;<?php echo $name; ?></div>
	</body>
</html>
