
<?php
session_start();
include'db.php';
$check=$_SESSION['login_email'];
$session=mysqli_query($conn,"SELECT name FROM login WHERE email='$check'");
$row=mysqli_fetch_array($session);
$login_session=$row['name'];
$_SESSION['name']=$login_session;
if(!isset($login_session))
{
header("Location:loginmain.html");
}
?>