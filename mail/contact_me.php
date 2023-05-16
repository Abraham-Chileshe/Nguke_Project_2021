<?php
include "../database/db.php";
include "../admin/functions.php";

if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
$add = mysqli_query($con,"INSERT INTO messages(name,address,phone,message,new)VALUES('$name','$email_address','$phone','$message','yes')");

if($add == True){
   echo "
      <script>
         alert('Message Sent Successfully');
      </script>
   ";
   echo '<meta http-equiv="refresh" content="0;url=../index.php" />';  
}else
   echo mysqli_error($con);

?>