<?php
    include "../../database/session_two.php";

        $title= $_POST['title'];
        $title = mysqli_real_escape_string($con,$title);
        $desc= $_POST['descript'];
        $desc = mysqli_real_escape_string($con,$desc);
        $amount= "K".$_POST['amount'];
        $amount = mysqli_real_escape_string($con,$amount);

        $file_name= $_FILES['file']['name'];
        $file_type= $_FILES['file']['type'];
        $file_size= $_FILES['file']['size'];
        $file_tem_Loc= $_FILES['file']['tmp_name'];
        $file_store= "../../service_img/".$file_name;

        if(move_uploaded_file($file_tem_Loc,$file_store)==True){
           $insert = mysqli_query($con,"INSERT INTO services(title,amount,description,img)VALUES('$title','$amount','$desc','$file_name')");
           if($insert == True){
                echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
           }else{
                echo '<meta http-equiv="refresh" content="0;url=../add_service.php" />';
           }
        }
                                                    

?>
