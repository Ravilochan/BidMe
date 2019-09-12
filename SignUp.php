<?php

session_start();
  
 
 $db=mysqli_connect("localhost","id9113444_ravi","bidme","id9113444_bidme");
 
 $alert="";
 
 if(isset($_POST['reg']))
 {
 $username=$_POST['username'];
 $email=$_POST['email'];
 $password=$_POST['password'];
  $password2=$_POST['password2'];
  
  $s="SELECT * FROM users WHERE username='$username'";
  $result=mysqli_query($db,$s);
  
  $num=mysqli_num_rows($result);
  
  if($num==1)
  {
     $alert=" UserName already Taken ! ";  
  }
  else
  {
  if($password==$password2)
  {
   $password=md5($password);
   
   $sql=" INSERT INTO users(username,email,password) VALUE ('$username','$email','$password')";
   
   mysqli_query($db,$sql);
   $_SESSION['message']=" You are Now registered ";
   $alert=" You are now Registered ";
   $_SESSSION['username']=$username;
   
   
   $subject=" Registered Successfully !";
   $mess='Hello ,
   
Welcome to BidMe.Co ! .We are building an engaged community of users in all domains. We are excited to have you on-board. This mail confirms your registration in BidMe.Co.
   
Thank You for registering.
   
BidMe.Co.';
   mail($_POST['email'],$subject,$mess);
   header("location:enter.php");
   
  /* if(mail($_POST['email'],$subject,$mess))
   { echo ' Mail Sent !';
   }
   else{
	   echo ' Mail NOT sent ';
   }
   
   */
   
  }
 
    else{
	$alert=" Two passwords Doesn't Match ";
	
	}
}

}




?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sign Up &mdash; BidMe.Co </title>
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
<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	
	<script src="js/respond.min.js"></script>


	</head>


<style>
  .footer
  {
    font-size: 20px;
    text-align: center;
    text-decoration-color: black;
  }
  

/*-- start editing from here --*/
a {
  text-decoration: none;
}

.txt-rt {
  text-align: right;
}

/* text align right */
.txt-lt {
  text-align: left;
}

/* text align left */
.txt-center {
  text-align: center;
}

/* text align center */
.float-rt {
  float: right;
}

/* float right */
.float-lt {
  float: left;
}

/* float left */
.clear {
  clear: both;
}

/* clear float */
.pos-relative {
  position: relative;
}

/* Position Relative */
.pos-absolute {
  position: absolute;
}

/* Position Absolute */
.vertical-base {
  vertical-align: baseline;
}

/* vertical align baseline */
.vertical-top {
  vertical-align: top;
}

/* vertical align top */
nav.vertical ul li {
  display: block;
}

/* vertical menu */
nav.horizontal ul li {
  display: inline-block;
}

/* horizontal menu */
img {
  max-width: 100%;
}

/*-- end reset --*/
body {
  background-color:#9E9CA6;
 font-family: "Work Sans", Arial, sans-serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 1.7;
  color: #828282;
}

h1 {
  font-size: 3em;
  text-align: center;
  color: black;
  font-weight: 100;
  text-transform: capitalize;
  letter-spacing: 4px;
  font-family: "Work Sans", Arial, sans-serif;
}-->

/*-- main --*/
.main-w3layouts {
  padding: 3em 0 1em;
}

.main-agileinfo {
  width: 35%;
  margin: 3em auto;
 background: rgba(0, 0, 0, 0.18);
  background-size: cover;
}

.agileits-top {
  padding: 3em;
}

input[type="text"], input[type="email"], input[type="password"] {
  font-size: 0.9em;
  color: #fff;
  font-weight: 100;
  width: 94.5%;
  display: block;
  border: none;
  padding: 0.8em;
  border: solid 1px rgba(255, 255, 255, 0.37);
  -webkit-transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  transition: all 0.3s cubic-bezier(0.64, 0.09, 0.08, 1);
  background: -webkit-linear-gradient(top, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
  background-position: -800px 0;
  background-size: 100%;
  background-repeat: no-repeat;
  color: #fff;
  font-family: 'Roboto', sans-serif;
}

input.email, input.text.w3lpass {
  margin: 2em 0;
}

.text:focus, .text:valid {
  box-shadow: none;
  outline: none;
  background-position: 0 0;
}

.text:focus::-webkit-input-placeholder, .text:valid::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.7);
  font-size: .9em;
  -webkit-transform: translateY(-30px);
  -moz-transform: translateY(-30px);
  -o-transform: translateY(-30px);
  -ms-transform: translateY(-30px);
  transform: translateY(-30px);
  visibility: visible !important;
}

::-webkit-input-placeholder {
  color: #fff;
  font-weight: 100;
}

:-moz-placeholder {
  /* Firefox 18- */
  color: #fff;
}

::-moz-placeholder {
  /* Firefox 19+ */
  color: #fff;
}

:-ms-input-placeholder {
  color: #fff;
}

input[type="submit"] {
  font-size: .9em;
  color: #fff;
  background: green;
  outline: none;
  border: 1px solid #76b852;
  cursor: pointer;
  padding: 0.9em;
  -webkit-appearance: none;
  width: 100%;
  margin: 2em 0;
  letter-spacing: 4px;
}
input[type="submit"]:hover {
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  -o-transition: .5s all;
  -ms-transition: .5s all;
  transition: .5s all;
  background: black;
}

.agileits-top p {
  font-size: 1em;
  color: #fff;
  text-align: center;
  letter-spacing: 1px;
  font-weight: 300;
}

.agileits-top p a {
  color: #fff;
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  transition: .5s all;
  font-weight: 400;
}

.agileits-top p a:hover {
  color: #76b852;
}

/*-- //main --*/
/*-- checkbox --*/
.wthree-text label {
  font-size: 0.9em;
  color: #fff;
  font-weight: 200;
  cursor: pointer;
  position: relative;
}

input.checkbox {
  background: #8DC26F;
  cursor: pointer;
  width: 1.2em;
  height: 1.2em;
}

input.checkbox:before {
  content: "";
  position: absolute;
  width: 1.2em;
  height: 1.2em;
  background: inherit;
  cursor: pointer;
}

input.checkbox:after {
  content: "";
  position: absolute;
  top: 0px;
  left: 0;
  z-index: 1;
  width: 1.2em;
  height: 1.2em;
  border: 1px solid #fff;
  -webkit-transition: .4s ease-in-out;
  -moz-transition: .4s ease-in-out;
  -o-transition: .4s ease-in-out;
  transition: .4s ease-in-out;
}

input.checkbox:checked:after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  height: .5rem;
  border-color: #fff;
  border-top-color: transparent;
  border-right-color: transparent;
}

.anim input.checkbox:checked:after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  transform: rotate(-45deg);
  height: .5rem;
  border-color: transparent;
  border-right-color: transparent;
  animation: .4s rippling .4s ease;
  animation-fill-mode: forwards;
}

@keyframes rippling {
  50% {
    border-left-color: #fff;
  }

  100% {
    border-bottom-color: #fff;
    border-left-color: #fff;
  }
}

/*-- //checkbox --*/
/*-- copyright --*/
.colorlibcopy-agile {
  margin: 2em 0 1em;
  text-align: center;
}

.colorlibcopy-agile p {
  font-size: .9em;
  color: #fff;
  line-height: 1.8em;
  letter-spacing: 1px;
  font-weight: 100;
}

.colorlibcopy-agile p a {
  color: #fff;
  transition: 0.5s all;
  -webkit-transition: 0.5s all;
  -moz-transition: 0.5s all;
  -o-transition: 0.5s all;
  -ms-transition: 0.5s all;
}

.colorlibcopy-agile p a:hover {
  color: #000;
}

/*-- //copyright --*/
.wrapper {
  position: relative;
  overflow: hidden;
}

.colorlib-bubbles {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.colorlib-bubbles li {
  position: absolute;
  list-style: none;
  display: block;
  width: 40px;
  height: 40px;
  background-color: rgba(255, 255, 255, 0.15);
  bottom: -160px;
  -webkit-animation: square 20s infinite;
  -moz-animation: square 250s infinite;
  -o-animation: square 20s infinite;
  -ms-animation: square 20s infinite;
  animation: square 20s infinite;
  -webkit-transition-timing-function: linear;
  -moz-transition-timing-function: linear;
  -o-transition-timing-function: linear;
  -ms-transition-timing-function: linear;
  transition-timing-function: linear;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -o-border-radius: 50%;
  -ms-border-radius: 50%;
  border-radius: 50%;
}

.colorlib-bubbles li:nth-child(1) {
  left: 10%;
}

.colorlib-bubbles li:nth-child(2) {
  left: 20%;
  width: 80px;
  height: 80px;
  -webkit-animation-delay: 2s;
  -moz-animation-delay: 2s;
  -o-animation-delay: 2s;
  -ms-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-duration: 17s;
  -moz-animation-duration: 17s;
  -o-animation-duration: 17s;
  animation-duration: 17s;
}

.colorlib-bubbles li:nth-child(3) {
  left: 25%;
  -webkit-animation-delay: 4s;
  -moz-animation-delay: 4s;
  -o-animation-delay: 4s;
  -ms-animation-delay: 4s;
  animation-delay: 4s;
}

.colorlib-bubbles li:nth-child(4) {
  left: 40%;
  width: 60px;
  height: 60px;
  -webkit-animation-duration: 22s;
  -moz-animation-duration: 22s;
  -o-animation-duration: 22s;
  -ms-animation-duration: 22s;
  animation-duration: 22s;
  background-color: rgba(255, 255, 255, 0.25);
}

.colorlib-bubbles li:nth-child(5) {
  left: 70%;
}

.colorlib-bubbles li:nth-child(6) {
  left: 80%;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 3s;
  -moz-animation-delay: 3s;
  -o-animation-delay: 3s;
  -ms-animation-delay: 3s;
  animation-delay: 3s;
  background-color: rgba(255, 255, 255, 0.2);
}

.colorlib-bubbles li:nth-child(7) {
  left: 32%;
  width: 160px;
  height: 160px;
  -webkit-animation-delay: 7s;
  -moz-animation-delay: 7s;
  -o-animation-delay: 7s;
  -ms-animation-delay: 7s;
  animation-delay: 7s;
}

.colorlib-bubbles li:nth-child(8) {
  left: 55%;
  width: 20px;
  height: 20px;
  -webkit-animation-delay: 15s;
  -moz-animation-delay: 15s;
  animation-delay: 15s;
  -webkit-animation-duration: 40s;
  -moz-animation-duration: 40s;
  animation-duration: 40s;
}

.colorlib-bubbles li:nth-child(9) {
  left: 25%;
  width: 10px;
  height: 10px;
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
  -webkit-animation-duration: 40s;
  animation-duration: 40s;
  background-color: rgba(255, 255, 255, 0.3);
}

.colorlib-bubbles li:nth-child(10) {
  left: 90%;
  width: 160px;
  height: 160px;
  -webkit-animation-delay: 11s;
  animation-delay: 11s;
}

@-webkit-keyframes square {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
    -moz-transform: translateY(-700px) rotate(600deg);
    -o-transform: translateY(-700px) rotate(600deg);
    -ms-transform: translateY(-700px) rotate(600deg);
    transform: translateY(-700px) rotate(600deg);
  }
}

@keyframes square {
  0% {
    -webkit-transform: translateY(0);
    -moz-transform: translateY(0);
    -o-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }

  100% {
    -webkit-transform: translateY(-700px) rotate(600deg);
    -moz-transform: translateY(-700px) rotate(600deg);
    -o-transform: translateY(-700px) rotate(600deg);
    -ms-transform: translateY(-700px) rotate(600deg);
    transform: translateY(-700px) rotate(600deg);
  }
}

/*-- responsive-design --*/
@media(max-width:1440px) {
  input[type="text"], input[type="email"], input[type="password"] {
    width: 94%;
  }
}

@media(max-width:1366px) {
  h1 {
    font-size: 2.6em;
  }

  .agileits-top {
    padding: 2.5em;
  }

  .main-agileinfo {
    margin: 2em auto;
  }

  .main-agileinfo {
    width: 36%;
  }
}

@media(max-width:1280px) {
  .main-agileinfo {
    width: 40%;
  }
}

@media(max-width:1080px) {
  .main-agileinfo {
    width: 46%;
  }
}

@media(max-width:1024px) {
  .main-agileinfo {
    width: 49%;
  }
}

@media(max-width:991px) {
  h1 {
    font-size: 2.4em;
  }

  .main-w3layouts {
    padding: 2em 0 1em;
  }
}

@media(max-width:900px) {
  .main-agileinfo {
    width: 58%;
  }

  input[type="text"], input[type="email"], input[type="password"] {
    width: 93%;
  }
}

@media(max-width:800px) {
  h1 {
    font-size: 2.2em;
  }
}

@media(max-width:736px) {
  .main-agileinfo {
    width: 62%;
  }
}

@media(max-width:667px) {
  .main-agileinfo {
    width: 67%;
  }
}

@media(max-width:600px) {
  .agileits-top {
    padding: 2.2em;
  }

  input.email, input.text.w3lpass {
    margin: 1.5em 0;
  }

  input[type="submit"] {
    margin: 2em 0;
  }

  h1 {
    font-size: 2em;
    letter-spacing: 3px;
  }
}

@media(max-width:568px) {
  .main-agileinfo {
    width: 75%;
  }

  .colorlibcopy-agile p {
    padding: 0 2em;
  }
}

@media(max-width:480px) {
  h1 {
    font-size: 1.8em;
    letter-spacing: 3px;
  }

  .agileits-top {
    padding: 1.8em;
  }

  input[type="text"], input[type="email"], input[type="password"] {
    width: 91%;
  }

  .agileits-top p {
    font-size: 0.9em;
  }
}

@media(max-width:414px) {
  h1 {
    font-size: 1.8em;
    letter-spacing: 2px;
  }

  .main-agileinfo {
    width: 85%;
    margin: 1.5em auto;
  }

  .text:focus, .text:valid {
    background-position: 0 0px;
  }

  .wthree-text ul li, .wthree-text ul li:nth-child(2) {
    display: block;
    float: none;
  }

  .wthree-text ul li:nth-child(2) {
    margin-top: 1.5em;
  }

  input[type="submit"] {
    margin: 2em 0 1.5em;
    letter-spacing: 3px;
  }

  input[type="submit"] {
    margin: 2em 0 1.5em;
  }

  .colorlibcopy-agile {
    margin: 1em 0 1em;
  }
}

@media(max-width:384px) {
  .main-agileinfo {
    width: 88%;
  }

  .colorlibcopy-agile p {
    padding: 0 1em;
  }
}

@media(max-width:375px) {
  .agileits-top p {
    letter-spacing: 0px;
  }
}

@media(max-width:320px) {
  .main-w3layouts {
    padding: 1.5em 0 0;
  }

  .agileits-top {
    padding: 1.2em;
  }

  .colorlibcopy-agile {
    margin: 0 0 1em;
  }

  input[type="text"], input[type="email"], input[type="password"] {
    width: 89.5%;
    font-size: 0.85em;
  }

  h1 {
    font-size: 1.7em;
    letter-spacing: 0px;
  }

  .main-agileinfo {
    width: 92%;
    margin: 1em auto;
  }

  .text:focus, .text:valid {
    background-position: 0 0px;
  }

  input[type="submit"] {
    margin: 1.5em 0;
    padding: 0.8em;
    font-size: .85em;
  }

  .colorlibcopy-agile p {
    font-size: .85em;
  }

  .wthree-text label {
    font-size: 0.85em;
  }

  .main-w3layouts {
    padding: 1em 0 0;
  }
}
.Logincss:hover
{
color:black;
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



@font-face {
  font-family: 'icomoon';
  src: url("../fonts/icomoon/icomoon.eot?srf3rx");
  src: url("../fonts/icomoon/icomoon.eot?srf3rx#iefix") format("embedded-opentype"), url("../fonts/icomoon/icomoon.ttf?srf3rx") format("truetype"), url("../fonts/icomoon/icomoon.woff?srf3rx") format("woff"), url("../fonts/icomoon/icomoon.svg?srf3rx#icomoon") format("svg");
  font-weight: normal;
  font-style: normal;
}

body {
  font-family: "Work Sans", Arial, sans-serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 1.7;
  color: #828282;
  background: #fff;
}

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

#fh5co-footer {
	margin-top:-120px;
}

#fh5co-footer .fh5co-footer-links {
  padding: 0;
  margin: 0;
}
#fh5co-footer .fh5co-footer-links li {
  padding: 0;
  margin: 0;
  list-style: none;
}
#fh5co-footer .fh5co-footer-links li a {
  color: #000;
  text-decoration: none;
}
#fh5co-footer .fh5co-footer-links li a:hover {
  text-decoration: underline;
}
#fh5co-footer .fh5co-widget {
  margin-bottom: 30px;
}
@media screen and (max-width: 768px) {
  #fh5co-footer .fh5co-widget {
    text-align: left;
  }
}
#fh5co-footer .fh5co-widget h3 {
  margin-bottom: 15px;
  font-weight: bold;
  font-size: 15px;
  letter-spacing: 2px;
  text-transform: uppercase;
}
#fh5co-footer .copyright .block {
  display: block;
}

#fh5co-offcanvas {
  position: absolute;
  z-index: 1901;
  width: 270px;
  background: black;
  top: 0;
  right: 0;
  top: 0;
  bottom: 0;
  padding: 45px 40px 40px 40px;
  overflow-y: auto;
  display: none;
  -moz-transform: translateX(270px);
  -webkit-transform: translateX(270px);
  -ms-transform: translateX(270px);
  -o-transform: translateX(270px);
  transform: translateX(270px);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
@media screen and (max-width: 768px) {
  #fh5co-offcanvas {
    display: block;
  }
}
.offcanvas #fh5co-offcanvas {
  -moz-transform: translateX(0px);
  -webkit-transform: translateX(0px);
  -ms-transform: translateX(0px);
  -o-transform: translateX(0px);
  transform: translateX(0px);
}
#fh5co-offcanvas a {
  color: rgba(255, 255, 255, 0.5);
}
#fh5co-offcanvas a:hover {
  color: rgba(255, 255, 255, 0.8);
}
#fh5co-offcanvas ul {
  padding: 0;
  margin: 0;
}
#fh5co-offcanvas ul li {
  padding: 0;
  margin: 0;
  list-style: none;
}
#fh5co-offcanvas ul li > ul {
  padding-left: 20px;
  display: none;
}
#fh5co-offcanvas ul li.offcanvas-has-dropdown > a {
  display: block;
  position: relative;
}
#fh5co-offcanvas ul li.offcanvas-has-dropdown > a:after {
  position: absolute;
  right: 0px;
  font-family: 'icomoon';
  speak: none;
  font-style: normal;
  font-weight: normal;
  font-variant: normal;
  text-transform: none;
  line-height: 1;
  /* Better Font Rendering =========== */
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  content: "\e921";
  font-size: 20px;
  color: rgba(255, 255, 255, 0.2);
  -webkit-transition: 0.5s;
  -o-transition: 0.5s;
  transition: 0.5s;
}
#fh5co-offcanvas ul li.offcanvas-has-dropdown.active a:after {
  -webkit-transform: rotate(-180deg);
  -moz-transform: rotate(-180deg);
  -ms-transform: rotate(-180deg);
  -o-transform: rotate(-180deg);
  transform: rotate(-180deg);
}

.uppercase {
  font-size: 14px;
  color: #000;
  margin-bottom: 10px;
  font-weight: 700;
  text-transform: uppercase;
}
</style>

  

</head>
<body style="background-image:url(images/img_bg_1.jpg);"/>

	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div id="fh5co-logo"><a href="index.php" style="color:black">Bid<span>Me</span></a></div>
				</div>
				
					
				
	</nav>
	<br><br>
	
	
		
		




 <div class="main-w3layouts wrapper">
    <h1> SignUp Form</h1>
    
    <div class="main-agileinfo">
      <div class="agileits-top">
        <form action="SignUp.php" method="post">
		<?php echo $alert;
		     /*echo $_SESSION['message'];*/
			  ?>
          <input class="text" type="text" name="username" placeholder="Username" required="">
          <input class="text email" type="email" name="email" placeholder="Email" required="">
          <input id="pass1" class="text" type="password" name="password" placeholder="Password" required="">
          <input class="text w3lpass" type="password" name="password2" placeholder="Confirm Password" required="">
          <div class="wthree-text">
            <label class="anim">
              <input type="checkbox" class="checkbox" required="">
              <span>I Agree To The Terms & Conditions</span>
            </label>

            <div class="clear"> </div>
          </div>
          <input type="submit" name="reg" value="SIGNUP">
        </form>
        <p>Already have an Account?</p>
        <a href="LogIn.php"><input type="submit" value="LOGIN NOW!"></a>
      </div>
    </div>
    <br><br>
	
	<div id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4 wow fadeInLeft" data-wow-delay="0.6s">
						<h2><strong>BidMe</strong> Co.</h2>
						<p style="color:black">Online auction firm<br> Providing easy handling , interactive & responsive experience. </p>
						
					</div>
				<div class="col-md-9 col-sm-4 wow fadeInLeft" data-wow-delay="0.6s"><p><br>	<ul class="social-icon" style="color:black">
							<li><a href="https://www.facebook.com/im.lochan.ravilochan.005" class="icon-facebook"></a> Follow Our FaceBook for additional information and updates .</li>
							<li><a href="https://twitter.com/bravilochan" class="icon-twitter"></a> Do Follow our official Twitter handle . </li>
							<li><a href="https://www.instagram.com/ravilochan2000/" class="icon-instagram"></a> Follow us on Instagram .</li>
						</ul></p>
					</div>
			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p style="color:black">
						<small class="block" >&copy; 2019 BidMe. All Rights Reserved.</small> 
						Designed by BidMe.Co
						
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://twitter.com/bravilochan"><i class="icon-twitter"></i></a></li>
							<li><a href="https://www.facebook.com/im.lochan.ravilochan.005"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.linkedin.com/in/ravilochan-balla-85a417182"><i class="icon-linkedin"></i></a></li>
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
</div>
	</body>
</html>






