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
        <div class="text-center mt-4">
            <?php
                $getpostowner = mysqli_query($con,"SELECT * from messages where new='yes' ");
                $num = mysqli_num_rows($getpostowner);

                if($num > 0){
                    echo "You have ".$num." New Message(s). <a href='messages.php'>Click here to View</a>";
                }
            ?>


            </div>
        <div class="mt-4">
        <center>
            <a href="#Service" class="mt-1 w3-btn w3-blue w3-hover-black">Service</a>
            <a href="#Tuition" class="mt-1 w3-btn w3-blue w3-hover-black">Tuition</a>
            <a href="#Header" class="mt-1 w3-btn w3-blue w3-hover-black">Header</a>
            <a href="#About" class="mt-1 w3-btn w3-blue w3-hover-black">About</a>
            <a href="#Graphic" class="mt-1 w3-btn w3-blue w3-hover-black">Graphic</a>
            <a href="#Others" class="mt-1 w3-btn w3-blue w3-hover-black">Other</a>
        <Br/>
            <a href="func/dark.php" class="mt-1 w3-btn w3-black w3-hover-black">Dark Mode <?php if($mode != "white"){echo "(active)";}?></a>
            <a href="func/light.php" class=" mt-1 w3-btn w3-white w3-hover-white">Light Mode <?php if($mode == "white"){echo "(active)";}?></a>
        </center>
        </div>
    
        <div id="Service" class="mt-4 w3-card-4 w3-black">
            <div class="pl-4 pr-4 pt-3 pb-5">
                <h3 class="mt-4">Service Section</h3><hr/>
                <a href="add_service.php" class="w3-btn w3-blue">Add Service</a>
                <div style="width:100%" class="row mt-4 exp-grids">
                    <?php 
                    $getpostowner = mysqli_query($con,"SELECT * from services order by ID desc ");
                    while($row=mysqli_fetch_assoc($getpostowner)){//getpostowner_while_loop
                        $amount = $row['amount'];
                        $title = $row['title'];
                        $descript = $row['description'];
                        $img = $row['img'];
                        $id = $row['ID'];
                        extract($row);
                        echo' 
                            <div class="mt-4 col-lg-4 col-md-6">
                                <img src="../service_img/'.$img.'" alt=" " style="height:10em" class="img-fluid" />
                                <div class="exp wthree">	
                                    <h4>'.$title.' <span class="w3-black">'.$amount.'</span></h4>
                                    <div class="clearfix"></div>
                                    <p>'.$descript.'</p>
                                     <a href="func/delete_service.php?title='.$title.'&&desc='.$descript.'&&amount='.$amount.'&&img='.$img.'" class="mt-3 w3-btn w3-red">Remove</a>
                                     <a href="Price.php?ID='.$ID.'&&amount='.$amount.'&&title='.$title.'" class="mt-3 w3-btn w3-orange">Price</a>
                                </div>
                            </div>
                            ';
                     }?>  
		        </div>
            </div>
        </div>

        <div id="Tuition" class="mt-4 w3-card-4 w3-black ">
            <div class="pl-4 pr-4 pt-3 pb-5">
                <h3 class="mt-4">Tuition Section</h3><hr/>
                <a href="add_tuition.php" class="w3-btn w3-blue">Add Tuition</a>
                <div style="width:100%" class="row mt-4 exp-grids"> 
                    <?php 
                    $getpostowner = mysqli_query($con,"SELECT * from tuitions order by ID desc ");
                    while($row=mysqli_fetch_assoc($getpostowner)){//getpostowner_while_loop
                        $amount = $row['amount'];
                        $title = $row['title'];
                        $descript = $row['description'];
                       extract($row);
                        echo' 
                            <div class="mt-4 col-lg-4 col-md-6 w3ls">
                            <div class="blog-grid1">
                                <h5 class="w3-black">'.$amount.'</h5>
                                <h4>'.$title.'</h4>
                                <p>'.$descript.'</p>
                                <a href="#">sign up</a><br/>
                                <a href="func/delete_tuition.php?title='.$title.'&&desc='.$descript.'&&amount='.$amount.'" class="mt-3 w3-btn w3-red">Remove</a>
                                <a href="Price_tuition.php?ID='.$ID.'&&amount='.$amount.'&&title='.$title.'" class="mt-3 w3-btn w3-orange">Price</a>
                               
                                </div>
                        </div>';
                     } ?> 
		        </div>
            </div>
        </div>

        <div id="Header" class="mt-4 w3-card-4 w3-black "> 
            <div class="pl-4 pr-4 pt-4 pb-5">
                <h3>Header Section</h3><hr/>
                <div style="width:100%" class="row">
                    <div class="mt-4 col-lg-4 col-md-6">
                        <img src="../images/banner.jpg" class="w-100"><br/><Br/>
                        <form enctype="multipart/form-data" method="post" action="func/background-image.php">
                            <input  type="file" name="file" id="imgpost" accept=".jpg" size="50" required /><br/><br/>
                            <input type="submit" class="w3-btn w3-blue col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12" value="Change">
                        </form>  
                    </div>   
                    <div class="mt-4 col-lg-4 col-md-6">
                        <h5 class="mt-4 mb-2 h6">Top left Label</h5>
                        <form method="post" action="func/Top_left_label.php">
                            <input type="text" name="new_top_label" class="w3-input" value="<?php echo $label; ?>" required>
                            <input type="submit" class="mt-1 w3-btn w3-blue" value="Upate">
                        </form><br/>

                        <h5 class="mt-4 mb-2 h6">Welcome Label</h5>
                        <form method="post" action="func/Welcome.php">
                            <input type="text" name="welcome" class="w3-input" value="<?php echo $welcome_text; ?>" required>
                            <input type="submit" class="mt-1 w3-btn w3-blue" value="Upate">
                        </form><br/>

                        <h5 class="mt-4 mb-2 h6">Big Name Label</h5>
                        <form method="post" action="func/big_name.php">
                            <input type="text" name="big_name" class="w3-input" value="<?php echo $big_name; ?>" required>
                            <input type="submit" class="mt-1 w3-btn w3-blue" value="Upate">
                        </form><br/>

                        
                    </div>  

                     <div class="mt-4 col-lg-4 col-md-6">
                        <h5 class="h6 mt-4">Header description</h5><!--Header Description-->
                        <form method="post" action="func/description.php">
                            <textarea class="w-100" name="desc" style="height:300px"><?php echo $desc; ?></textarea><br/>
                            <input type="submit" class="mt-1 w3-btn w3-blue col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12" value="Upate">
                            
                        </form>
                    </div> 
                    
                </div>
            </div>    
        </div>

        <div id="About" class="mt-4 w3-card-4 w3-black "> 
            <div class="pl-4 pr-4 pt-4 pb-5">
                <h3>About Section</h3><hr/>
                <div style="width:100%" class="row">
                    <div class="mt-4 col-lg-4 col-md-6">
                        <img src="../images/about.jpg" class="w-100">
                        <form enctype="multipart/form-data" method="post" action="func/about-image.php">
                            <input  type="file" name="file" id="imgpost" accept=".jpg" size="50" required /><br/><br/>
                            <input type="submit" class="w3-btn w3-blue col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12" value="Upate">
                        </form> 
                    </div>   
                    <div class="mt-4 col-lg-4 col-md-6">
                        <h5 class="mt-4 mb-2 h6">Active Phone Number</h5>
                        <form method="post" action="func/phone.php">
                            <input type="text" name="phone" class="w3-input" value="<?php echo $phone; ?>" required>
                            <input type="submit" class="mt-1 w3-btn w3-blue" value="Upate">
                        </form><br/>

                        <h5 class="mt-4 mb-2 h6">Email Address</h5>
                        <form method="post" action="func/Email.php">
                            <input type="text" name="email" class="w3-input" value="<?php echo $email; ?>" required>
                            <input type="submit" class="mt-1 w3-btn w3-blue" value="Upate">
                        </form><br/>

                        <h5 class="mt-4 mb-2 h6">Physical Address</h5>
                        <form method="post" action="func/Address.php">
                            <input type="text" name="address" class="w3-input" value="<?php echo $address; ?>" required>
                            <input type="submit" class="mt-1 w3-btn w3-blue" value="Upate">
                        </form><br/>
                    </div>  

                     <div class="mt-4 col-lg-4 col-md-6">
                        <h5 class="h6 mt-4">Who Im I</h5><!--Header Description-->
                        <form method="post" action="func/Me.php">
                            <textarea class="w-100" name="me" style="height:300px"><?php echo $me; ?></textarea><br/>
                            <input type="submit" class="mt-1 w3-btn w3-blue col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12" value="Upate">
                            
                        </form>
                    </div> 
                    
                </div>
            </div>
        </div>  
        
        <div id="Others" class="mt-4 w3-card-4 w3-black "> 
            <div class="pl-4 pr-4 pt-4 pb-5">
                <h3>Other Images</h3><hr/>
                <div style="width:100%" class="row">
                    <div class="mt-4 col-lg-4 col-md-6">
                        <h5 class="mt-4 mb-2 h6">Tuition Background Image</h5>
                        <img src="../images/blog1.jpg" class="w-100">
                        <form enctype="multipart/form-data" method="post" action="func/tuition-image.php">
                            <input  type="file" name="file" id="imgpost" accept=".jpg" size="50" required /><br/><br/>
                            <input type="submit" class="w3-btn w3-blue col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12" value="Upate">
                        </form> 
                    </div> 
                </div>
            </div>
        </div>

        <div id="Graphic" class="mt-4 w3-card-4 w3-white ">
            <div class="pl-4 pr-4 pt-3 pb-5">
                <h3 class="mt-4">Graphics Section</h3><hr/>
                <form enctype="multipart/form-data" method="post" action="func/graphic-image.php">
                    <input  type="file" name="file" id="imgpost" accept=".jpg" size="50" required /><br/><br/>
                    <input type="submit" class="w3-btn w3-blue" value="Add">
                </form> 
              
                    
                        <div class="row gallery_grid-more project-grids w3ls">
                            <?php 
                                $getpostowner = mysqli_query($con,"SELECT * from graphics order by ID desc ");
                                while($row=mysqli_fetch_assoc($getpostowner)){//getpostowner_while_loop
                                    $graphic = $row['img'];
                                    
                                extract($row);
                                echo'
                                <div class="col-lg-3 col-md-4 col-6 w3layoutsits_w3layouts_gallery_grid1 mt-4">
                                    <a href="#popup9">
                                        <img src="../graphics/'.$graphic.'" alt=" " class="img-fluid" />
                                        <a href="func/delete_graphic.php?img='.$graphic.'" class="mt-3 w3-btn w3-red">Remove</a>
                                    </a>
                                </div>';
                            } ?> 
                        </div>
               
            </div>
        </div>





   
    
    


      


    </div>

</body>
<html>