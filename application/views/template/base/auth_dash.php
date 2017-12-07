<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" media="screen" href="<?= base_url("/node_modules/bootstrap/dist/css/bootstrap.min.css") ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> 

  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Date Picker -->
  <link rel="stylesheet" href="<?= base_url("/assets/plugins/datepicker/datepicker3.css")?>">

  <!-- Theme style -->
   <link rel="stylesheet" href="<?= base_url("/assets/dist/css/AdminLTE.min.css")?>"> 
  <!-- AdminLTE Skins. -->

   <link rel="stylesheet" href="<?= base_url("/assets/dist/css/_all-skins.min.css")?>">  
   <link rel="stylesheet" href="<?= base_url("/assets/css/bootstrap3-wysihtml5.min.css")?>">  
    
      <script src="<?php echo base_url("assets/plugins/jQuery/jquery-2.2.3.min.js")?>";></script>

      <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

        <?php $this->load->view("template/base/auth_nav"); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->


        <div class="row">
                    <?= $view_content ?> 
        </div>

        <div class="control-sidebar-bg"></div>
      </section>
    </div>
  </div>

<!-- ./wrapper -->
<?php $this->load->view("template/base/auth_footer"); ?>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
 <script src="<?= base_url("/node_modules/bootstrap/dist/js/bootstrap.min.js") ?>"></script>
 <script src="<?= base_url("/assets/js/bootstrap3-wysihtml5.all.min") ?>"></script>
 <script src="<?= base_url("/assets/js/wysihtml5x-toolbar.min.js") ?>"></script>
 <script src='<?php echo base_url();?>assets/plugins/timepicker/dist/jquery-ui-timepicker-addon.js'></script>

<script>
$('#some-textarea').wysihtml5({
    "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
    "emphasis": true, //Italics, bold, etc. Default true
    "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
    "html": false, //Button which allows you to edit the generated HTML. Default false
    "link": true, //Button to insert a link. Default true
    "image": true, //Button to insert an image. Default true,
    "color": false, //Button to change color of font  
    "blockquote": true, //Blockquote  

});
</script>

</body>
</html>
