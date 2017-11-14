﻿
<!-- START HOMEPAGE DESIGN AREA -->
<header id="home" class="welcome-area">

 <?php $this->load->view('template/base/blog/navbar');?> 

  <div class="welcome-image-area " data-stellar-background-ratio="0.6">
    <div class="display-table">
      <div class="display-table-cell">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="header-text text-center">
                <h1 class="typewrite" data-period="2000" data-type='[ "Hi, I am Designer.", "I am Developer.", "I am creative.", "I am Expert" ]'>
                <span class="wrap"></span> </h1>

              </div>
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
        <h2>About Monster</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 col-md-6 mb-sm-30">
        <figure class="shadow_box img_box"> <img src="<?php echo base_url("assets/images/blog/about_img.jpg ")?>" alt=""> </figure>
      </div>
      <div class="col-sm-12 col-md-6 ">
        <div class="item">
          <div class="header-wrap mb-30">
            <h3 class="color">I’ am a Designer</h3>
          </div>
          <div class="dark-color">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
              standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to
              make a type specimen book. It has survived not only five centuries</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
              standard </p>
            <div class="our_skil">
              <ul class="skill_point">
                <li class="wow fadeInDown" data-wow-delay="0.2s">
                  <div class="skill_label bg_color counter" data-count="70">0</div>
                  Web design </li>
                <li class="wow fadeInDown" data-wow-delay="0.25s">
                  <div class="skill_label bg_color counter" data-count="85">0</div>
                  User experience </li>
                <li class="wow fadeInDown" data-wow-delay="0.3s">
                  <div class="skill_label bg_color counter" data-count="80">0</div>
                  Wordpress </li>
                <li class="wow fadeInDown" data-wow-delay="0.35s">
                  <div class="skill_label bg_color counter" data-count="95">0</div>
                  Jquery </li>
              </ul>
            </div>
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
        <h2>Our Work</h2>
      </div>
    </div>
    <!-- work Filter -->
    <div class="row">
      <ul class="container-filter categories-filter">
        <li> <a class="categories active" data-filter="*">All</a> </li>
        <li> <a class="categories" data-filter=".branding">Branding</a> </li>
        <li> <a class="categories" data-filter=".design">Design</a> </li>
        <li> <a class="categories" data-filter=".photo">Photo</a> </li>
        <li> <a class="categories" data-filter=".coffee">coffee</a> </li>
      </ul>
    </div>
    <!-- End work Filter -->
    <div class="row container-masonry nf-col-4">
      <div class="nf-item w2x branding coffee spacing">
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
      </div>
      <div class="nf-item grid-sizer photo spacing">
        <div class="item-box"> <img alt="1" src="assets/images/blog/portfolio3/2.jpg" class="item-container">
          <a href="assets/images/blog/portfolio3/2.jpg"
            class="fancylight" data-fancybox-group="light">
            <div class="link-zoom">
              <div class="link-zoom__text">
                <h4>Photo</h4>
                <span class="project_status">Work Is Done</span> <span class="project_date">07.08.2017</span> </div>
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
                <span class="project_status">Work Is Done</span> <span class="project_date">07.08.2017</span> </div>
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
                <span class="project_status">Work Is Done</span> <span class="project_date">07.08.2017</span> </div>
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
                <span class="project_status">Work Is Done</span> <span class="project_date">07.08.2017</span> </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Our Work Section End -->
<!--Tetstimonial Section-->
<section id="testimonial" class="padding ptb-xs-60 light-dark"> <span class="top_arrow">
        <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
  </span>
  <div class="container">
    <div class="row pb-30 text-center">
      <div class="col-sm-12 mb-20">
        <h2>Reviews!</h2>
      </div>
    </div>
    <div class="row">
      <div class="testimonial_owl owl-carousel">
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
                <span class="sub-title mb-30">CEO Marketing</span>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been . Lorem Ipsum
                  has been . Lorem Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ipsum has been . Lorem Ipsum has been Lorem Ipsum is simply dummy text of the printing and industry.
                  Lorem Ipsum has been . Lorem Ipsum has been </p>
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
                <span class="sub-title mb-30">CEO Marketing</span>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been . Lorem Ipsum
                  has been . Lorem Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ipsum has been . Lorem Ipsum has been Lorem Ipsum is simply dummy text of the printing and industry.
                  Lorem Ipsum has been . Lorem Ipsum has been </p>
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
                <span class="sub-title mb-30">CEO Marketing</span>
                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been . Lorem Ipsum
                  has been . Lorem Ipsum has been Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                  Lorem Ipsum has been . Lorem Ipsum has been Lorem Ipsum is simply dummy text of the printing and industry.
                  Lorem Ipsum has been . Lorem Ipsum has been </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Tetstimonial Section End-->
<!--Contect Section Start-->
<section id="contact-section"> <span class="top_arrow">
  <div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
  </span>
  <div class="container ">
    <div class="row pb-30 text-center">
      <div class="col-sm-12 mb-20">
        <h2>Contact Me!</h2>
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
              <div role="alert" class="alert alert-success"> <strong>Thanks</strong> for using our template. Your message has been sent. </div>
            </div>
            <!-- END IF MAIL SENT SUCCESSFULLY -->
            <div class="row">
              <div class="col-sm-6">
                <div class="form-field">
                  <input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="Your Name">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-field">
                  <input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="Email">
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-field">
                  <input class="input-sm form-full" id="sub" type="text" name="form-subject" placeholder="Subject">
                </div>
              </div>
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




