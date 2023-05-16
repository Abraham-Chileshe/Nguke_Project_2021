<?php 
include "../../database/session_two.php";

$new = $_POST["email"];
$new = mysqli_real_escape_string($con,$new);

$update = mysqli_query($con,"UPDATE header set value='$new' where name='Email'");
if($update==True)
    echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
?>