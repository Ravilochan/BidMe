<?php

session_start();



?>
  <div id="response"> </div>

<script type="text/javascript">

setInterval(function()
{
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.open("GET","response.php",false);
    xmlhttp.send(null);
	document.getElementById("response").innerHTML=xmlhttp.responseText;
},1000); 	



</script>
<html>
<body>
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
	<script src="js/main.js"></script>

	</body>
</html>