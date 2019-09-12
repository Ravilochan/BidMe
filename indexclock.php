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

	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="https://twitter.com/bravilochan" />
	<meta name="twitter:card" content="" />
	
	
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
	
	     <link rel="stylesheet" href="css/styleclock.css">

  
</head>



	</head>
	<body>
		
	<!--<div class="fh5co-loader"></div>-->
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
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
								<li><a href="#"> Credentials </a></li>
							</ul>
						</li>

						<li><a href="rules.php">Rules </a></li>
						<li><a href="aboutus.php">About Us </a></li>
						<li><a href="Helpdesk.php">Help desk</a></li>
						<li><a href="Logout.php" >Log Out </a>
					
						</li>
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
							<div id="app"> 
                              <div id="main">
                               <div id="time">
                                <span id="hours">{{hours}}</span><span id="min">{{minutes}}</span><span id="sec">{{sec}}</span> <span id="ampm">{{ampm}}</span>
                                    </div>
                                <div id='days'>
                            <div class="days" v-for="day in days" v-bind:class="{active:day.active}">{{day.text}}</div>
                              </div>
                              <div id="fullDate">
                             <span id="month">{{month}}</span>&nbsp;<span id="date">{{date}}</span>&nbsp;<span id="year">{{year}}</span>
                                     </div>
                                       </div> 
                                       </div>
									   <br><br>
							
							<h1 class="mb30">Auction running through your mind?</h1>

						
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
  
   


<!--
 
<br><br><br><br><br><br><br>

<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				
				<div class="col-md-4 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="Aboutus.php">About</a></li>
						<li><a href="Helpdesk.php">Help Desk</a></li>
					
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">Stock</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="verification.php">Verification</a></li>
						<li><a href="rules.php">Handbook of Rules </a></li>
						
					</ul>
				</div>

				<div class="col-md-4 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Sellers</a></li>
						<li><a href="#">Find Buyers</a></li>
						<li><a href="#">TimeTable</a></li>
					
						<li><a href="index.php">Participate in Biddings</a></li>
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

