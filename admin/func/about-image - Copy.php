<?php
    include "../../database/session_two.php";

        $file_name= $_FILES['file']['name'];
        $file_type= $_FILES['file']['type'];
        $file_size= $_FILES['file']['size'];
        $file_tem_Loc= $_FILES['file']['tmp_name'];
        $file_store= "../../images/exp1.jpg";

        if(move_uploaded_file($file_tem_Loc,$file_store)==True)
           echo '<meta http-equiv="refresh" content="0;url=../index.php" />';                                                 

?>
