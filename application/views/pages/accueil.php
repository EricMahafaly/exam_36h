
<?php
    echo $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Fitness&Fatness</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--Favicon -->
	<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/favicon.jpg'); ?>" />
		
	<!-- CSS Files -->
		
	<link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/animate.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css'); ?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/css/player/YTPlayer.css'); ?>" />
	<link href="<?php echo base_url('assets/css/pro-bars.css'); ?>" rel="stylesheet" />
	<style>
		#prfl {
			background-color: #518768;
			height: 300px;
			border-radius: 3%;
		}
		#prfl img {
			margin-top: 70px;
			border-radius: 50%;
		}
		#inf {
			text-align: left;
			color: white;
		}
		#inf h2 {
			padding-top: 50px;
			padding-bottom: 40px;
			font-size: 35px;
			font-weight: 40px;
		}
		#code_list {
			background-color:#405F51;
			height: 300px;
		}
		#code_list .list {
			overflow: scroll;
			margin: 20px 20px 20px 0;
			height: 180px;
			background-color: #518768;
		}
		#code_list .head {
			color: white;
			padding: 20px 40px 0px 0px;
			font-weight: bolder;
			font-size: 20px;
		}
		#code_list .list .body {
			color: blanchedalmond;
			padding: 10px;
			font-weight: bold;
			font-size: 15px;
		}
	</style>

	<!-- End CSS Files -->
 
</head>

<body>
<<<<<<< HEAD

	<!-- Navigation -->
	<section id="navigation" class="dark-nav">
		<!-- Navigation Inner -->
		<div class="nav-inner">
			<!-- Site Logo -->
			<div class="site-logo fancy">
				<a href="#" id="logo-text" class="scroll logo">Fitness And Fatness
				</a>
			</div><!-- End Site Logo -->
			<a class="mini-nav-button gray2"><i class="fa fa-bars"></i></a>
			<!-- Navigation Menu -->
		    <div class="nav-menu">
				<ul class="nav uppercase">
					<li><a href="#home" class="scroll">Home</a></li>       
					<li><a href="#profil" class="scroll">Profil</a></li>     
					<li><a href="#about" class="scroll">About us</a></li>
					<li><a href="#goal" class="scroll">Goal</a></li>
					<li><a href="#suggestions" class="scroll">Show Suggestions</a></li>
					<li><a href="#code" class="scroll">Argents</a></li>
					<li><a href="#clients" class="scroll">Log-Out</a></li>
				</ul>
		  </div><!-- End Navigation Menu -->
		</div><!-- End Navigation Inner -->
	</section><!-- End Navigation Section -->


	<!-- Home Section -->
	<section id="home" class="relative"> 	
		<div id="slides">
			<div class="slides-container relative">
				<!-- Slider Images -->
				<div class="image2"></div>
                <div class="image1"></div>
				<div class="image3"></div>
                <div class="image4"></div>
				 <!-- End Slider Images -->	 
			</div>
			<!-- Slider Controls -->
			<nav class="slides-navigation">
			  <a href="#" class="next"></a>
			  <a href="#" class="prev"></a>
			</nav>
		</div><!-- End Home Slides -->
		<div class="v2 absolute">
			<!-- Auto Typocraphic Texts -->
			<div class="typographic">
            	<!-- Your Logo -->
				<div class="logo">
					<img src="<?php echo base_url('assets/images/logo-icon.png'); ?>" width="200" alt="Logo" />
				</div>
				<h2 class=" condensed uppercase no-padding no-margin bold gray1">Introducing</h2>
				<h2 class=" condensed uppercase no-padding no-margin bold colored">Fitness and Fatness Passion</h2>
				<a href="#about" class="scroll"><i class="arrow-down fa fa-3x fa-angle-double-down"></i></a>
			</div><!--End Auto Typocraphic Texts -->
		</div><!-- End V2 area -->
	</section><!-- End Home Section -->

    
	<!-- Fun Acts -->
	<!-- End Fun Acts Section -->
    
    <!-- About -->
	<section id="about" class="container waypoint">
		<div class="inner"  id="profil">        
        
			<!-- Header -->
			<h1 class="header light gray3 fancy"><span class="colored">Know </span>about us</h1>

			<!-- Description -->
			<p class="h-desc gray4">This site <span class="colored bold"> Fitness & Fatness</span>help someone who wish to take a weight or to be fit.You can know many activities and a lot of wealthy foods here to reach your goals<br /><br /></p> 
			<hr>       
        
			<!-- Boxes -->
			<div class="boxes" >

				
				<div class="col-xs-3 col-sm-6 col-md-3 about-box animated" data-animation="fadeIn" data-animation-delay="100">
				<p class="lead">Fitness</p>
				<hr><br>
					<a class="about-icon">
						<i class="fa fa-stethoscope"></i>
					</a>
					<br><br>
					<p class="light about-text">lorem Ipsum is lorem Ipsum of passages of Lorem Ipsum available, but the majority.</p>
				</div>

				
				<div class="col-xs-3 col-sm-6 col-md-3 about-box animated" data-animation="fadeIn" data-animation-delay="300">
				<p class="lead">Fatness</p>
				<hr><br>
					<a class="about-icon">
						<i class="fa fa-stethoscope"></i>
					</a>
					<br><br>
					<p class="light about-text">lorem Ipsum is lorem Ipsum of passages of Lorem Ipsum available, but the majority.</p>
				</div>

				
				<div id="prfl" class="col-xs-12 col-md-6 col-sm-12 about-box animated" data-animation="fadeIn" data-animation-delay="700">
					<div id="img" class="col-md-5">
						<img width="150px" height="150px" src="<?php echo base_url('assets/users/user.jpg'); ?>"></img>
					</div>
					<div id="inf" class="col-md-7">
						<h2>Eric Mahafaly</h2>
						<h4>EricMahafaly7@gmail.com</h4>
						<h5>2022-02-11</h5>
					</div>
				</div>
			</div><!-- End Boxes -->
		</div><!-- End About Inner -->
	</section><!-- End About Section -->

	<!-- Features -->





	<!--Features-->

	

	
	<!-- Blockquote -->
	<section id="blockquote">

		<div class="inner no-padding">
			<!-- Your Text -->
			<p class="normal white blockquote fancy">This is our Client's motivation, we work with Passion! 
			<a href="#about" class="scroll"><i class="fa fa-arrow-right"></i></a></p>
		</div>

	</section><!-- End Blockquote Section -->
    


	<!-- Goal Section -->
	<section id="contact" class="container parallax4">
		<!-- Contact Inner -->
		<div class="inner contact" id="goal">

			<!-- Form Area -->
			<div class="contact-form">
            
            	<h4 class="header light gray3 fancy"><span class="colored">Your </span>Goals</h4>
                <p class="h-desc white">Enter here your Goals <br />
                Email us or give us a call at <span class="bold colored">+1 (800) 245-1234.</span></p>
				<!-- Form -->
				<form id="contact-us" method="post" action="#">
					<!-- Left Inputs -->
					<div class="col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="300">
					
						<!-- Email -->
						<input type="number" name="taille" id="mail" required="required" class="form" placeholder="Your taille" />
						<!-- Subject -->
						<input type="number" name="poids" id="subject" required="required" class="form" placeholder="Your Weight" />
					</div><!-- End Left Inputs -->
					<!-- Right Inputs -->
					<div class="col-xs-6 animated" data-animation="fadeInRight" data-animation-delay="400">
						<!-- Message -->
						<textarea name="objectifs" id="message" class="form textarea"  placeholder="Objectifs"></textarea>
					</div><!-- End Right Inputs -->
					<!-- Bottom Submit -->
					<div class="relative fullwidth col-xs-12">
						<!-- Send Button -->
						<button type="submit" id="submit" name="submit" class="form-btn semibold">Valide</button> 
					</div><!-- End Bottom Submit -->
					<!-- Clear -->
					<div class="clear"></div>
				</form>

				<!-- Your Mail Message -->
				<div class="mail-message-area">
					<!-- Message -->
					<div class="alert gray-bg mail-message not-visible-message">
						<strong>Thank You !</strong> Your email has been delivered.
					</div>
				</div>

			</div><!-- End Contact Form Area -->
		</div><!-- End Inner -->
	</section><!-- End Goal Section -->



<!-- Goal Section -->
<section id="contact" class="container parallax4">
		<!-- Contact Inner -->
		<div class="inner contact" id="code">

			<!-- Form Area -->
			<div class="col-md-7 contact-form">

            	<h4 class="header light gray3 fancy"><span class="colored">Your </span>Code</h4>
                <p class="h-desc white">Enter here your Goals </p>
				<!-- Form -->
				<form id="contact-us" method="post" action="#">
					<!-- Left Inputs -->
					<div class="col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="300">
						<!-- Email -->
						<input type="text" name="code" id="mail" required="required" class="form" placeholder="Enter code" />

					</div><!-- End Left Inputs -->
					
					<!-- Bottom Submit -->
					<div class="relative fullwidth col-xs-12">
						<!-- Send Button -->
						<button type="submit" id="submit" name="submit" class="form-btn semibold">Valide</button> 
					</div><!-- End Bottom Submit -->
					<!-- Clear -->
					<div class="clear"></div>
				</form>

				<!-- Your Mail Message -->
				<div class="mail-message-area">
					<!-- Message -->
					<div class="alert gray-bg mail-message not-visible-message">
						<strong>Thank You !</strong> Your email has been delivered.
					</div>
				</div>

			</div><!-- End Contact Form Area -->
			<div class="col-md-5" id="code_list">
				<div class="row">
					<div class="col-md-4 head">Code</div>
					<div class="col-md-4 head">Tarif</div>
					<div class="col-md-4 head">Dispo</div>
				</div>
				<div class="row list">
					
					<?php for ($i=0; $i < 5; $i++) { ?>
						<div class="col-md-4 body">5J5GF5767</div>
						<div class="col-md-4 body">10000Ar</div>
						<div class="col-md-4 body">No</div>
					<?php } ?>
				</div>
			</div>

		</div><!-- End Inner -->
	</section><!-- End Goal Section -->



	<!-- Footer -->
	<footer id="footer" class="footer">
		<!-- Your Company Name -->
        <img src="<?php echo base_url('assets/images/logo-icon.png'); ?>" width="200" alt="Logo" />
		<!-- Copyright -->
		<p class="copyright normal">© 2014 <span class="colored">Fitness.</span> All Rights Reserved.</p>
	</footer><!-- End Footer -->

	<!-- JS Files -->
	
	
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.11.0.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.appear.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.prettyPhoto.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/modernizr-latest.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/SmoothScroll.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.parallax-1.1.3.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.easing.1.3.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.superslides.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.flexslider.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.mb.YTPlayer.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.fitvids.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.slabtext.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/plugins.js'); ?>"></script>

	<script>

  $("a.about-icon").hover(function () {
    $(this).children("i").addClass("fa-spin");
 }, function(){
 	$(this).children("i").removeClass("fa-spin");
 });

</body>

</html>