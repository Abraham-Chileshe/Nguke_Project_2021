<?php 
include "../../database/session_two.php";

$new = $_POST["phone"];
$new = mysqli_real_escape_string($con,$new);

$update = mysqli_query($con,"UPDATE header set value='$new' where name='Phone'");
if($update==True)
    echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
?>