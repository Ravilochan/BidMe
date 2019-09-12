<?php
session_start();

 $con=mysqli_connect('localhost','id9113444_ravi','bidme');
 
 if(!$con)
 { 
 //echo ' Not Connected To DataBase ! ';
 }
 
 if(!mysqli_select_db($con,'id9113444_bidme'))
 {
  //echo ' DataBase Not Selected ';
 }
 if(isset($_POST['submit']))
 {
 $Name= $_POST['name'];
 $email= $_POST['email'];
 $message= $_POST['message'];
 
 $sql=" INSERT INTO contactform(name,email,message) VALUES ( '$Name', '$email', '$message')";
 
 
 
 $subject="Thanks for getting in touch . We’re working on your request. Hang tight!!";
  $mess='Hello ,

Thanks for reaching out! Our support reps will check your message and forward it to the best person as soon as possible. 
We appreciate you contacting us about. One of our customer happiness members will be getting back to you very shortly.
For Any other information you can contact our official mail id ( or ) Chat with us through Whatsapp.

Best regards,
Thank You ! Have a great Day !

BidMe.Co.';


 
   
   
   
   if(mail($_POST['email'],$subject,$mess))
   { header("location:index.php");
   }

if(!mysqli_query($con,$sql))
{
 echo ' Not Submitted ';
}

 

 }



  













?>