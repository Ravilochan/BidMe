<?php
 session_start();
 session_destroy();
 unset($_SESSION['$username']);
 $_SESSION['message']=" You have successfully Logged Out ! ";
 header("refresh: 30;index.php");
 



?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BidMe &mdash; </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="BidMe.Co is an Online Auction Venue ( e-auction ) ." />
	<meta name="keywords" content="e-auction" />
	<meta name="author" content=" Ravilochan " />
	<link rel="icon" type="logoicon/ico" href="images/logoicon.png" />

	<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	<script src="js/respond.min.js"></script>


	</head>
	<body>
		
	
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row"><div id="app"> 
                              <div id="main">
							   <div id="fullDate">
                             <span id="month">{{month}}</span>&nbsp;<span id="date">{{date}}</span>&nbsp;<span id="year">{{year}}</span>
                                     </div>
                               <div id="time">
<span id="hours">{{hours}}</span><span id="min">{{minutes}}</span><span id="sec">{{sec}}</span> <span id="ampm">{{ampm}}</span>
                                    </div>
                                       </div> 
                                       </div>
		
				<div class="col-xs-12 text-center">
					<div id="fh5co-logo"><a href="index.php">Bid<span>Me</span></a></div>
				</div>
				<div class="col-xs-12 text-center menu-1">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li class="has-dropdown">
							<a href="services.php">Services</a>
							<ul class="dropdown">
								<li><a href="work.php">Recent Works </a></li>
								<!--<li><a href="#"> eCommerce</a></li> -->
								<li><a href="verification.php"> Verification </a></li>
								<li><a href="credential.php"> Credentials </a></li>
							</ul>
						</li>

						<li><a href="rules.php">Rules </a></li>
						<li><a href="Aboutus.php">About Us </a></li>
						<li><a href="Helpdesk.php">Help desk</a></li>
						<li class="has-dropdown"><a href="LogIn.php" >LogIn </a>
					
						<ul class="dropdown" data-toggle="dropdown" style="width:300px">
						 <li><div class="inner">
							<section>
								<h2>LogIn</h2>
								<form method="post" action="loginconnect.php">
									<div class="fields">
										
										<div class="field">
											<input type="text" name="username" id="username" placeholder="User Name" />
										</div>
										<div class="field">
											<input type="password" name="password" id="password" placeholder="Password" />
										</div>
										
									</div>
									
    <ul class="clearfix">
     <li> <button type="button" >Cancel</button>
    <button type="submit" name="submit">LogIn </button></li>
    </ul>	
								</form>
								<p>Not Registered Yet <a href="SignUp.php" type="button" class="btn btn-info" >Sign Up</a></p>
							</section>
						
					
				</div></li></ul></li>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);"/>
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
						
							<h1 class="mb30"> You Have Succefully Logged Out</h1>
							<div class="col-md-12 text-center animate-box">
					<p><a href="LogIn.php" class="btn btn-primary with-arrow">Log In</a></p>
				</div>
						
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div id="fh5co-team" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box row-pb-md" data-animate-effect="fadeInUp">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Thoughts &amp; Ideas</span>
					<h2>Our Team</h2>
					<p></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-post">
						<span class="fh5co-date">2451-17-737-082</span>
						<h3><a href="https://www.instagram.com/ravilochan2000/">Ravilochan Balla</a></h3>
						<p> Web Designig , UI , Backend & Database Managment</p>
						<p class="author"><img src="images/me.jpg" alt="Ravilochan"> <cite> RaviLochan </cite></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-post">
						<span class="fh5co-date">2451-17-737-065</span>
						<h3><a href="https://www.instagram.com/addkiran/">ADD Kiran </a></h3>
						<p>Stylist , Testing, Documentation and Interface Manager</p>
						<p class="author"><img src="images/add.jpeg" alt="add"> <cite> ADD </cite></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-post">
						<span class="fh5co-date">2451-17-737-085</span>
						<h3><a href="https://www.instagram.com/the_silentvoice_/">Aryan Varma</a></h3>
						<p>Idea, Content Writing , Debugging , Publicity & Admin </p>
						<p class="author"><img src="images/aryan.jpeg" alt="Aryan"> <cite> Aryan</cite></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div><br><br><br>
	<div id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4 wow fadeInLeft" data-wow-delay="0.6s">
						<h2><strong>BidMe</strong> Co.</h2>
						<p style="color:black">Online auction firm<br> Providing easy handling adn interactive experience </p>
						
					</div>
				<div class="col-md-9 col-sm-4 wow fadeInLeft" data-wow-delay="0.6s"><p><br>	<ul class="social-icon">
							<li><a href="https://www.facebook.com/im.lochan.ravilochan.005" class="icon-facebook"> Visit Our Facebook Page. You can contact us VIA Facebook</a></li>
							<li><a href="https://twitter.com/bravilochan" class="icon-twitter"> Do Follow Our Twitter Handle for future updates. </a></li>
							<li><a href="https://www.instagram.com/ravilochan2000/" class="icon-instagram">Follow our Instagram Account.</a></li>
						</ul></p>
					</div>
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p style="color:black">
						<small class="block" >&copy; 2019 BidMe. All Rights Reserved.</small><br> 
						Designed by BidMe.Co
						
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://twitter.com/bravilochan"><i class="icon-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/im.lochan.ravilochan.005"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.linkedin.com/"><i class="icon-linkedin"></i></a></li>
							<li><a href="https://dribbble.com/"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>
			
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script><script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js'></script>
	 <script  src="js/indexclock.js"></script>
</div>
	</body>
</html>

