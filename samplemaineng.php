<!DOCTYPE HTML>
<html>
<head>
<?php
include 'session.php';
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

$cmm1="select words from eng where sno='$sno'";
$res1=mysqli_query($conn,$cmm1);
$row=mysqli_fetch_array($res1);
$w=$row[0];
$words=explode(",",$w);
?>
<style type="text/css">
#frame0,#topic{
 margin: 0px;
padding: 0px;
border: 0px none;
font: inherit;
vertical-align: baseline;
}
#frame0 {

  width: 100%;
   position: absolute;
  height: 15%;
  left: 0px;
  top:0px;
   overflow: hidden;
   color:#333334;
   
   background-color: #383B43;
 
   }

a{
    text-decoration: none;
    color: #FFF;

  }
  li{ 
    display:inline;
    margin: 20px;
   }
  #header{
    position: absolute;
    top: 20px;
   
   font-size: 1.1em;
   display: inline;

   
  }
  #h1{
    font-style: italic;
    font-size: 2em;
    color: #FFF;
    font-weight: 3px;
  }

  #ot1{
   
   padding-left:700px; 

  }

  #topic{
    text-align: center;
    font-size: 35px;
    font-style: italic;
    position: absolute;
    top: 17%;
    left: 40%;
    background-color: yellow;
    border-radius: 4px;
    padding:4px;

  }
  #form{
    position: absolute;
    top: 35%;
    left: 43%;

  }
  #num,#words{
    display: inline-block;
  }
  #words{
    padding: 2px;
    border: 2px;
    background-color: blue;
    margin: 2px;
    border-radius: 3px;
    width: 200px;
    height: 30px;
    text-align: center;
    font-size: 15px;
  }
  #num{
    margin: 6px;
    font-size: 20px;

  }
  #sub{
    position: absolute;
    left: 30%;
    background-color: yellow;
    border-radius: 5px;
    font-size: 20px;
    text-align: center;
    margin: 20px;

  }

</style>
	
</head>
<script type="text/javascript">

function val(){
  
var form = document.getElementById("f1");
form.submit();
}
window.onload = function() {
   setInterval(val, 30000); 
   
}
</script>
<body >
<div id="frame0">
    <header id="header">
                
                    <ul>
                        <li id="h1"><a href="index.html">EDG</a></li>
                        <li id="ot1"><a href="index.html">Home</a></li>
                        <li id="ot"><a href="Blog.html">Blog</a></li>
                        <li id="ot"><a href="Games.php" class="button special">Games</a></li>
                        <li id="ot"><a href="#" ><?php echo $name;?></a></li>
                        <li id="ot"><a href="logout.php" >Logout</a></li>
                        
                        
                    </ul>
                
            </header>
</div>
<div id="topic">
		Memory check game
	</div>
  <div id="form">
	<form method="post" action="engsample.php" id="f1">

<?php
      for ($i=0; $i <sizeof($words) ; $i++) { 
       
      	
        echo "<div id='num'>";
         echo $i+1;
         
         echo "</div>";
         
         echo "<div id='words'>";
      	echo $words[$i];
      	echo "</div>";
        echo"<br>";
}?>
<input type="hidden" name="sno" value="<?php echo $sno;?>">
<button id="sub">submit</button>
</form></div>
</body>