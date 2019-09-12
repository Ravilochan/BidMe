<?php

session_start();

 $db=mysqli_connect("localhost","id9113444_ravi","bidme","id9113444_bidme");
 mysqli_select_db($db,'bidtable');


 $alert="";
 

 
 
 $sq="SELECT * FROM ";
 $record=mysqli_query($db,$sq);

 $sql1="SELECT * FROM bidtable ORDER BY no DESC LIMIT 1";
 $lastone=mysqli_query($db,$sql1);
 $lastprice=mysqli_fetch_assoc($lastone);
 echo $lastprice['price'];

 

  if(isset($_POST['subbid']))
  {
	   $sql1="SELECT * FROM bidtable ORDER BY no DESC LIMIT 1";
 $lastone=mysqli_query($db,$sql1);
 $lastprice=mysqli_fetch_assoc($lastone);
 
  $s="SELECT * FROM bidtable WHERE price='$subprice'";
  $result=mysqli_query($db,$s);
  $num=mysqli_num_rows($result);
  
 
 $subprice=$_POST['price'];
	$username=$_SESSION['username'];
	$l=" INSERT INTO bidtable(username,price) VALUE ('$username','$subprice')";
 
	//$subprice=$_POST['price'];
	if($subprice<$lastprice['price'])
	{ $alert="You can not bid lesser than the last price . Please enter valid price .";

      echo $alert;
	}
	elseif($num==1)
  {
     $alert=" Same Price is already Bidded ! Bid another clever price . "; 
echo $alert;	 
  }

	else{
  mysqli_query($db,$l);
  echo "entered database";

	}
	
header('refresh: 2;b1.php');

  }  
?>