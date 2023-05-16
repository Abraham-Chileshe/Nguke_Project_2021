<?php
  session_start();
  include "../database/db.php";
  $username = $_SESSION['username'];
  
  if($_SESSION['username'] != ""){
     session_destroy();
     
  }
  echo '<meta http-equiv="refresh" content="0;url=../index.php" />';