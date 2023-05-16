<?php
    include "../../database/session_two.php";

        $new = "K".$_POST['new_amount'];
        $id = $_GET['ID'];
      
        
        $del = mysqli_query($con,"UPDATE tuitions set amount='$new' where ID='$id'");
        if($del==True)
            echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
        
                              

?>
