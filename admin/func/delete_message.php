<?php
    include "../../database/session_two.php";

        $id= $_GET['ID'];
        
        $del = mysqli_query($con,"DELETE FROM messages WHERE ID='$id'");  
        
        if($del==True){ 
          echo '<meta http-equiv="refresh" content="0;url=../messages.php" />';
        }
        
                              

?>
