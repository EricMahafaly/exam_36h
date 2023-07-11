
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
        .sign-up b {
            color: white;
        }
        .sign-up {
            text-align: left;
        }
        .sign-up a {
            color: crimson;
            text-decoration: underline;
            font-weight: bolder;
        }
        
    </style>
</head>
<body>
<section id="contact" class="container parallax4">
		<!-- Contact Inner -->
		<div class="inner contact" id="goal">

			<!-- Form Area -->
			<div class="contact-form">
            
            	<h4 class="header light gray3 fancy"><span class="colored">Sign </span>In</h4>
                <p class="h-desc white">Enter here your Email and Password </p>
				<!-- Form -->
				<form action="<?php echo site_url("Form/loginController"); ?>" method="post">
					<!-- Left Inputs -->
					<div class="col-xs-6 animated" data-animation="fadeInLeft" data-animation-delay="300">
					
						<!-- Email -->
						<input type="email" name="email" id="mail" required="required" class="form" placeholder="Your Email" />
						<!-- Password -->
						<input type="password" name="mdp" id="subject" required="required" class="form" placeholder="Your Password" />
                        <div class="sign-up">
                            <span><b>Don't have an account?</b><a href="<?php echo site_url("Form/inscriptionView"); ?>">Create an account</a></span>
                        </div>
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


</body>
</html>