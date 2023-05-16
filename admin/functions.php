<?php

$get_top_left_label = mysqli_query($con,"SELECT * FROM header where name='Top left label'");
$row = mysqli_fetch_array($get_top_left_label);
$label = $row["value"];

$desc = mysqli_query($con,"SELECT * FROM header where name='Description'");
$row1 = mysqli_fetch_array($desc);
$desc = $row1["value"];

$welcome = mysqli_query($con,"SELECT * FROM header where name='Welcome'");
$row2 = mysqli_fetch_array($welcome);
$welcome_text = $row2["value"];


$b_name= mysqli_query($con,"SELECT * FROM header where name='Big Name'");
$row3 = mysqli_fetch_array($b_name);
$big_name = $row3["value"];


$mode_type= mysqli_query($con,"SELECT * FROM theme where ID='1'");
$row4 = mysqli_fetch_array($mode_type);
$mode = $row4["Mode"];
$fg = $row4['fg'];

$WHO= mysqli_query($con,"SELECT * FROM header where name='Who Im I'");
$row5 = mysqli_fetch_array($WHO);
$me = $row5["value"];

$line= mysqli_query($con,"SELECT * FROM header where name='Phone'");
$row6 = mysqli_fetch_array($line);
$phone = $row6["value"];

$EEmail= mysqli_query($con,"SELECT * FROM header where name='Email'");
$row7 = mysqli_fetch_array($EEmail);
$email = $row7["value"];

$P_Address= mysqli_query($con,"SELECT * FROM header where name='Address'");
$row7 = mysqli_fetch_array($P_Address);
$address = $row7["value"];




?>


<script>
    window.onload = () => {
    let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
    bannerNode.parentNode.removeChild(bannerNode);
  }
</script>