<?php
    include "../../database/session_two.php";

        $title= $_GET['title'];
        $desc= $_GET['desc'];
        $amount= $_GET['amount'];

        $del = mysqli_query($con,"DELETE FROM tuitions WHERE title='$title' and description='$desc' and amount='$amount'");  
        
        if($del==True){ 
          echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
        }
        
                              

?>
