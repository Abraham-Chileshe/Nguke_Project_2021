<?php
  session_start();
  include "../database/db.php";
  $username = $_SESSION['username'];
  
  if($_SESSION['username'] != ""){

  }else{    
      echo '<meta http-equiv="refresh" content="0;url=../admin.php" />';
  }
include "functions.php";

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
    <script>
        $(document).ready(function(){
            jQuery('img').each(function(){
            jQuery(this).attr('src',jQuery(this).attr('src')+'?'+(new Date()).getTime());
            });
        });
    </script>
</head>

<body class="admin-body">

    <div class="py-5 w3-text-light-grey container">
           <div class="mt-4 w3-white">
            <div class="pl-4 pr-4 pt-3 pb-3">
                <h3 class="mt-4">Add a New Service</h3><hr/>

                <form enctype="multipart/form-data" method="Post" action="func/add_service_tab.php">
                    <label class="mt-1 w3-label">Title</label>
                    <input type="text"  name="title1" class="w3-input w-80 mb-2" required/>
                    <label class="mt-4 w3-label">Description</label>
                    <input type="text" name="descript1"  class="w3-input w-80 mb-4" required/>
                                                           

                    <input type="submit" class="w3-btn mt-4 w3-teal w3-hover-black rounded" value="Add Service"/>
                    <a href="index.php" class="w3-btn mt-4 w3-teal w3-hover-black rounded" >Home </a>
                </form>


                

                
            <div>
       
        </div>


    </div>

</body>
<html>