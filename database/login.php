<?php
    session_start();
    include "db.php";

    $name = $_POST['name'];
    $pass = $_POST['pass'];

    $db_login = mysqli_query($con,"SELECT * FROM admin");
    $row = mysqli_fetch_array($db_login);

    $dname = $row["username"];
    $dpass = $row["password"];

    if($dname == $name && $pass==$dpass){
        $_SESSION['username'] = $name;
        echo '<meta http-equiv="refresh" content="0;url=../admin/index.php" />';
    }else{
        echo '<meta http-equiv="refresh" content="0;url=../admin.php" />';
    }

?>