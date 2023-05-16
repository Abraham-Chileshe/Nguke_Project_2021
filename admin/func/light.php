<?php 
include "../../database/session_two.php";


$update = mysqli_query($con,"UPDATE theme set Mode='white', fg='black' where ID='1'");
if($update==True)
    echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
else
    echo mysqli_error($con);
?>