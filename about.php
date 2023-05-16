<?php
include "database/db.php";
include "admin/functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nguke Tech World</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="pragma" content="no-cache"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="Programmer" content="Abraham Chileshe"/>
    <meta name="Author" content="Abraham Chileshe"/>
    <meta name="description" content="<?php $desc;?>"/>
	<meta name="theme-color" content="royalblue">
	<meta name="keywords" content="Nguke, Tech, World, Installations, services, Pcs"/>
	<script src="js/jquery-2.2.3.min.js"></script>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<script>
        $(document).ready(function(){
            jQuery('img').each(function(){
            jQuery(this).attr('src',jQuery(this).attr('src')+'?'+(new Date()).getTime());
            });
		});
		window.onload = () => {
        let bannerNode = document.querySelector('[alt="www.000webhost.com"]').parentNode.parentNode;
        bannerNode.parentNode.removeChild(bannerNode);
      }
    </script>

	<link rel="icon" href="images/banner.jpg" type="image/jpg" size="10x10">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/w3.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/font-awesome.css">
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
</head>

<body style="background-color:<?php echo $mode?>;">
<!-- header -->
<header>	
	<div class="container" id="home">
		<nav class="py-4">
        <div id="logo">
			<h1> <a href="#index.html"><span class="fa fa-gear" aria-hidden="true"></span> <?php echo $label; ?></a></h1>
		</div>

        <label for="drop" class="toggle">Menu</label>
        <input type="checkbox" id="drop" />
            <ul class="menu mt-2">
                <li class="mr-lg-4 mr-3"><a href="index.php">Home</a></li>
                <li class="mr-lg-4 mr-3"><a href="projects.php">Projects</a></li>
                <li class="mr-lg-4 mr-3"><a href="services.php">Services</a></li>
                <li class="mr-lg-4 mr-3">

                <label for="drop-2" class="toggle">Others <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                <a href="#">Others <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                <input type="checkbox" id="drop-2"/>
                <ul>
					<li><a href="admin.php">Admin Panel</a></li>
                </ul>
                </li>
                <li><a class="active" href="about.php">About</a></li>
            </ul>
        </nav>
	</div>
</header>
<!-- //header -->
		
<!-- banner -->
<section class="banner">
	<div class="banner-layer">
		<div class="container">
			<div class="row w3pvt_banner_info">
				<div class="col-md-8 w3layouts_banner_margin">
					<h3 class="editContent"><?php echo $welcome_text;?> </h3>
					<h2 class="mt-2 mb-2 editContent"><?php echo $big_name;?> </h2>
					<h4>Website</h4>
					<p><?php echo $desc; ?></sup></p>
					<a href="#popup1"> Read More </a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //banner -->	

<!-- about -->
<section class="about py-5" id="about">
	<div class="container py-3">
		<h3 class="heading">About Me</h3>
		<div class="row about-grids">
			<div class="col-lg-4">
				<h4 class="">Who i'm I?</h4>
				<p class="my-4"><?php echo $me; ?></p>
				<a class="w3-green w3-hover-black" href="tel:+26<?php echo $phone;?>"> Call me Now <span class="fa ml-2 fa-phone"></span> </a>	
			</div>
			<div class="col-lg-4 col-md-6 my-lg-0 my-5">
				<img src="images/about.jpg" alt="" class="img-fluid" />
			</div>
			<div class="col-lg-4 bar-grids">
			<h4 class="w3-text-black">Info.</h4>
				<div class="wthree_skills">
					<h6 class="mb-2">Physical Address</h6>
					<p><?php echo $address;?></p>
					<div class="my-4">
						<h6 class="mb-2">Contacts</h6>
						<p><?php echo $email ;?></p>
						<p><?php echo $phone;?></p>
					
					</div>
					<h6 class="mb-2">Profession<span><a href="#tuitions">View </a> </span></h6>
					<p>Click the view button to check out my professional life and my school bio </p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- about -->


<!-- about -->
<section class="about py-5" id="about">
	<div class="container py-3">
		<h3 class="heading">My School</h3>
		<br/>
		<div style="width:100%" class="row mt-4 exp-grids">        
            <div class="mt-4 col-lg-6 w3-card-4 col-md-6">
                <img src="images/1.jpg" alt=" " style="height:20em" class="img-fluid" />
                	<div class="exp wthree">	
                    <h4><span class="w3-black">Secondary Education</span></h4>
                        <div class="clearfix"></div>
                            <p></p>
                         </div>
                     </div>
		
			
				<div class="mt-4 col-lg-6 w3-card-4 col-md-6">
                <img src="images/2.jpg" alt=" " style="height:20em" class="img-fluid" />
                	<div class="exp wthree">	
                    <h4><span class="w3-black">Secondary Education</span></h4>
                        <div class="clearfix"></div>
                            <p></p>
                         </div>
                     </div>
		       

				<div class="mt-4 col-lg-6 w3-card-4 col-md-6">
                <img src="images/3.jpg" alt=" " style="height:20em" class="img-fluid" />
                	<div class="exp wthree">Islamic W School
                    <h4><span class="w3-black">Primary Education</span></h4>
                        <div class="clearfix"></div>
                            <p></p>
                         </div>
                     </div>
		
				<div class="mt-4 col-lg-6 w3-card-4 col-md-6">
                <img src="images/4.jpg" alt=" " style="height:20em" class="img-fluid" />
                	<div class="exp wthree">Chalimbana University
                    <h4><span class="w3-black">Tertiary Education</span></h4>
                        <div class="clearfix"></div>
                            <p></p>
                         </div>
                     </div>
		        </div>
	</div>
</section>
<!-- about -->








<!-- footer -->
<footer class="py-5">
	<div class="container">
		<div class="w3layoutsinfo-grids">
			<div class="w3layouts-grid-left w3layouts-grid-right text-center">
				<div class="social mb-4">
					<ul>
						<li><a href="http://www.facebook.com/emmanuel.nguke.9"><span class="fa mr-2 fa-facebook"></span></a></li>
						<li><a href="mailto:<?php echo$email; ?>"><span class="fa mr-2 fa-google-plus"></span></a></li>
						
					</ul>
				</div>
			</div>
		</div>
		<div class="copyright text-center">
			<p>© 2021 Nguke Tech World. All Rights Reserved |
			<a href="#home" class="move-top scroll"><span class="fa fa-angle-up" aria-hidden="true"></span></a>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- popup for btn -->
<div id="popup1" class="overlay">
	<div class="popup">
		<img src="images/banner.jpg" alt="Popup Image" class="img-fluid" />
		<p class="mt-4 editContent"><?php echo $desc; ?></p>
	<a class="close" href="#">&times;</a>
	</div>
</div>
<!-- //popup for btn -->

</body>
</html>