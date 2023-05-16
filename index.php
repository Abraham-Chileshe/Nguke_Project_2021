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
                <li class="mr-lg-4 mr-3 active"><a href="index.php">Home</a></li>
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
                <li><a href="about.php">About</a></li>
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
					<a href="#contact"> Contact Me </a>
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
				<div class="wthree_skills">
					<h6 class="mb-2">Installations<span> <a href="#installations">View </a></span></h6>
					<p>I offer installation services for different things, from Operating System, Microsoft Packages to CCTV' and many more</p>
					<div class="my-4">
						<h6 class="mb-2">Graphic Designing<span> <a href="#graphics">View </a> </span></h6>
						<p>I do designs for Logos, Banners, calenders, Bronchure, Newsletters and other Graphical material. </p>
					</div>
					<h6 class="mb-2">Tuitions<span><a href="#tuitions">View </a> </span></h6>
					<p>I also conduct tuitions for Mathematics, Computer Studies and Physics for all those interested.. . </p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- about -->

<!-- services -->
<section class="services py-5" id="installations">
	<div class="container py-3">
		<h3 class="heading">Services</h3>
		<div class="row exp-grids">
		<?php 
                     $getpostowner = mysqli_query($con,"SELECT * from services order by ID desc ");
                     while($row=mysqli_fetch_assoc($getpostowner)){//getpostowner_while_loop
                        $amount = $row['amount'];
                        $title = $row['title'];
                        $descript = $row['description'];
                        $img = $row['img'];

                       extract($row);
                        echo' 
                            <div class="mt-4 col-lg-4 col-md-6">
                                <img src="service_img/'.$img.'" alt=" " style="height:10em" class="img-fluid" />
                                <div class="exp wthree">	
                                    <h4>'.$title.' <span class="w3-black">'.$amount.'</span></h4>
                                    <div class="clearfix"></div>
									<p>'.$descript.'</p>
									<a href="#cont" class="mt-3 w3-btn w3-blue">Book Now</a>
									<a class="mt-3 w3-btn w3-green" href="tel:+26'.$phone.'"> Call</a>	
                                </div>
                            </div>';
                     }

                ?>
		</div>
	</div>
</section>
<!-- //services -->

<!-- experience -->
<section class="experience py-5" id="experience">
	
</section>
<!-- //experience -->

<!-- blog -->
<section class="blog py-5" id="tuitions">
	<div class="container py-3">
		<h3 class="heading">Tuitions</h3>
		<div class="row blog-grids">
			<div class="col-lg-7">
				<h4 class="left-grid-blog">I Offer Tuitions in</h4>
				<p class="left-grid-blog">the following subjects..</p>
			</div>
		</div>
		<div class="row">
		    
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
                                <a href="#cont">contact me </a>
                            </div>
                        </div>';
                     }

                     

                ?>
			
		</div>
		</div>
	</div>
</section>
<!-- //blog -->

<!-- gallery -->
<div class="gallery py-5" id="graphics">
	<div class="container py-3">
		<h3 class="heading">Graphics</h3>
		<div class="row gallery_grid-more project-grids w3ls">
	
        <?php 
            $getpostowner = mysqli_query($con,"SELECT * from graphics order by ID desc ");
            while($row=mysqli_fetch_assoc($getpostowner)){//getpostowner_while_loop
            $graphic = $row['img'];                        
            extract($row);
                echo'
                    <div class="col-lg-3 col-md-4 col-6 w3layoutsits_w3layouts_gallery_grid1 mt-4">
                        <a href="#">
                            <img src="graphics/'.$graphic.'" alt=" " class="img-fluid" />
                        </a>
                    </div>';
        } ?> 
                        		
		</div>
	</div>
</div>
<!-- //gallery --> 

<!-- text -->
<div class="text py-lg-5 py-5 text-center" id="text">
	<div class="container py-sm-3">
		<h5 class="w3pvt-title text-white">Hire Me</h5>
		<p> I will be looking forward to working with you and i will make sure that i provide the best services for you.</p>
		<div class="d-flex justify-content-center mt-3">
			<a href="#installations" class="text-capitalize mr-2 work btn">My work </a>
			<a href="tel:+26<?php echo $phone;?>" class="text-capitalize hire btn">Call Me Now </a>
		</div>
	</div>
</div>
<!-- //text -->

<!-- contact -->
<section class="contact py-5" id="contact">
	<div class="container py-3">
		<h3 class="heading">Contact</h3>
		<div class="row contact-grids">
			<div class="col-lg-5 contact-left">
				<h4 class="mb-4">Address Info</h4>
				<div class="row">
					<div class="col-1 pr-0 icon">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
					</div>
					<div class="col-11">
						<p><?php echo $address;?>. Zambia</p>
						
					</div>
					<div class="col-1 pr-0 icon my-2">
						<span class="fa fa-phone" aria-hidden="true"></span>
					</div>
					<div class="col-11 my-2">
						<p> +26<?php echo $phone;?></p>
					</div>
					<div class="col-1 pr-0 icon">
						<span class="fa fa-envelope-open" aria-hidden="true"></span>
					</div>
					<div class="col-11">
						<p><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></p>
					</div>
					<div class="map col-sm-11 mt-4">
						<img src="images/banner.jpg">
					</div>
				</div>
			</div>
			<div id="cont" class="col-lg-7 mt-lg-0 mt-5 contact-right">
				<h4 class="mb-4">Get In Touch</h4>
				<form action="mail/contact_me.php" method="post">
					<label><span class="fa mr-2 fa-user" aria-hidden="true"></span> Name</label>
					<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<div class="clearfix"></div>
					<label><span class="fa mr-2 fa-envelope-open" aria-hidden="true"></span>Email</label>
					<input type="email" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<div class="clearfix"></div>
					<label><span class="fa mr-2 fa-phone" aria-hidden="true"></span>Phone</label>
					<input type="text" name="phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
					<div class="clearfix"></div>
					<label><span class="fa mr-2 fa-edit" aria-hidden="true"></span>Message</label>
					<textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<button type="submit" class="btn">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>
<!-- //contact -->

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