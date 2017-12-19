
<!-- START HOMEPAGE DESIGN AREA -->
<header id="home" class="welcome-area">

 <?php $this->load->view('template/base/blog/navbar');?> 

  <div class="welcome-image-area " data-stellar-background-ratio="0.6">
    <div class="display-table">
      <div class="display-table-cell">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <!-- <div class="header-text text-center">
                <h1 class="typewrite" data-period="2000" data-type='[ "Hi, I am artist.", "I am art lover.", "We are blanktilte.", "BlanktiLTe ? What ?" ]'>
                <span class="wrap"></span> </h1>

              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- / END HOMEPAGE DESIGN AREA -->

<!--About Section-->
<section id="about" class="padding ptb-xs-60"> <span class="top_arrow">
  <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
  </span>
  <div class="container">
    <div class="row pb-30 text-center">
      <div class="col-sm-12 mb-20 dark-color">
        <h2>BlankTitle</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 mb-sm-30">
        <figure class="shadow_box img_box"> <img src="<?php echo base_url("assets/images/blog/museum-back.jpg ")?>" alt=""> </figure>
      </div>
      <div class="col-sm-12 col-md-6 ">
        <div class="item">
          <div class="dark-color">
          <!-- <h5 class="color">Lorem Ipsum is</h5> -->
            <p> <strong>BlankTitle is</strong> an art incubator project. As a first step, our platform will offer young, innovative artists a sales and visibility space so they have more time to devote to their passion. We then have for ambition to create events (exhibitions, meetings ...) as well as to make available a workshop space.</p>
            <p>On this part of the project, you can find our blog </p>
          </div>
        <div class="text-center">
          <a href="<?= base_url("home/index")?>" target=_blank class="btn mt-10-pourcent" type="button" name="button"> More  informations</a> 
        </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--Our Work Section -->
<!-- Work Section -->
<section id="work" class="padding ptb-xs-60 dark_bg"> <span class="top_arrow">
        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
  </span>
  <div class="container">
    <div class="row pb-30 text-center">
      <div class="col-sm-12 mb-20">
        <h2>Our Artistes</h2>
      </div>
    </div>
    <!-- work Filter -->
    <div class="row">
      <ul class="container-filter categories-filter">
        <li> <a class="categories active" data-filter="*">All</a> </li>
        <li> <a class="categories" data-filter=".branding">Painting</a> </li>
        <li> <a class="categories" data-filter=".design">Photo</a> </li>
        <li> <a class="categories" data-filter=".photo">Drawing</a> </li>
        <li> <a class="categories" data-filter=".coffee">Volume</a> </li>
      </ul>
    </div>
    <!-- End work Filter -->
    <div class="row container-masonry nf-col-4">
      <!-- <div class="nf-item w2x branding coffee spacing">
        <div class="item-box"> <img alt="1" src="assets/images/blog/portfolio3/1.jpg" class="item-container">
          <a href="assets/images/blog/portfolio3/1.jpg"
            class="fancylight" data-fancybox-group="light">
            <div class="link-zoom">
              <div class="link-zoom__text">
                <h4>Branding</h4>
                <span class="project_status">Work Is Done</span> <span class="project_date">07.08.2017</span> </div>
            </div>
          </a>
        </div>
      </div> -->
      <div class="nf-item grid-sizer photo spacing">
        <div class="item-box"> <img alt="1" src="assets/images/blog/portfolio3/soor_focus.jpg" class="item-container">
          <a href="assets/images/blog/portfolio3/2.jpg"
            class="fancylight" data-fancybox-group="light">
            <div class="link-zoom">
              <div class="link-zoom__text">
                <h4>Photo</h4>
                <span class="project_status">Work Is Done</span> <span class="project_date">08.08.2017</span> </div>
            </div>
          </a>
        </div>
      </div>
      <div class="nf-item branding photo spacing">
        <div class="item-box"> <img alt="1" src="assets/images/blog/portfolio3/3.jpg" class="item-container">
          <a href="assets/images/blog/portfolio3/3.jpg"
            class="fancylight" data-fancybox-group="light">
            <div class="link-zoom">
              <div class="link-zoom__text">
                <h4>photo</h4>
                <span class="project_status">Work Is Done</span> <span class="project_date">09.08.2017</span> </div>
            </div>
          </a>
        </div>
      </div>
      <div class="nf-item design spacing">
        <div class="item-box"> <img alt="1" src="assets/images/blog/portfolio3/4.jpg" class="item-container">
          <a href="assets/images/blog/portfolio3/4.jpg"
            class="fancylight" data-fancybox-group="light">
            <div class="link-zoom">
              <div class="link-zoom__text">
                <h4>Design</h4>
                <span class="project_status">Work Is Done</span> <span class="project_date">10.08.2017</span> </div>
            </div>
          </a>
        </div>
      </div>
      <div class="nf-item photo spacing">
        <div class="item-box"> <img alt="1" src="assets/images/blog/portfolio3/5.jpg" class="item-container">
          <a href="assets/images/blog/portfolio3/5.jpg"
            class="fancylight" data-fancybox-group="light">
            <div class="link-zoom">
              <div class="link-zoom__text">
                <h4>Design</h4>
                <span class="project_status">Work Is Done</span> <span class="project_date">11.08.2017</span> </div>
            </div>
          </a>
        </div>
      </div>
      <div class="nf-item grid-sizer photo spacing">
        <div class="item-box"> <img alt="1" src="assets/images/blog/portfolio3/2.jpg" class="item-container">
          <a href="assets/images/blog/portfolio3/2.jpg"
            class="fancylight" data-fancybox-group="light">
            <div class="link-zoom">
              <div class="link-zoom__text">
                <h4>Photo</h4>
                <span class="project_status">Work Is Done</span> <span class="project_date">08.08.2017</span> </div>
            </div>
          </a>
        </div>
      </div>
      <div class="nf-item branding photo spacing">
        <div class="item-box"> <img alt="1" src="assets/images/blog/portfolio3/3.jpg" class="item-container">
          <a href="assets/images/blog/portfolio3/3.jpg"
            class="fancylight" data-fancybox-group="light">
            <div class="link-zoom">
              <div class="link-zoom__text">
                <h4>photo</h4>
                <span class="project_status">Work Is Done</span> <span class="project_date">09.08.2017</span> </div>
            </div>
          </a>
        </div>
      </div>
      <div class="nf-item design spacing">
        <div class="item-box"> <img alt="1" src="assets/images/blog/portfolio3/4.jpg" class="item-container">
          <a href="assets/images/blog/portfolio3/4.jpg"
            class="fancylight" data-fancybox-group="light">
            <div class="link-zoom">
              <div class="link-zoom__text">
                <h4>Design</h4>
                <span class="project_status">Work Is Done</span> <span class="project_date">10.08.2017</span> </div>
            </div>
          </a>
        </div>
      </div>
      <div class="nf-item photo spacing">
        <div class="item-box"> <img alt="1" src="assets/images/blog/portfolio3/5.jpg" class="item-container">
          <a href="assets/images/blog/portfolio3/5.jpg"
            class="fancylight" data-fancybox-group="light">
            <div class="link-zoom">
              <div class="link-zoom__text">
                <h4>Design</h4>
                <span class="project_status">Work Is Done</span> <span class="project_date">11.08.2017</span> </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="text-center">
      <button class="btn" type="button" name="button"> See more </button> 
    </div>
  </div>
</section>
<!--Our Work Section End -->


<!-- Calendar start -->
<section id="calendar" class="padding ptb-xs-60 "> 
  <span class="top_arrow">
        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
  </span>
  <div class="container">
    <div class="row pb-30 text-center">
      <div class="col-sm-12 mb-20">
        <h2>Exhibitions</h2>
      </div>
    </div>
      <!-- work Filter -->
    <div class="row container-masonry nf-col-4">
      <?php $query = $this->db->query("SELECT * FROM event WHERE deleted=0 ORDER BY id DESC LIMIT 0,1;");
      foreach($query->result() as $rows){ ?>

      <div class="nf-item w2x branding coffee spacing">
          <div class="item-box"> <img alt="1" src="<?php echo base_url("uploads/calendar/files/$rows->file_name")?>"  class="item-container">
            <a data-toggle="modal" data-target="#myModal<?php echo $rows->id?>">
              <div class="link-zoom">
                <div class="link-zoom__text">

                  <?php if (strlen(($rows->title)) > 41 ){?>
                  <h3 class="title_event"><?php $t = substr($rows->title, 0, 40)." ...";echo $t ?> </h3>
                  <?php }else{ ?>
                  <h3 class="title_event"><?php echo $rows->title ?> </h3>
                  <?php }?>

                  <span class="project_status"><?php echo $rows->where ?></span> 
                  <?php if (strlen(($rows->start_date)) > 10 ){?>
                  <span class="project_date"><?php $t = substr($rows->start_date, 0, 10);echo $t ?> </span>
                  <?php }?>
                  <?php if (strlen(($rows->end_date)) > 10 ){?>
                  <span class="project_date"><?php $t = substr($rows->end_date, 0, 10);echo $t ?> </span>
                  <?php }?>
                </div>
              </div>
            </a>
          </div>
        </div>
      <?php } ?>
      <?php $query = $this->db->query("SELECT * FROM event WHERE deleted=0 ORDER BY id DESC LIMIT 1,8;");
      foreach($query->result() as $rows){ ?>

        <div class="nf-item grid-sizer photo spacing">
          <div class="item-box"> <img alt="1" src="<?php echo base_url("uploads/calendar/files/$rows->file_name")?>"  class="item-container">
            <a data-toggle="modal" data-target="#myModal<?php echo $rows->id?>">
              <div class="link-zoom">
                <div class="link-zoom__text">

                  <?php if (strlen(($rows->title)) > 41 ){?>
                  <h3 class="title_event"><?php $t = substr($rows->title, 0, 40)." ...";echo $t ?> </h3>
                  <?php }else{ ?>
                  <h3 class="title_event"><?php echo $rows->title ?> </h3>
                  <?php }?>

                  <span class="project_status"><?php echo $rows->where ?></span> 
                  <?php if (strlen(($rows->start_date)) > 10 ){?>
                  <span class="project_date"><?php $t = substr($rows->start_date, 0, 10);echo $t ?> </span>
                  <?php }?>
                  <?php if (strlen(($rows->end_date)) > 10 ){?>
                  <span class="project_date"><?php $t = substr($rows->end_date, 0, 10);echo $t ?> </span>
                  <?php }?>
                </div>
              </div>
            </a>
          </div>
        </div>

      <!-- Modal -->
      <div class="modal fade" id="myModal<?php echo $rows->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <?php if (strlen(($rows->title)) > 41 ){?>
                <h4 class="modal-title" id="myModalLabel"><?php $t = substr($rows->title, 0, 40)." ...";echo $t ?> </h4>
                <?php }else{ ?>
                <h4 class="modal-title text-center" id="myModalLabel"><?php echo $rows->title ?> </h4>
                <?php }?>
              </div>
            <div class="modal-body" id="contentEdit">
              <div class="row">
                <div class="col-xs-6">
                  <img alt="1" src="<?php echo base_url("uploads/calendar/files/$rows->file_name")?>">
                </div>
                <div class="col-xs-6">
                
                    <h4><?php echo $rows->where?></h4>
                    <h5><?php echo $rows->adress?></h5>
                    <?php if (strlen(($rows->start_date)) > 10 ){?>
                    <h5>Start date</h5>
                    <h6 class="project_date"><?php $t = substr($rows->start_date, 0, 10);echo $t ?> </h6>
                    <?php }?>
                    <h5>End date</h5>
                    <?php if (strlen(($rows->end_date)) > 10 ){?>
                    <h6 class="project_date"><?php $t = substr($rows->end_date, 0, 10);echo $t ?> </h6>
                    <?php }?>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12"><p><?php echo $rows->texte ?></p></div>
              </div>
        
            </div>

          </div>
        </div>
      </div>
    <?php } ?>
    </div>
    <div class="text-center">
      <button class="btn" type="button" name="button"> See more </button> 
    </div>
  </div>

</section>

<!-- Calendar End -->

<!--Exhibitions Section
<section id="testimonial" class="padding ptb-xs-60 light-dark"> <span class="top_arrow">
        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
  </span>
  <div class="container">
    <div class="row pb-30 text-center">
      <div class="col-sm-12 mb-20">
        <h2>Articles</h2>
      </div>
    </div>
    <div class="row">
      <div class="testimonial_owl owl-carousel">
        <div class="item">
          <div class="col-sm-4 col-sm-offset-1 z-index">
            <div class="text-block block-pull-r float-right">
              <figure class="shadow_box"> <img src="<?php echo base_url("assets/images/blog/roots_exhib.jpg ")?>" alt=""> </figure>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="testimonial">
              <div class="block-line dark-color">
                <h3 class="color">Soor </h3>
                <span class="sub-title mb-30">Roots</span>
                <p> Simon Roobaert X Ana Diaz <br> 17 Nov-17 Dec <br> 27 Gallerie du Roi <br> 1000 Bxl</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="col-sm-4 col-sm-offset-1 z-index">
            <div class="text-block block-pull-r float-right">
              <figure class="shadow_box"> <img src="<?php echo base_url("assets/images/blog/img.jpg ")?>" alt=""> </figure>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="testimonial">
              <div class="block-line dark-color">
                <h3 class="color">Branding and </h3>
                <span class="sub-title mb-30">CEO Marketing 2</span>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been . Lorem Ipsum
                  has been . Lorem Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ipsum has been . </p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="col-sm-4 col-sm-offset-1 z-index">
            <div class="text-block block-pull-r float-right">
              <figure class="shadow_box"> <img src="<?php echo base_url("assets/images/blog/img.jpg ")?>" alt=""> </figure>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="testimonial">
              <div class="block-line dark-color">
                <h3 class="color">Branding And </h3>
                <span class="sub-title mb-30">CEO Marketing 3</span>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been . Lorem Ipsum
                  has been . Lorem Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ipsum has been . </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="text-center qck-margintop">
      <a href="<?= base_url("home/index")?>" class="btn" type="button" name="button"> Archives</a> 
    </div>
    </div>
  </div>
</section>
Tetstimonial Section End-->


<!--Contect Section Start-->
<section id="contact-section" class="padding ptb-xs-60 dark_bg"> <span class="top_arrow">
  <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
  </span>
  <div class="container ">
    <div class="row pb-30 text-center">
      <div class="col-sm-12 mb-20">
        <h2>Contact Us!</h2>
      </div>
    </div>
    <div class="row">
      <div class="contact-form">
        <div class="col-sm-5 pl-0">
          <!-- Map Section -->
          <div class="map">
            <div id="map"></div>
          </div>
          <!-- Map Section -->

        </div>
        <div class="col-sm-7">

          <!-- Contact FORM -->
          <form class="mt-45 pb-60" id="contact ">
            <!-- IF MAIL SENT SUCCESSFULLY -->
            <div id="success">
              <div role="alert" class="alert alert-success"> <strong>Thanks</strong> for your interest. Your message has been sent. </div>
            </div>
            <!-- END IF MAIL SENT SUCCESSFULLY -->
            <div class="row">
              <div class="col-sm-12">
                <div class="form-field">
                  <input class="input-sm form-full" id="fname" type="text" name="fname" placeholder="Your Name">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-field">
                  <input class="input-sm form-full" id="email" type="text" name="email" placeholder="Your Email">
                </div>
              </div>
              <!-- <div class="col-sm-12">
                <div class="form-field">
                  <input class="input-sm form-full" id="sub" type="text" name="form-subject" placeholder="Subject">
                </div>
              </div> -->
              <div class="col-sm-12">
                <div class="form-field">
                  <textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Your Message"></textarea>
                </div>
              </div>
              <div class="col-sm-12 mt-30">
                <button class="btn" type="button" id="submit" name="button"> Send Message </button>
              </div>
            </div>
          </form>
          <!-- END Contact FORM -->
        </div>
      </div>
    </div>
  </div>
</section>
<!--Contect Section End-->




<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Wait !</h4>
      </div>
      <div class="modal-body">
        <p>Feel free to leave us your email address if you want to be sure not to miss our website’s launch! We will keep you informed of our latest news through our newsletter. Of course, we guarantee that we will never share your address and will never send you spam. Our communications are occasional and always relevant.</p>
        <div id="mc_embed_signup mc-form-holder">
            <form action="https://blanktitle.us17.list-manage.com/subscribe/post?u=43d3705b55096c83e92dd5165&amp;id=e11f630225" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <div class="mc-field-group row rowpadding">
                        <input type="email" value="" name="EMAIL" class="required email form-control modalnews col-md-8" placeholder="Your email" id="mce-EMAIL">
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_43d3705b55096c83e92dd5165_e11f630225" tabindex="-1" value=""></div>
                    <div class="clear modalign col-md-4"><button type="submit" value="Subscribe" name="subscribe" id="newsmodalsend" class="button btn"><i class="fa fa-paper-plane fa-news"></i></button></div>
                    </div>
                      <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>   
                </div>
            </form>
        </div>
        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Skip</button>
      </div> -->
    </div>
  </div>
</div>