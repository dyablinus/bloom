    
    <section id="Main" class="overlay">
        <div class="overlay-content">
            <div id="menu_langue" class="col-xs-3 col-xs-offset-9">
                <div class="lang_en lang">
                    <a class="btn_nav_lang_en" href=<?php echo base_url("/langchange/change/fr") ?>>FR</a>
                    <a class="btn_nav_lang_en" href=<?php echo base_url("/langchange/change/en") ?>>EN</a>
                </div>
            </div>
            <div class="content">
                <div class="container"> 
                    <!-- coming-soon header text start -->
                    <div class="coming-soon-text">
                        <h4>We are</h4>
                        <h1>coming soon</h1>
                    </div>
                    <!-- coming-soon header text end -->
                    
                    <!-- countdown Box start -->
                    <!-- <div class="coming-soon-count">
                        <div id="defaultCountdown"></div>
                    </div> -->
                    <!-- countdown Box end -->

                    <!-- Buttons start -->
                    <div class="btn-holder">
                        <a href="javascript:void(0)" class="btn btn-custom btn-transparent" onclick="openAboutStyle()"><?php echo lang('notreprojet');?></a>
                        <a href="javascript:void(0)" class="btn btn-custom btn-transparent" onclick="openServicesStyle()"><?php echo lang('avantages');?></a>
                        <a href="javascript:void(0)" class="btn btn-custom btn-transparent" onclick="openSubscribeStyle()"><?php echo lang('newsletter');?></a>
                        <a href="javascript:void(0)" class="btn btn-custom btn-transparent" onclick="openContactStyle()"><?php echo lang('contact');?></a>
                    </div>
                    <!-- Buttons end -->
                    
                    <!-- Start Social media -->

                    <!-- <div class="social-holder">
                        <p>Suivez nous!</p>
                        <ul class="list-inline list-social clearfix">
                            <li>
                                <a href="https://www.facebook.com/BlankTitle-356584598101861/?modal=admin_todo_tour" class="social-icon social-icon-facebook" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.pinterest.fr/blanktitle/" class="social-icon social-icon-pinterest" target="_blank">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCWAs008Lh7f3cZJ8emxR-0Q?disable_polymer=true" class="social-icon social-icon-youtube" target="_blank">
                                    <i class="fa fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div> -->

                    <!-- End Social media -->
                </div><!-- End container -->
            </div>
        </div><!-- End of overlay-content -->
    </section><!-- End of #Main -->
    
    <!-- Start About Section -->
    <section id="About" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeAboutStyle()">&times;</a>
        <div class="overlay-content">
            <div class="content">
                <div class="container">
                    <div class="title-box">
                        <h2>BlankTitle ?</h2>
                    </div>
                    
                    <!-- Start About box -->
                    <div class="about-box">
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="about-wrap">
                                            <div class="icon-holder">
                                                <i class="fa fa-book"></i>
                                            </div><!-- end icon-holder -->
                                            <div class="text-box">
                                                <div class="title-box">
                                                    <h3><?php echo lang('notre');?><strong><?php echo lang('projet');?></strong></h3>
                                                </div>
                                                <p><?php echo lang('textprojet');?></p>
                                            </div><!-- end text-box -->
                                        </div><!-- end about-wrap -->
                                    </div><!-- end col -->
                                    <div class="col-md-12">
                                        <div class="about-wrap">
                                            <div class="icon-holder">
                                                <i class="fa fa-address-book-o"></i>
                                            </div><!-- end icon-holder -->
                                            <div class="text-box">
                                                <div class="title-box">
                                                    <h3><?php echo lang('qui');?><strong><?php echo lang('sommes');?></strong></h3>
                                                </div>
                                            </div><!-- end text-box -->
                                        </div><!-- end about-wrap -->
                                    </div><!-- end col -->
                                    <div class="col-md-6">
                                        <div class="about-wrap">
                                            <div class="text-box">
                                                <div class="img-box">
                                                    <img src="<?php echo base_url("assets/images/jeremy.jpg")?>" class="img-responsive img-circle center-block" alt="">
                                                </div>
                                                <div class="name-box text-center">
                                                    <h3>Jérémy <strong>Ruiz</strong></h3>
                                                </div>
                                                <p><?php echo lang('textjerem');?></p>
                                            </div><!-- end text-box -->
                                        </div><!-- end about-wrap -->
                                    </div><!-- end col -->
                                    <div class="col-md-6">
                                        <div class="about-wrap">
                                            <div class="text-box">
                                                <div class="img-box">
                                                    <img src="<?php echo base_url("assets/images/jean.jpg")?>" class="img-responsive img-circle center-block" alt="">
                                                </div>
                                                <div class="name-box text-center">
                                                    <h3>Jean <strong>Lejeune</strong></h3>
                                                </div>
                                                <p><?php echo lang('textjean');?> </p>                                             
                                            </div><!-- end text-box -->
                                        </div><!-- end about-wrap -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end col-sm-12 -->
                        </div><!-- end row -->
                    </div>
                    <!-- end About box -->
                </div><!-- container -->
            </div><!-- content -->
        </div><!-- End of overlay-content -->
    </section>
    <!-- End of #About -->
    
    <!-- Start Services Section -->
    <section id="Services" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeServicesStyle()">&times;</a>
        <div class="overlay-content">
            <div class="content">
                <div class="container">
                    <div class="title-box">
                        <h2><?php echo lang('artiste');?></h2>
                    </div>  
                    <!-- Start Services box -->
                    <div class="Services-box">
                        <div class="row">
                            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                <div class="service-item">
                                    <i class="fa fa-paint-brush fa-3x"></i>                                                                 
                                    <h3><?php echo lang('titreleft');?></h3>
                                    <p><?php echo lang('textleft');?></p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                <div class="service-item">
                                    <i class="fa fa-bullhorn fa-3x"></i>                                
                                    <h3><?php echo lang('titremiddel');?></h3>
                                    <p><?php echo lang('textmiddel');?></p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 margin-agencement">
                                <div class="service-item ajust">
                                    <i class="fa fa-usd fa-3x"></i>
                                    <h3><?php echo lang('titreright');?></h3>
                                    <p><?php echo lang('textright');?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="title-box">
                        <h2><?php echo lang('acheteurs');?></h2>
                    </div>

                    <div class="Services-box">
                        <div class="row">                        
                            <!-- Partie acquereur -->
                            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4 ">
                                <div class="service-item ajust">
                                    <i class="fa fa-search fa-3x"></i>
                                    <h3><?php echo lang('titreleftbuy');?></h3>
                                    <p><?php echo lang('textleftbuy');?></p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                <div class="service-item">
                                    <i class="fa fa-balance-scale fa-3x"></i>
                                    <h3><?php echo lang('titremiddelbuy');?></h3>
                                    <p><?php echo lang('textmiddelbuy');?></p>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4">
                                <div class="service-item">
                                    <i class="fa fa-shopping-cart fa-3x"></i>
                                    <h3><?php echo lang('titrerightbuy');?></h3>
                                    <p><?php echo lang('textrightbuy');?></p>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div>
                    <!-- end Services box -->
                </div><!-- container -->
            </div><!-- content -->
        </div><!-- End of overlay-content -->
    </section>
    <!-- End of #Services -->
    
    <!-- Start Subscribe Section -->
    <section id="Subscribe" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeSubscribeStyle()">&times;</a>
        <div class="overlay-content">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="title-box">
                                <h2>Newsletter</h2>
                            </div>
                            <p><?php echo lang('textnews');?></p>
                            
                            <!-- Start mailchimp form -->
                             <!-- <div class="mc-form-holder">
                                <form id="mc-form">
                                    <input id="mc-email" class="form-control" type="email" placeholder="email address">
                                    <button class="btn" type="submit"><i class="fa fa-paper-plane"></i></button>
                                    <label for="mc-email"></label>
                                </form>
                            </div> -->
                            <!-- $('#mc-form').ajaxChimp({
                                url:https://blanktitle.us17.list-manage.com/subscribe/post?u=43d3705b55096c83e92dd5165&amp;id=e11f630225
                            });  -->

                            <!-- end mailchimp form -->      
 
                        <!-- Begin MailChimp Signup Form -->
                        <div id="mc_embed_signup mc-form-holder">
                            <form action="https://blanktitle.us17.list-manage.com/subscribe/post?u=43d3705b55096c83e92dd5165&amp;id=e11f630225" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <div class="mc-field-group">
                                        <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Your email" id="mce-EMAIL">
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_43d3705b55096c83e92dd5165_e11f630225" tabindex="-1" value=""></div>
                                    <div class="clear"><button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn"><i class="fa fa-paper-plane"></i></button></div>
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
                        <!--End mc_embed_signup-->
           
                        </div><!-- End of col -->
                    </div><!-- End of row -->
                </div><!-- End of container -->
            </div><!-- End of content -->
        </div><!-- End of overlay-content -->
    </section>
    <!-- End of #Subscribe -->
    
    <!-- Start Contact Section -->
    <section id="myContact" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeContactStyle()">&times;</a>
        <div class="overlay-content">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="title-box">
                                <h2><?php echo lang('titrecontact');?></h2>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="contact-details">
                                <p><?php echo lang('textcontact');?></p>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-fw fa-map-marker"></i>Place de la minoterie 10, 1080 Molenbeek</li>
                                    <li><i class="fa fa-fw fa-phone"></i><a href="tel:04-721-820">0 476 651 820</a></li>
                                    <li><i class="fa fa-fw fa-envelope-o"></i><a href="mailto:contact@blanktitle.be">contact@blanktitle.be</a></li>
                                </ul>
                            </div>
                        </div><!-- End of col-sm-6 -->
                        
                        <div class="col-sm-6">
                            <!-- Start contact form -->

                            <form id="contactForm" name="contactform" data-toggle="validator" class="contact-form">
                                <div id="msgSubmit" class="hidden btn-success"></div>
                                <div class="form-group">
                                    <div class="help-block with-errors hidden"></div>
                                    <input name="fname" id="fname" placeholder="<?php echo lang('fieldname');?>" class="form-control" type="text" required data-error="Please enter Name"> 
                                    <div class="input-group-icon"><i class="fa fa-user"></i></div>
                                </div>
                                <div class="form-group">
                                    <div class="help-block with-errors hidden"></div>
                                    <input name="email" id="email" placeholder="<?php echo lang('fieldemail');?>" class="form-control" type="email" required data-error="Please enter Email"> 
                                    <div class="input-group-icon"><i class="fa fa-envelope"></i></div>
                                </div>
                                <div class="form-group">
                                    <div class="help-block with-errors hidden"></div>
                                    <textarea rows="3" name="message" id="message" placeholder="<?php echo lang('fieldcomment');?>" class="form-control" required data-error="Please enter message"></textarea>
                                    <div class="input-group-icon"><i class="fa fa-pencil"></i></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="submit" class="btn btn-custom btn-transparent"><?php echo lang('btnsend');?></button>                              
                                    <span class="sub-text"><?php echo lang('fieldrequired');?></span>
                                </div>
                            </form>
                            <!-- end contact form -->
                        </div><!-- End of col-sm-6 -->
                    </div><!-- End row -->
                </div><!-- container -->
            </div><!-- content -->
        </div><!-- End of overlay-content -->
    </section>
    <!-- End of #myContact -->
