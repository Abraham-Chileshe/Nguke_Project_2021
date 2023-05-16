<?php
    include "../../database/session_two.php";

    $title= $_POST['title1'];
    $title = mysqli_real_escape_string($con,$title);
    $desc= $_POST['descript1'];
    $desc = mysqli_real_escape_string($con,$desc);
   

     $insert = mysqli_query($con,"INSERT INTO service_tab(title,description)VALUES('$title','$desc')");
          if($insert == True){
             echo '<meta http-equiv="refresh" content="0;url=../services.php" />';
          }else{
             echo '<meta http-equiv="refresh" content="0;url=../add_service_tab.php" />';
          }
      
                                                    

?>
