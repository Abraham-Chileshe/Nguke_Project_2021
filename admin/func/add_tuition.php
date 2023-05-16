<?php
    include "../../database/session_two.php";

    $title= $_POST['title1'];
    $title = mysqli_real_escape_string($con,$title);
    $desc= $_POST['descript1'];
    $desc = mysqli_real_escape_string($con,$desc);
    $amount= "K".$_POST['amount1'];
    $amount = mysqli_real_escape_string($con,$amount);

     $insert = mysqli_query($con,"INSERT INTO tuitions(title,amount,description)VALUES('$title','$amount','$desc')");
          if($insert == True){
             echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
          }else{
             echo '<meta http-equiv="refresh" content="0;url=../add_tuition.php" />';
          }
      
                                                    

?>
