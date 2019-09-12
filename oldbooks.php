<?php

include_once('bidcon.php');


$sq="SELECT * FROM bidtable";
 $record=mysqli_query($db,$sq);
 
 



 header('refresh:20;oldbooks.php');
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


	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	<script src="js/respond.min.js"></script>



 <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


	</head>
	<body>
		
		
		
		<style>
#page {
  position: relative;
  overflow-x: hidden;
  width: 100%;
  height: 100%;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
.offcanvas #page {
  overflow: hidden;
  position: absolute;
}
.offcanvas #page:after {
  -webkit-transition: 2s;
  -o-transition: 2s;
  transition: 2s;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 101;
  background: rgba(0, 0, 0, 0.7);
  content: "";
}

a {
  color: #0C9CEE;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
a:hover, a:active, a:focus {
  color: #0C9CEE;
  outline: none;
  text-decoration: none;
}

p {
  margin-bottom: 20px;
}

h1, h2, h3, h4, h5, h6, figure {
  color: #000;
  font-family: "Work Sans", Arial, sans-serif;
  font-weight: 400;
  margin: 0 0 20px 0;
}

::-webkit-selection {
  color: #fff;
  background: #0C9CEE;
}

::-moz-selection {
  color: #fff;
  background: #0C9CEE;
}

::selection {
  color: #fff;
  background: #0C9CEE;
}

.fh5co-nav {
  position: absolute;
  top: 0;
  margin: 0;
  padding: 0;
  width: 100%;
  padding: 40px 0;
  z-index: 1001;
}
@media screen and (max-width: 768px) {
  .fh5co-nav {
    padding: 20px 0;
  }
}
.fh5co-nav #fh5co-logo {
  font-size: 24px;
  margin: 0 0 2em 0;
  padding: 0;
  text-transform: uppercase;
  font-weight: bold;
}
@media screen and (max-width: 768px) {
  .fh5co-nav #fh5co-logo {
    margin-bottom: 0;
  }
}
.fh5co-nav #fh5co-logo a > span {
  color: #f35f55;
}
.fh5co-nav a {
  padding: 5px 10px;
  color: #fff;
}
@media screen and (max-width: 768px) {
  .fh5co-nav .menu-1 {
    display: none;
  }
}
.fh5co-nav ul {
  padding: 0;
  margin: 2px 0 0 0;
}
.fh5co-nav ul li {
  padding: 0;
  margin: 0;
  list-style: none;
  display: inline;
}
.fh5co-nav ul li a {
  font-size: 16px;
  padding: 30px 10px;
  text-transform: uppercase;
  color: rgba(255, 255, 255, 0.5);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
.fh5co-nav ul li a:hover, .fh5co-nav ul li a:focus, .fh5co-nav ul li a:active {
  color: white;
}
.fh5co-nav ul li.has-dropdown {
  position: relative;
}
.fh5co-nav ul li.has-dropdown .dropdown {
  width: 130px;
  -webkit-box-shadow: 0px 14px 33px -9px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 14px 33px -9px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 14px 33px -9px rgba(0, 0, 0, 0.75);
  z-index: 1002;
  visibility: hidden;
  opacity: 0;
  position: absolute;
  top: 40px;
  left: 0;
  text-align: left;
  background: #fff;
  padding: 20px;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
  -webkit-transition: 0s;
  -o-transition: 0s;
  transition: 0s;
}
.fh5co-nav ul li.has-dropdown .dropdown:before {
  bottom: 100%;
  left: 40px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
  border-bottom-color: #fff;
  border-width: 8px;
  margin-left: -8px;
}
.fh5co-nav ul li.has-dropdown .dropdown li {
  display: block;
  margin-bottom: 7px;
}
.fh5co-nav ul li.has-dropdown .dropdown li:last-child {
  margin-bottom: 0;
}
.fh5co-nav ul li.has-dropdown .dropdown li a {
  padding: 2px 0;
  display: block;
  color: #999999;
  line-height: 1.2;
  text-transform: none;
  font-size: 15px;
}
.fh5co-nav ul li.has-dropdown .dropdown li a:hover {
  color: #000;
}
.fh5co-nav ul li.has-dropdown:hover a, .fh5co-nav ul li.has-dropdown:focus a {
  color: #fff;
}
.fh5co-nav ul li.btn-cta a {
  color: #0C9CEE;
}
.fh5co-nav ul li.btn-cta a span {
  background: #f35f55;
  color: #fff;
  padding: 4px 20px;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
  -webkit-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
}
.fh5co-nav ul li.btn-cta a:hover span {
  background: #f14034 !important;
  -webkit-box-shadow: 0px 14px 20px -9px rgba(0, 0, 0, 0.75);
  -moz-box-shadow: 0px 14px 20px -9px rgba(0, 0, 0, 0.75);
  box-shadow: 0px 14px 20px -9px rgba(0, 0, 0, 0.75);
}
.fh5co-nav ul li.active > a {
  color: #fff !important;
  position: relative;
}
.fh5co-nav ul li.active > a:before {
  position: absolute;
  content: "";
  width: 8px;
  height: 8px;
  top: 0;
  margin-top: 0px;
  left: 50%;
  margin-left: -4px;
  background: #f35f55;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}

#fh5co-header,
#fh5co-counter,
.fh5co-bg {
  background-size: cover;
  background-position: top center;
  background-repeat: no-repeat;
  position: relative;
}

.fh5co-bg {
  background-size: cover;
  background-position: center center;
  position: relative;
  width: 100%;
  float: left;
  position: relative;
}

#fh5co-header a {
  color: rgba(255, 255, 255, 0.5);
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
}
#fh5co-header a:hover {
  color: white;
  border-bottom: 1px solid white;
}

.fh5co-cover {
  height: 900px;
  background-size: cover;
  background-position: top center;
  background-repeat: no-repeat;
  position: relative;
  float: left;
  width: 100%;
}
.fh5co-cover .overlay {
  z-index: 0;
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
  background: rgba(42, 54, 59, 0.9);
}
.fh5co-cover > .fh5co-container {
  position: relative;
  z-index: 10;
}
@media screen and (max-width: 768px) {
  .fh5co-cover {
    height: 600px;
  }
}
.fh5co-cover .display-t,
.fh5co-cover .display-tc {
  z-index: 9;
  height: 900px;
  display: table;
  width: 100%;
}


@media screen and (max-width: 768px) {
  .fh5co-cover .display-t,
  .fh5co-cover .display-tc {
    height: 600px;
  }
}
.fh5co-cover.fh5co-cover-sm {
  height: 600px;
}
@media screen and (max-width: 768px) {
  .fh5co-cover.fh5co-cover-sm {
    height: 400px;
  }
}
.fh5co-cover.fh5co-cover-sm .display-t,
.fh5co-cover.fh5co-cover-sm .display-tc {
  height: 600px;
  display: table;
  width: 100%;
}
@media screen and (max-width: 768px) {
  .fh5co-cover.fh5co-cover-sm .display-t,
  .fh5co-cover.fh5co-cover-sm .display-tc {
    height: 400px;
  }
}


		.fh5co-social-icons {
  margin: 0;
  padding: 0;
}
.fh5co-social-icons li {
  margin: 0;
  padding: 0;
  list-style: none;
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
}
.fh5co-social-icons li a {
  display: -moz-inline-stack;
  display: inline-block;
  zoom: 1;
  *display: inline;
  color: #0C9CEE;
  padding-left: 10px;
  padding-right: 10px;
}
.fh5co-social-icons li a i {
  font-size: 20px;
}
  
  body {
  font-family: "Work Sans", Arial, sans-serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 1.7;
  color: #828282;
background: rgba(0, 0, 0, 0.05);
}
.gototop {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 999;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
.gototop.active {
  opacity: 1;
  visibility: visible;
}
.gototop a {
  width: 50px;
  height: 50px;
  display: table;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  text-align: center;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  -ms-border-radius: 4px;
  border-radius: 4px;
}
.gototop a i {
  height: 50px;
  display: table-cell;
  vertical-align: middle;
}
.gototop a:hover, .gototop a:active, .gototop a:focus {
  text-decoration: none;
  outline: none;
}
  
  #fh5co-logo a > span {
  color: #f35f55;
}

td{ color:#fff;
}
		
		
		
		</style>
	
	
	
	<nav class="fh5co-nav" role="navigation" style=" background: rgba(42, 54, 59, 0.9);">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div id="fh5co-logo"><a href="enter.php">Bid<span>Me &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span></a></div>
				</div>
				<div class="col-xs-12 text-center menu-1">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li class="has-dropdown">
							<a href="services.php">Services</a>
							
						</li>

						<li><a href="rules.php">Rules </a></li>
						<li><a href="aboutus.php">About Us </a></li>
						<li><a href="Helpdesk.php">Help desk</a></li>
						<li><a href="Logout.php" >Log Out &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </a>
					
						</li>
			</div>
			<div id="app"> 
                              <div id="main">
							   <div id="fullDate">
                             <span id="month">&nbsp &nbsp &nbsp{{month}}</span>&nbsp;<span id="date">{{date}}</span>&nbsp;<span id="year">{{year}}</span>
                                     </div>
                               <div id="time">
<span id="hours">&nbsp &nbsp &nbsp{{hours}}</span><span id="min">{{minutes}}</span><span id="sec">{{sec}}</span> <span id="ampm">{{ampm}}</span>
                                    </div>
                                       </div> 
                                       </div>
		</div></div>
	</nav>
	<br><br><br><br><br>
	<div class="container">
	<div class="row align-items-center my-5">
	
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="images/oldbooks.jpg" alt="">
      </div>
      <!-- /.col-lg-8 -->
      <div class="col-lg-5">
        <h1 class="font-weight-light"> Vintage Books & Novels  </h1>
        <p>In the world of antique books, “old” means OLD. ... “Vintage” is another term often associated with books, and these are typically considered books more than 50 years old but less than 100. “Vintage books” tends to apply to collectibles, comics and mid-century volumes prized for their nostalgic value. </p>
	
	
      
      </div>
      <!-- /.col-md-4 -->
   
	</div>
    <!-- /.row -->

    <!-- Call to Action Well -->
	
    <div class="card text-white bg-secondary my-5 py-4 text-center">
      <div class="card-body">
	
	  <?php
        echo $alert;		
      ?>
        <p class="text-white m-0">This call to Bid. Clever Bid !
		</p>
		<br><br><br>
		<div class="row">
		<div class="col-md-4">
		
		<h4>Bid Log</h4>
		<table>
		<tr>
		<?php
		while($bidlog=mysqli_fetch_assoc($record))
		{
			
	echo "<tr>";
	echo "<td> &nbsp&nbsp&nbsp&nbsp&nbsp".$bidlog['no']."</td>";
	echo "<td>&nbsp&nbsp&nbsp".$bidlog['username']."</td>";
	echo "<td>&nbsp&nbsp&nbsp&nbsp&nbsp".$bidlog['price']."</td>";
	echo "</tr>";
	
		
		
	/*		 while($bidlog = $record->fetch_assoc()) {
        echo "id: " . $bidlog["id"]. " - Name: " . $bidlog["firstname"]. " " . $bidlog["lastname"]. "<br>";
    }*/
		
		}
		?>
		</tr></table>
		
		</div>

		<div class="col-md-4">
		<h4> Your Bid </h4>
		<form action="bidcon.php" method="post">
		 <input class="text" type="text" name="price" placeholder=" Your Bid Price " required="">
		          
<br>
          <input class="btn btn-info" type="submit" name="subbid" value="Bid">
		
		
		</form><p> </p>
		</div>
		<div class="col-md-4">
		<h4> Close to Winning line!! </h4>
		<?php 
		 $sql1="SELECT * FROM bidtable ORDER BY no DESC LIMIT 1";
 $lastone=mysqli_query($db,$sql1);
 $lastprice=mysqli_fetch_assoc($lastone);
 echo $lastprice['username'].' is about to WIN the auction by bidding amount of Rs.'.$lastprice['price'].' /- ';
 
 
 echo '<br><br>'. ' This bidding last until specified time. Winner will be announced only after completion of the whole Bidding . ';
		
		
		?>
		</div>
		
		
		</div>
      </div>
    </div><div id="contact">
		<div class="container">
				<div class="row">
					<div class="col-md-6  col-sm-4 wow fadeInLeft" data-wow-delay="0.6s">
						<h2><strong>BidMe</strong> Co.</h2>
						<p>Online auction firm<br> Providing easy handling adn interactive experience </p>
						<ul class="social-icon">
							<li><a href="https://www.facebook.com/im.lochan.ravilochan.005" class="icon-facebook"></a>Visit Our Facebook Page. You can contact us VIA Facebook</li>
							<li><a href="https://twitter.com/bravilochan" class="icon-twitter"></a>Do Follow Our Twitter Handle for future updates.</li>
							<li><a href="https://www.instagram.com/ravilochan2000/" class="icon-instagram"></a>Follow our Instagram Account.</li>
						</ul>
					</div>
					<div class="col-md-6 col-sm-4 wow fadeIn" data-wow-delay="0.9s">
						<address>
							<h3>Visit Office</h3>
							<p><i class="icon-home"></i> Hyderabad </p>
							<p><i class="icon-mobile"></i> +91 7901051813</p>
							<p><i class="icon-mail"></i> BidMe@gmail.com 
						</address>
					</div>
				
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
	
	 <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script><script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17/vue.min.js'></script>
	 <script  src="js/indexclock.js"></script>

	</body>
</html>

