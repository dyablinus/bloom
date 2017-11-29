<div class="row">
      <div class="col-lg-12 col-xs-12 ">
      <!-- small box -->
            <div class="small-box bg-yellow">
                  <div class="inner col-xs-offset-1">
                              <h3><?php echo lang('create_user_heading');?></h3>
                  </div>
            </div>
      </div>
<!-- ./col -->
</div> 
<div class="row">

      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1" style="background-color: #3c8dbc">
            
            <div class="col-xs-offset-3">
                  <h4 style="color: #fff"><?php echo lang('create_user_subheading');?></h4>
            </div>

            <div id="infoMessage"><?php echo $message;?></div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-3" style="color: #fff">
                  
                  <?php echo form_open("auth/create_user");?>

                        <p>
                              <?php echo lang('create_user_fname_label', 'first_name');?> <br />
                              <?php echo form_input($first_name);?>
                        </p>

                        <p>
                              <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                              <?php echo form_input($last_name);?>
                        </p>
                        
                        <?php
                        if($identity_column!=='email') {
                        echo '<p>';
                        echo lang('create_user_identity_label', 'identity');
                        echo '<br />';
                        echo form_error('identity');
                        echo form_input($identity);
                        echo '</p>';
                        }
                        ?>

                        <p>
                              <?php echo lang('create_user_email_label', 'email');?> <br />
                              <?php echo form_input($email);?>
                        </p>
            </div>

            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="color: #fff">

                        <p>
                              <?php echo lang('create_user_phone_label', 'phone');?> <br />
                              <?php echo form_input($phone);?>
                        </p>

                        <p>
                              <?php echo lang('create_user_password_label', 'password');?> <br />
                              <?php echo form_input($password);?>
                        </p>

                        <p>
                              <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                              <?php echo form_input($password_confirm);?>
                        </p>

            </div>


      </div>


      <p>
            <?php echo form_submit('submit', lang('create_user_submit_btn'), array('class' => 'btn btn-lg btn-primary col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1'));?>
      </p>

      <?php echo form_close();?>


</div>
