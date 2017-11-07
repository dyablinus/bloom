                                        <?php
                                            $prenom = isset($_GET['n'])?$_GET['n']:"";
                                            $email = isset($_GET['email'])?$_GET['email']:"";
                                            $message = isset($_GET['msg'])?$_GET['msg']:"";

                                        ?>
                            <form action="<?php echo base_url('index.php/home/contact_post');?>" id="contactForm" name="contactform" data-toggle="validator" class="contact-form" method="POST">
                                <div id="msgSubmit" class="hidden"></div>
                                <div class="form-group">
                                    <div class="help-block with-errors hidden"></div>
                                    <input name="fname" id="fname" placeholder="Votre Nom*" class="form-control" type="text" required data-error="Please enter Name" value="<?php echo $prenom ?>"> 
                                    <div class="input-group-icon"><i class="fa fa-user"></i></div>
                                </div>
                                <div class="form-group">
                                    <div class="help-block with-errors hidden"></div>
                                    <input name="email" id="email" placeholder="Votre email*" class="form-control" type="email" required data-error="Please enter Email" value="<?php echo $email ?>"> 
                                    <div class="input-group-icon"><i class="fa fa-envelope"></i></div>
                                </div>
                                <div class="form-group">
                                    <div class="help-block with-errors hidden"></div>
                                    <textarea rows="3" name="message" id="message" placeholder="Votre demande*" class="form-control" required data-error="Please enter message" value="<?php echo $message ?>"></textarea>
                                    <div class="input-group-icon"><i class="fa fa-pencil"></i></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" id="submit" class="btn btn-custom btn-transparent">Envoyer</button>                               
                                    <span class="sub-text">* Champs obligatoires</span>
                                </div>
                            </form>
