<!DOCTYPE HTML>
<html>
<head>
<style>


#frame0,body{
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
  top: 25%;
  width: 90%;
  left: 10%;

}  
 .hello
 {
      
      width:200px; 
      height:40px; 
      margin:10px;
      text-align: center;
  
      padding:10px;
      border:1px solid #aaaaaa;
    }
  }
 #frame1 {
  
   position: absolute;
   width: 50%;
   top:40%;
   left: 40%;
   height: 80%;
   overflow: hidden;
   border-radius: 3px;
   border-right: 10px ;
   border-color: #000099;
  
}
#frame2 {
  position: fixed;
  top:30%;
   width: 50%;
   left: 40%;
   right: 0px;
   height: 85%;
 border-radius: 3px;
}
#sub{
  font-size: 20px;
  border-radius: 5px;
  background-color: yellow;
  width: 200px;
  text-align: center;

}

.hello2{
  display: inline-block;
  margin: 20px;
}

  
</style>
<?php
include 'db.php';
$sno=$_POST['sno'];

$cmm1="select words from eng where sno='$sno'";
$res1=mysqli_query($conn,$cmm1);
$row=mysqli_fetch_array($res1);
$w=$row[0];
$words=explode(",",$w);

$w1=$words;
$arr=shuffle($words);

?>
<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}


function display(){
  var size=<?php echo sizeof($w1);?>;

for (var i = 0; i < size; i++) {
  var j=i+1000;
 var val = document.getElementById(j).innerHTML;
 document.getElementById(i).value = val;
};
}
</script>
</head>
<body>
  <div id="frame0">
    <header id="header">
                
                    <ul>
                        <li id="h1"><a href="index.html">EDG</a></li>
                        <li id="ot1"><a href="index.html">Home</a></li>
                        <li id="ot"><a href="Blog.html">Blog</a></li>
                        <li id="ot"><a href="Games.php">Games</a></li>
                        <li id="ot"><a href="loginmain.html" class="button special">Login</a></li>
                        
                        <li id="ot"><a href="Signup.html" >Sign Up</a></li>
                    </ul>
                
            </header>
</div>
<div id="topic">
    Memory check game
  </div>
<div id="form">
	<form method="get" action="samplecheck.php">
      <div id="frame1">
	<?php
      for ($i=0; $i <sizeof($words) ; $i++) { 
         
         $id=$i+1000;
         echo "<div id='num'>";
         echo $i+1;
        echo "<div>";
      	echo "<div id='$id'  class='hello' ondrop='drop(event)' ondragover='allowDrop(event)' >";
      	echo "</div>";
        echo"<br>";
}
 ?></div>
   <div id="frame2">
	<?php
      for ($i=0; $i <sizeof($w1) ; $i++) { 
         echo "<h1 draggable='true' ondragstart='drag(event)' id='drag$i' class='hello2'>";
      	echo $words[$i];
      	echo "</h1>";
      }
      for ($i=0; $i <sizeof($w1) ; $i++) { 
echo "<input type='hidden' name='$i'  id='$i'>";
             }?><div>
<input type="hidden" name="sno" value="<?php echo "$sno";?>">
<input type="submit" value="submit" id="sub"  onclick="display()">
 </form>

</div>
</body>
</html>


