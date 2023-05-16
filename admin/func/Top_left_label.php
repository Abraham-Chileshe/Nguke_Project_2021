<?php 
include "../../database/session_two.php";

$new = $_POST["new_top_label"];
$new = mysqli_real_escape_string($con,$new);

$update = mysqli_query($con,"UPDATE header set value='$new' where name='Top left label'");
if($update==True)
    echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
?>