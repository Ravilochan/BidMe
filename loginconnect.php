<?php

 session_start();
 $alert="";
 

 $db=mysqli_connect("localhost","id9113444_ravi","bidme","id9113444_bidme");
 if(isset($_POST['submit']))
 {
	 $username=$_POST['username'];
	 $password=$_POST['password'];
 $_SESSION['username']=$username;
	 $password=md5($password);
	 
	 $sql="SELECT * FROM users WHERE username='$username' AND password ='$password'";
	 $result=mysqli_query($db,$sql);
	 
	 if(mysqli_num_rows($result)==1)
	 {
		 $_SESSION['message']="You are Logged In ";
		 $alert="You are Logged In ";
		 header("location:enter.php");
		 
	 }
	 else
	 {
		 $_SESSION['message']=" UserName or Password are Incorrect ";
		 $alert=" UserName or Password are Incorrect ";
		 	 header("refresh:5;LogIn.php");
		 echo $alert;
	
	 }
 }
?>