<?php
include "database/db.php";

?>

<!doctype html>
<html lang="xzz">
<head>
    <title>Nguke Admin Login</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="Programmer" content="Abraham Chileshe"/>
    <meta name="Author" content="Abraham Chileshe"/>
    <meta name="description" content=""/>
    <meta name="theme-color" content="black">
    <meta name="pragma" content="no-cache"/>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/styles.css">

    <script src="js/password_show.js"></script>
</head>

<body class="admin-body">
        
    <div class="container">
        <div class="mt-4 row max-w">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-1"></div>
            
            <div class="mt-2 w-100 w3-card-4 admin-login-box rounded col-lg-6 col-md-6 col-sm-12 col-xs-10">
                <div><h4 class="py-4 px-5 w3-teal text-center h3 cursive-font">Admin Login</h4></div>
                <hr/>
                <div class="px-5">
                    <form method="Post" action="database/login.php">
                        <label class="mt-1 w3-label">Name</label>
                        <input type="text"  name="name" class="w3-input w-80 mb-2"/>
                        <label class="mt-4 w3-label">Password</label>
                        <input type="password" name="pass" id="pwd" class="w3-input w-80 mb-4"/>
                        <input type="checkbox" onclick="Passwordshow()" class="w3-check mt-2">
                        <label class="w3-validate mb-4">Show Password</label><br/>
                        <input type="submit" class="w3-btn mt-4 w3-teal w3-hover-black rounded" value="Login"/>
                        <a href="index.php" class="w3-btn mt-4 w3-teal w3-hover-black rounded" >Home </a>
                    </form>
                    <hr class="mt-4"/>
                    <p class="well text-center py-4 cursive-font"></p>
                </div>
            </div> 
            
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-1"></div>

        </div>
    </div>

</body>
<html>