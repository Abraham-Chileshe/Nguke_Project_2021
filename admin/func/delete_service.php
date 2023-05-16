<?php
    include "../../database/session_two.php";

        $title= $_GET['title'];
        $title = mysqli_real_escape_string($con,$title);
        $desc= $_GET['desc'];
        $desc = mysqli_real_escape_string($con,$desc);
        $amount= $_GET['amount'];
        $amount = mysqli_real_escape_string($con,$amount);
        $img= $_GET['img'];

        $del = mysqli_query($con,"DELETE FROM services WHERE title='$title' and description='$desc' and amount='$amount' and img='$img'");  
        
        if($del==True){
          $path = "../../service_img/".$img;
          unlink($path);  
          echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
        }
        
                              

?>
