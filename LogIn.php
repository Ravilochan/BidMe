<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LogIn &mdash; BidMe.Co </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="BidMe.Co is an Online Auction Venue ( e-auction ) ." /><!-- Edit  This -->
	<meta name="keywords" content="e-auction","" />
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
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
		<div class="row">
		<div id="app"> 
                              <div id="main">
							   <div id="fullDate">
                             <span id="month">{{month}}</span>&nbsp;<span id="date">{{date}}</span>&nbsp;<span id="year">{{year}}</span>
                                     </div>
                               <div id="time">
<span id="hours">{{hours}}</span><span id="min">{{minutes}}</span><span id="sec">{{sec}}</span> <span id="ampm">{{ampm}}</span>
                                    </div>
                                       </div> 
                                       </div>
		
		
		
		
			<!--<div class="row">-->
				<div class="col-xs-12 text-center">
					<div id="fh5co-logo"><a href="index.php">Bid<span>Me</span></a></div>
				</div>
				<div class="col-xs-12 text-center menu-1">
					<ul>
						<li><a href="index.php">Home</a></li>
						<li class="has-dropdown">
							<a href="services.php">Services</a>
							<ul class="dropdown">
								<li><a href="work.php">Recent Works </a></li>
								
								<li><a href="verification.php"> Verification </a></li>
								<li><a href="credential.php"> Credentials </a></li>
							</ul>
						</li>

						<li><a href="rules.php">Rules </a></li>
						<li><a href="Aboutus.php">About Us </a></li>
						<li><a href="Helpdesk.php">Help desk</a></li>
						<li  class="has-dropdown active"><a href="LogIn.php" >LogIn </a>
					
						<ul class="dropdown" data-toggle="dropdown" style="width:300px">
						 <li><div class="inner">
							<section>
								<h2>LogIn</h2>
								<form method="post" action="loginconnect.php">
									<div class="fields">
										
										<div class="field">
											<input type="text" name="username" id="username" placeholder="Enter User Name" />
										</div>
										<div class="field">
											<input type="password" name="password" id="password" placeholder="Enter Password" />
										</div>
										
									</div>
									
    <ul class="clearfix">
     <li> <button type="button">Cancel</button>
    <button type="submit" name="submit">LogIn </button></li>
    </ul>	
								</form>
								Not Registered Yet <a href="SignUp.php" type="button" class="btn btn-info" >Sign Up</a>
							</section>
						
					
				</div></li></ul></li>
			</div>
			
		</div>
	</nav>


	
	
		<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);padding-bottom:650px;"/>
		<div class="overlay"></div>
		<div class="container">
	
				<div class="col-md-12 col-md-offset-0 text-center" style="margin-top:80px;">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<h1 class="mb30">Log In</h1>
		<form action="loginconnect.php" method="post" class="col-md-6 col-md-offset-3 col-sm-4 text-center" id="contact-form" role="form">
							<div class="col-md-6 col-sm-12 wow fadeIn text-center" data-wow-delay="0.3s">
								<input name="username" type="text" class="form-control" id="username" placeholder="Enter User Name">
							</div>
							<div class="col-md-6 col-sm-12 wow fadeIn text-center" data-wow-delay="0.3s">
								<input name="password" type="password" class="form-control" id="pass" placeholder="Enter Password">
							</div>
							
							<br><br><br>
							<div class="col-md-offset-4 col-md-4 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
								<input name="submit" type="submit" class="form-control btn btn-info" id="submit" value="Log In">
							</div>
					</form>
				
					<h2> Not yet registered 
					</h2>
					<a type="button" href="SignUp.php" class="btn btn-info">Sign Up </a>
		
		
		
		
		
		</div></div></div></div>
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
	
	
	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Get Your Dream Fulfilled </span>
					<h2>Start Your Bid </h2>
			
					<p><a href="#" type="button" class="btn btn-default">Get In Auction </a></p>
				</div>
			</div>
		</div>
	</div>
</div>
	
	
	<div id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4 wow fadeInLeft" data-wow-delay="0.6s">
						<h2><strong>BidMe</strong> Co.</h2>
						<p>Online auction firm<br> Providing easy handling adn interactive experience </p>
						<ul class="social-icon">
							<li><a href="https://www.facebook.com/im.lochan.ravilochan.005" class="icon-facebook"></a>Visit Our Facebook Page. You can contact us VIA Facebook</li>
							<li><a href="https://twitter.com/bravilochan" class="icon-twitter"></a>Do Follow Our Twitter Handle for future updates.</li>
							<li><a href="https://www.instagram.com/ravilochan2000/" class="icon-instagram"></a>Follow our Instagram Account.</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-4 wow fadeIn" data-wow-delay="0.9s">
						<address>
							<h3>Visit Office</h3>
							<p><i class="icon-location"></i> Hyderabad </p>
							<p><i class="icon-mobile"></i> +91 7901051813</p>
							<p><i class="icon-mail"></i> BidMe@gmail.com</p>
						</address>
					</div>
					<form action="contactcon.php" method="post" class="col-md-6 col-sm-4" id="contact-form" role="form">
							<div class="col-md-6 col-sm-12 wow fadeIn" data-wow-delay="0.3s">
								<input name="name" type="text" class="form-control" id="name" placeholder="Name">
							</div>
							<div class="col-md-6 col-sm-12 wow fadeIn" data-wow-delay="0.3s">
								<input name="email" type="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="col-md-12 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
								<textarea name="message" rows="5" class="form-control" id="message" placeholder="Message"></textarea>
							</div>
							<div class="col-md-offset-9 col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
								<input name="submit" type="submit" class="form-control" id="submit" value="Send">
							</div>
					</form>
				</div>
			</div>
		</div>
		
		
	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				
				<div class="col-md-4 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="Aboutus.php">About</a></li>
						<li><a href="Helpdesk.php">Help Desk</a></li>
					
						<li><a href="Aboutus">Terms</a></li>
						<li><a href="everything.html"> Demo Fun Bid </a></li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="indexclock.php">Stock</a></li>
						<li><a href="Aboutus.php">Privacy</a></li>
						<li><a href="verification.php">Verification</a></li>
						<li><a href="rules.php">Handbook of Rules </a></li>
						
					</ul>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="ind.php">Sellers</a></li>
						<li><a href="#">Find Buyers</a></li>
						<li><a href="Category.php">TimeTable</a></li>
					
						<li><a href="everything.html">Participate in Bidding Game</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2019 BidMe. All Rights Reserved.</small> 
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
	<script src="js/main.js"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js'></script>

  

    <script  src="js/indexclock.js"></script>

	</body>
</html>