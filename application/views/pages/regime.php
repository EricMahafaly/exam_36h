<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regime</title>
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
        th {
            width: 350px;
            color: white;
            font-weight: bolder;
            font-size: 20px;
        }
        td {
            width: 350px;
            color: burlywood;
            font-weight: bolder;
            font-size: 15px;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        table {
            text-align: left;
        }
    </style>
</head>
<body>

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
					<li><a href="<?php echo site_url("Accueil/deconnexion"); ?>" class="scroll">Log-Out</a></li>
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


	<!-- Goal Section -->
	<section id="contact" class="container parallax4">
		<!-- Contact Inner -->
		<div class="inner contact" id="goal">
            <div class="contact-form">

                <table border="1">
                    <tr>
                        <th>aliment</th>
                        <th>frequence par semaine</th>
                        <th>duree</th>
                    </tr>
                    <?php foreach($regime as $row) { ?>
                        <tr>
                            <td><?php echo $row->nom; ?></td>
                            <td><?php echo $row->frequence_semaine; ?></td>
                            <td><?php echo $row->duree_semaine; ?></td>
                        </tr>
                    <?php } ?>
                    
                </table>
            </div>
                
		</div><!-- End Inner -->
	</section><!-- End Goal Section -->


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
 	</script>


</body>
</html>