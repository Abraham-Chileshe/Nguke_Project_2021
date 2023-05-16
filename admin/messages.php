<?php
  session_start();
  include "../database/db.php";
  $username = $_SESSION['username'];
  
  if($_SESSION['username'] != ""){

  }else{    
      echo '<meta http-equiv="refresh" content="0;url=../admin.php" />';
  }
include "functions.php";
$update = mysqli_query($con,"UPDATE messages set new='0'");


?>

<!doctype html>
<html lang="xzz">
<head>
    <title>Admin Panel</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="Programmer" content="Abraham Chileshe"/>
    <meta name="Author" content="Abraham Chileshe"/>
    <meta name="description" content=""/>
    <meta name="theme-color" content="blue">
    
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/style.css">

    <script src="../js/password_show.js"></script>
    <script src="../js/jquery-2.2.3.min.js"></script>
    <script>
        $(document).ready(function(){
            jQuery('img').each(function(){
            jQuery(this).attr('src',jQuery(this).attr('src')+'?'+(new Date()).getTime());
            });
        });
        
    </script>
</head>

<body class="admin-body">
        
   <header>
       <div class="w3-black">
           <ul class="w3-navbar">
                <li class="w3-black w3-dropdown-hover">
                    <a href="#" class="w3-text-white w3-hover-red "><i class="fa fa-arrow-down"></i> Sections</a>
                    <div class="w3-dropdown-content">
                        <a href="index.php">Home</a>
                        <a href="projects.php">Projects</a>
                        <a href="services.php">Services</a>
                        <a href="messages.php">Messages</a>
                        <a href="logout.php">logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>

    <div class="py-5 w3-text-light-grey container">

        <div id="Tuition" class="mt-4 w3-card-4 w3-black ">
            <div class="pl-4 pr-4 pt-3 pb-5">
                <h3 class="mt-4">Message Tab</h3><hr/>
                <div style="width:100%" class="row mt-4 exp-grids"> 
                    <?php 
                    $getpostowner = mysqli_query($con,"SELECT * from messages order by ID desc ");
                    while($row=mysqli_fetch_assoc($getpostowner)){//getpostowner_while_loop
                       
                        $name = $row['name'];
                        $address = $row['address'];
                        $phone = $row['phone'];
                        $message = $row['message'];
                        $id = $row['ID'];
                       extract($row);
                        echo' 
                            <div class="mt-4 col-lg-4 col-md-6 w3ls">
                            <div class="blog-grid1">
                                <h5 class="w3-black">'.$phone.'</h5>
                                <h4>'.$name.'</h4>
                                <p>'.$message.'</p>
                                <a href="#">'.$address.' </a><br/>
                                <a href="func/delete_message.php?ID='.$id.'" class="mt-3 w3-btn w3-red">Remove</a>
                               
                                </div>
                        </div>';
                     } ?> 
		        </div>
            </div>
        </div>

        




    </div>

</body>
<html>