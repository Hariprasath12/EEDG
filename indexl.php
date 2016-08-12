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
		<title>Educational Game</title>
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
	<body class="landing">

		<!-- Header -->
			<header id="header">
				<h1><a href="index.html">EDG</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="indexl.php">Home</a></li>
						<li><a href="Blog.html">Blog</a></li>
						<li><a href="Games.php">Games</a></li>
						<li><a href="#"><?php echo $name;?></a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</nav>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>Hi. This is EDG.</h2>
				<p>We are Trying to give best game</p>
				<p>Take a Sample Test and Play a Game</p>

				<ul class="actions">
					<li>
						<a href="samplemain.php" class="button big">Sample Test</a>
					</li>
				</ul>
				&nbsp;<br>
				&nbsp;&nbsp;
			</section>

		
		 <footer id="footer">
				
				
					<div class="row">
						<div class="8u 12u$(medium)">
							<ul class="copyright">
								<li>&copy; Untitled. All rights reserved.</li>
								
							</ul>
						</div>
						<div class="4u$ 12u$(medium)">
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
