<?php
    include "../../database/session_two.php";

        $file_name= $_FILES['file']['name'];
        $file_type= $_FILES['file']['type'];
        $file_size= $_FILES['file']['size'];
        $file_tem_Loc= $_FILES['file']['tmp_name'];
        $file_store= "../../graphics/".$file_size.$file_name;

        if(move_uploaded_file($file_tem_Loc,$file_store)==True){
            $insert = mysqli_query($con,"INSERT INTO graphics(img)VALUES('$file_size$file_name')");
            if($insert == True){
                 echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
            }else{
                 echo '<meta http-equiv="refresh" content="0;url=../add_service.php" />';
            }
         }                                                

?>
