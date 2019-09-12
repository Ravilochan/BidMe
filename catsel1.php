<?php

session_start();
//print date("d-m-Y H:i");

$nowtime=time();
//echo "\n".$nowtime;


 if(isset($_POST['prod1']))
 {
	 if($nowtime<1553947200)//timestamp :12:00pm
	 { if($nowtime>1553932800)//8.00am
		 { header("location:b1.php");
		 }else{
			 header("location:outoftime.php");
		 }
		 }
	else{
			 header("location:outoftime.php");
		 }		 
	 } 
 

 if(isset($_POST['prod2']))
 {
	 if( $nowtime<1553961600)//4.00pm
	 { if($nowtime>1553947200)//12.00pm
		 { header("location:b2.php");
		 }else{
			 header("location:outoftime.php");
		 }
		 }
	else{
			 header("location:outoftime.php");
		 }		 
	 } 
 
 if(isset($_POST['prod3']))
 {
 if( $nowtime<1553976000)//8.00pm
	 { if($nowtime>1553961600)//4.00pm
		 { header("location:b3.php");
		 }else{
			 header("location:outoftime.php");
		 }
		 }
	else{
			 header("location:outoftime.php");
		 }		 
	 } 

 if(isset($_POST['prod4']))
 {
	 if($nowtime<1553947200)//timestamp :12:00pm
	 { if($nowtime>1553932800)//8.00am
		 { header("location:b4.php");
		 }else{
			 header("location:outoftime.php");
		 }
		 }
	else{
			 header("location:outoftime.php");
		 }		 
	 } 
  if(isset($_POST['prod5']))
 {
	 if( $nowtime<1553961600)//4.00pm
	 { if($nowtime>1553947200)//12.00pm
		 { header("location:b5.php");
		 }else{
			 header("location:outoftime.php");
		 }
		 }
	else{
			 header("location:outoftime.php");
		 }		 
	 } 
  if(isset($_POST['prod6']))
 {
	if( $nowtime<1553976000)//8.00pm
	 { if($nowtime>1553961600)//4.00pm
		 { header("location:b6.php");
		 }else{
			 header("location:outoftime.php");
		 }
		 }
	else{
			 header("location:outoftime.php");
		 }		 
	 } 
 

?>
