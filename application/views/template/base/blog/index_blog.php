<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>BlogTitle</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- Favicone Icon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"> -->
    <link href="assets/images/logourban.ico" rel="icon">
    <!-- CSS -->
    <link href="http://fonts.googleapis.com/css?family=lato:Open+Sans:400,300,600,700,800%7CMontserrat:200,300,400,500,500i,600,700,800"
        rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/ionicons.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery.fancybox.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.min.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/animate.css") ?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/blog.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/css/font-awesome.min.css") ?>">
</head>

<body>
    <!--loader-->
        <div id="loader-wrapper" class="loader-wrapper">
            <div class="loader-inner">
                <div class="ball-scale-multiple">
                <div></div>
                <div></div>
                <div></div>
                </div>
            </div>
        </div>
    <!--loader-->
    <?php $this->load->view('template/base/blog/navbar');?> 


        <?php echo $view_content ?>  

    
    <?php $this->load->view('template/base/blog/footer');?> 

    <!-- Site Wrapper -->
    <script src="<?php echo base_url("assets/js/jquery.min.js") ?>"></script>
    <!-- bootstrap Js -->
     <script src="<?= base_url("/node_modules/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
    <!-- Parallax Js -->
    <script src="<?php echo base_url("assets/js/jquery.stellar.min.js") ?>"></script>
    <!-- masonry,isotope Effect Js -->
    <script src="<?php echo base_url("assets/js/imagesloaded.pkgd.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/isotope.pkgd.min.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/masonry.pkgd.min.js") ?>"></script>
    <!-- Appear Js -->
    <script src="<?php echo base_url("assets/js/jquery.appear.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/wow.min.js") ?>"></script>
    <!-- fancybox Js -->
    <script src="<?php echo base_url("assets/js/jquery.mousewheel-3.0.6.pack.js") ?>"></script>
    <script src="<?php echo base_url("assets/js/jquery.fancybox.pack.js") ?>"></script>
    <!-- Carousel Js -->
    <script src="<?php echo base_url("assets/js/owl.carousel.min.js") ?>"></script>
    <!-- Map api Js -->
    <script src="http://maps.google.com/maps/api/js?sensor=false&.js"></script>
    <!-- custom Js -->
    <script src="<?php echo base_url("assets/js/custom.js") ?>"></script>
    <!-- mail Js -->
    <script src="<?php echo base_url("assets/js/mail.js") ?>"></script>
    <!--custom  Map Js -->
    <script src="<?php echo base_url("assets/js/map.js") ?>"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
        $('#Modal').modal('show');
        });
    </script>
    <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
        margin:10,
        loop:true,
        autoWidth:true,
        autoplay:true,
        autoplayTimeout:2200,
        items:4
        })
    </script>

</body>

</html>
