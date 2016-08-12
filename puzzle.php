<!doctype html>
<html>
  <head>

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
$result=mysqli_query($conn,$cmm);
$row=mysqli_fetch_array($result);
$img=$row[0];
?>
<style type="text/css">
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

#can{
   position: absolute;
   top:25%;
   left: 30%;

}
body{
background-color:  #F7f7f7;  
}</style>
<script type="text/javascript">
function puzzle(){
        const PUZZLE_DIFFICULTY=4;
        const PUZZLE_HOVER_TINT = '#009900';
        var p;
        var canvas;
        var img;
        var pieces;
        var pw;
        var ph;
        var psw;
        var psh;
        var cp;
        var currentdropps;  

        var _mouse;
        init();

        function init(){
            img = new Image();
            img.addEventListener('load',onImage,false);
img.src = <?php echo json_encode($img);?>;

        }
        function onImage(e){
            psw = Math.floor(500/ PUZZLE_DIFFICULTY);
            psh = Math.floor(500 / PUZZLE_DIFFICULTY);
            pw = psw * PUZZLE_DIFFICULTY;
            ph = psh * PUZZLE_DIFFICULTY;
            setCanvas();
            initalPuzzle();
        }
        function setCanvas(){
            canvas = document.getElementById('canvas');
            p = canvas.getContext('2d');
            canvas.width = pw;
            canvas.height = ph;
            canvas.style.border = "1px solid black";
        }
        function initalPuzzle(){
            pieces = [];
            _mouse = {x:0,y:0};
            cp = null;
            currentdropps = null;
            p.drawImage(img, 0, 0, pw, ph, 0, 0, pw, ph);
            createTitle("Click to Start Puzzle");
            buildPieces();
        }
        function createTitle(msg){
            p.fillStyle = "#000000";
            p.globalAlpha = .4;
            p.fillRect(100,ph - 40,pw - 200,40);
            p.fillStyle = "#FFFFFF";
            p.globalAlpha = 1;
            p.textAlign = "center";
            p.textBaseline = "middle";
            p.font = "20px Arial";
            p.fillText(msg,pw / 2,ph - 20);
        }
        function buildPieces(){
            var i;
            var piece;
            var xPos = 0;
            var yPos = 0;
            for(i = 0;i < PUZZLE_DIFFICULTY * PUZZLE_DIFFICULTY;i++){
                piece = {};
                piece.sx = xPos;
                piece.sy = yPos;
                pieces.push(piece);
                xPos += psw;
                if(xPos >= pw){
                    xPos = 0;
                    yPos += psh;
                }
            }
            document.onmousedown = shufflePuzzle;
        }
        function shufflePuzzle(){
            pieces = shuffleArray(pieces);
            p.clearRect(0,0,pw,ph);
            var i;
            var piece;
            var xPos = 0;
            var yPos = 0;
            for(i = 0;i < pieces.length;i++){
                piece = pieces[i];
                piece.xPos = xPos;
                piece.yPos = yPos;
                p.drawImage(img, piece.sx, piece.sy, psw, psh, xPos, yPos, psw, psh);
                p.strokeRect(xPos, yPos, psw,psh);
                xPos += psw;
                if(xPos >= pw){
                    xPos = 0;
                    yPos += psh;
                }
            }
            document.onmousedown = onPuzzleClick;
        }
        function onPuzzleClick(e){
            if(e.layerX || e.layerX == 0){
                _mouse.x = e.layerX - canvas.offsetLeft;
                _mouse.y = e.layerY - canvas.offsetTop;
            }
            else if(e.offsetX || e.offsetX == 0){
                _mouse.x = e.offsetX - canvas.offsetLeft;
                _mouse.y = e.offsetY - canvas.offsetTop;
            }
            cp = checkPieceClicked();
            if(cp != null){
                p.clearRect(cp.xPos,cp.yPos,psw,psh);
                p.save();
                p.globalAlpha = .9;
                p.drawImage(img, cp.sx, cp.sy, psw, psh, _mouse.x - (psw / 2), _mouse.y - (psh / 2), psw, psh);
                p.restore();
                document.onmousemove = updatePuzzle;
                document.onmouseup = pieceDropped;
            }
        }
        function checkPieceClicked(){
            var i;
            var piece;
            for(i = 0;i < pieces.length;i++){
                piece = pieces[i];
                if(_mouse.x < piece.xPos || _mouse.x > (piece.xPos + psw) || _mouse.y < piece.yPos || _mouse.y > (piece.yPos + psh)){
                    //PIECE NOT HIT
                }
                else{
                    return piece;
                }
            }
            return null;
        }
        function updatePuzzle(e){
            currentdropps = null;
            if(e.layerX || e.layerX == 0){
                _mouse.x = e.layerX - canvas.offsetLeft;
                _mouse.y = e.layerY - canvas.offsetTop;
            }
            else if(e.offsetX || e.offsetX == 0){
                _mouse.x = e.offsetX - canvas.offsetLeft;
                _mouse.y = e.offsetY - canvas.offsetTop;
            }
            p.clearRect(0,0,pw,ph);
            var i;
            var piece;
            for(i = 0;i < pieces.length;i++){
                piece = pieces[i];
                if(piece == cp){
                    continue;
                }
                p.drawImage(img, piece.sx, piece.sy, psw, psh, piece.xPos, piece.yPos, psw, psh);
                p.strokeRect(piece.xPos, piece.yPos, psw,psh);
                if(currentdropps == null){
                    if(_mouse.x < piece.xPos || _mouse.x > (piece.xPos + psw) || _mouse.y < piece.yPos || _mouse.y > (piece.yPos + psh)){
                        //NOT OVER
                    }
                    else{
                        currentdropps = piece;
                        p.save();
                        p.globalAlpha = .4;
                        p.fillStyle = PUZZLE_HOVER_TINT;
                        p.fillRect(currentdropps.xPos,currentdropps.yPos,psw, psh);
                        p.restore();
                    }
                }
            }
            p.save();
            p.globalAlpha = .6;
            p.drawImage(img, cp.sx, cp.sy, psw, psh, _mouse.x - (psw / 2), _mouse.y - (psh / 2), psw, psh);
            p.restore();
            p.strokeRect( _mouse.x - (psw / 2), _mouse.y - (psh / 2), psw,psh);
        }
        function pieceDropped(e){
            document.onmousemove = null;
            document.onmouseup = null;
            if(currentdropps != null){
                var tmp = {xPos:cp.xPos,yPos:cp.yPos};
                cp.xPos = currentdropps.xPos;
                cp.yPos = currentdropps.yPos;
                currentdropps.xPos = tmp.xPos;
                currentdropps.yPos = tmp.yPos;
            }
            resetPuzzleAndCheckWin();
        }
        function resetPuzzleAndCheckWin(){
            p.clearRect(0,0,pw,ph);
            var gameWin = true;
            var i;
            var piece;
            for(i = 0;i < pieces.length;i++){
                piece = pieces[i];
                p.drawImage(img, piece.sx, piece.sy, psw, psh, piece.xPos, piece.yPos, psw, psh);
                p.strokeRect(piece.xPos, piece.yPos, psw,psh);
                if(piece.xPos != piece.sx || piece.yPos != piece.sy){
                    gameWin = false;
                }
            }
            if(gameWin){
                setTimeout(gameOver,500);
            }
        }
        function gameOver(){
             document.onmousedown = null;
    document.onmousemove = null;
    document.onmouseup = null;
          alert("Done");
          header("Location:Games.php"); 
}
        function shuffleArray(o){
            for(var j, x, i = o.length; i; j = parseInt(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
            return o;
        }
}



</script>


    <title>Puzzle</title>

   
    </head>


<body onload="puzzle();">
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
<div id="can">
    <canvas id="canvas">
</canvas>
</body>
</div>
</body>