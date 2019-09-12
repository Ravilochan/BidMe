<?php
 session_start();
 $link=mysqli_connect("localhost","root","");
 mysqli_select_db($link,"bidme");
 $duration="";
 $res=mysqli_query($link,"select * from timer");
 while($row=mysqli_fetch_array($res))
 { 
   $duration=$row["time"];
 }
 
 
$_SESSION["duration"]=$duration;
$_SESSION["start_time"]=date("Y-m-d H:i:s");

$end_time=date('Y-m-d H:i:s',strtotime('+'.$_SESSION["duration"].'minutes',strtotime($_SESSION["start_time"])));
$_SESSION["end_time"]=$end_time;
  
  
  header("location:bidding1.php");

?>
 <!--<script type="text/javascript">

setInterval(function()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","response.php",false);
    xmlhttp.send.(null);
	document.getElementById("response").innerHTML=xmlhttp.responseText;
},1000); 	



</script>

 <div id="response"> </div>
 
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

	</body>
</html>
