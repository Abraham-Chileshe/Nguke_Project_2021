<?php
session_start();
 include "db.php";
 $username = $_SESSION['username'];
 
 if($_SESSION['username'] != ""){

 }else{    
     echo '<meta http-equiv="refresh" content="0;url=../../admin.php" />';
 }
 ?>
