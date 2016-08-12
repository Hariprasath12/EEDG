<?php
include'db.php';
include'session.php';
$check=$_SESSION['login_email'];
$name=$login_session;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Games</title>
		<style type="text/css">
		a{ 
			text-decoration: none;
			}</style>
		
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">EDG</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="Blog.html">Blog</a></li>

						<li><a href="#"><?php echo $name;?></a></li>
						<li><a href="logout.php" class="button special">Logout</a></li>
					</ul>
				</nav>
			</header>

<section id="one" class="wrapper style1 special">
	
				<div class="container">
					<header class="major">
						<h2>Collection of games</h2>
						<p>Just play. Have fun. Enjoy the game.</p>
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box">
								<a href="puzzle.php">
								<i class="icon big rounded color1 fa-cloud"></i>
								<h3>Puzzle</h3>
								<p>Solve the image and have the fun.</p></a>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<a href="intspellbeemain.php">
								<i class="icon big rounded color9 fa-desktop"></i>
								<h3>Missing Letters</h3>
								<p>Have fun and increase memory power.</p></a>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<a href="arithmetic.html">
								<i class="icon big rounded color6 fa-rocket"></i>
								<h3> ArithmeticGame </h3>
								<p>Play with Numbers with time.</p></a>
							</section>
						</div>
					</div>
				</div>
			</section>
			<section id="one" class="wrapper style1 special">
				<div class="container">
					
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<section class="box">
								<a href="samplemaineng.php">
								<i class="icon big rounded color1 fa-cloud"></i>
								<h3>Memory Game</h3>
								<p>Play and check the memory.</p></a>
							</section>
						</div>
						<div class="4u 12u$(medium)">
							<section class="box">
								<a href="hang.html">
								<i class="icon big rounded color9 fa-desktop"></i>
								<h3>Hangman</h3>
								<p>Play the Game.</p></a>
							</section>
						</div>
						<div class="4u$ 12u$(medium)">
							<section class="box">
								<a href="mixque.php">
								<i class="icon big rounded color6 fa-rocket"></i>
								<h3>All in one Game</h3>
								<p>All in one place</p></a>
							</section>
						</div>
					</div>
				</div>
			</section>
<footer id="footer"><div class="4u$ 12u$(medium)">
							<ul class="icons">
								<li>
									<a class="icon rounded fa-facebook"><span class="label">Facebook</span></a>
								</li>
								<li>
									<a class="icon rounded fa-twitter"><span class="label">Twitter</span></a>
								</li>
								<li>
									<a class="icon rounded fa-google-plus"><span class="label">Google+</span></a>
								</li>
								<li>
									<a class="icon rounded fa-linkedin"><span class="label">LinkedIn</span></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>

	</body>
</html>

