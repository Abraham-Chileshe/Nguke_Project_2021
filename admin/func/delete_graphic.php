<?php
    include "../../database/session_two.php";

        $img= $_GET['img'];
      

        $del = mysqli_query($con,"DELETE FROM graphics WHERE img='$img'");  
        
        if($del==True){
          $path = "../../graphics/".$img;
          unlink($path);  
          echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
        }
        
                              

?>
