<?php
    include "../../database/session_two.php";

        $title= $_GET['title'];
        $title = mysqli_real_escape_string($con,$title);
        $desc= $_GET['desc'];
        $desc = mysqli_real_escape_string($con,$desc);
        $img= $_GET['img'];

        $del = mysqli_query($con,"DELETE FROM projects WHERE title='$title' and description='$desc' and img='$img'");  
        
        if($del==True){
          $path = "../../project_img/".$img;
          unlink($path);  
          echo '<meta http-equiv="refresh" content="0;url=../projects.php" />';
        }
        
                              

?>
