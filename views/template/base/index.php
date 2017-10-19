<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
	
	<title>Urbanpreneurs</title>
	<!-- set your website meta description and keywords -->
	<meta name="description" content="Add your website description here">
	<meta name="keywords" content="Add your website keywords here">
	<!-- set your website favicon icon -->
	<link href="assets/images/logourban.ico" rel="icon">
	
	<!-- Bootstrap Stylesheets -->
	<link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css") ?>">
	<!-- Font Awesome Stylesheets -->
	<link rel="stylesheet" href="<?= base_url("assets/css/font-awesome.min.css") ?>">
	
	<!-- Template Main Stylesheets -->
	<link rel="stylesheet" type="text/css" href="<?= base_url("assets/css/style.css") ?>">
</head>

<body>
	<section id="Main" class="overlay">
		<div class="overlay-content">
			<div class="content">
				<div class="container">	
					<!-- coming-soon header text start -->
					<div class="coming-soon-text">
						<h4>We are</h4>
						<h1>Urbanpreneurs</h1>
					</div>
					<!-- coming-soon header text end -->
					
					<!-- countdown Box start -->
					<div class="coming-soon-count">
						<div id="defaultCountdown"></div>
					</div>
					<!-- countdown Box end -->
					
					<!-- Buttons start -->
					<div class="btn-holder">
						<a href="javascript:void(0)" class="btn btn-custom btn-transparent" onclick="openAboutStyle()">What we do</a>
						<a href="javascript:void(0)" class="btn btn-custom btn-transparent" onclick="openServicesStyle()">News & Blog</a>
						<a href="javascript:void(0)" class="btn btn-custom btn-transparent" onclick="openSubscribeStyle()">Get involved</a>
						<a href="javascript:void(0)" class="btn btn-custom btn-transparent" onclick="openContactStyle()">Contact</a>
					</div>
					<!-- Buttons end -->
					
					<!-- Start Social media -->
					<div class="social-holder">
						<p>Get in touch with us!</p>
						<ul class="list-inline list-social clearfix">
							<li>
								<a href="#" class="social-icon social-icon-facebook" target="_blank">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="#" class="social-icon social-icon-twitter" target="_blank">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#" class="social-icon social-icon-linkedin" target="_blank">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="#" class="social-icon social-icon-gplus" target="_blank">
									<i class="fa fa-google-plus"></i>
								</a>
							</li>
							<li>
								<a href="#" class="social-icon social-icon-youtube" target="_blank">
									<i class="fa fa-youtube"></i>
								</a>
							</li>
							<li>
								<a href="#" class="social-icon social-icon-vimeo" target="_blank">
									<i class="fa fa-vimeo"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- End Social media -->
				</div><!-- End container -->
			</div>
		</div><!-- End of overlay-content -->
	</section><!-- End of #Main -->
	
	<!-- Start About Section -->
	<?php  $this->load->view('right_about'); ?>
		<!-- End of #About -->
	
	<!-- Start Blog Section -->
	<?php  $this->load->view('up_blog'); ?>

	<!-- End of #Blog -->
	
	<!-- Start Newletter Section -->
	<?php  $this->load->view('left_newsletter'); ?>

	<!-- End of #Newletter -->
	
	<!-- Start Contact Section -->
	<?php  $this->load->view('down_contact'); ?>

	<!-- End of #myContact -->

	<!-- jQuery Library -->
	<script src="<?= base_url("assets/js/jquery-3.1.1.min.js") ?>"></script>
	<!-- countdown Js -->	
	<script src="<?= base_url("assets/js/jquery.plugin.min.js") ?>"></script>
	<script src="<?= base_url("assets/js/jquery.countdown.js") ?>"></script>
	<!-- ajaxchimp Js -->
	<script src="<?= base_url("assets/js/jquery.ajaxchimp.min.js") ?>"></script>
	<!-- Form validator Js -->
	<script src="<?= base_url("assets/js/validator.min.js") ?>"></script>
	<!-- Template main Js -->
    <script src="<?= base_url("assets/js/main.js") ?>"></script>     
</body>

</html>