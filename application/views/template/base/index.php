<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="google-site-verification" content="yLlx45bmY7BkID24kuXq4A0a1xyA28dHNkmwAvZtGSo" />
	<meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1" />
	
	<title>BlankTitle</title>
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



<?php  $this->load->view('template/pages/home'); ?> 

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108825258-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-108825258-1');
    </script>


  

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
