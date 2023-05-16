<?php 
include "../../database/session_two.php";

$color = "#131213";
$color = mysqli_real_escape_string($con,$color);

$update = mysqli_query($con,"UPDATE theme set Mode='$color', fg='white' where ID='1'");
if($update==True)
    echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
else
    echo mysqli_error($con);
?>