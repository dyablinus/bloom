
  <div class="row">
        <div class="col-lg-12 col-xs-12 ">
        <!-- small box -->
                <div class="small-box bg-yellow">
                        <div class="inner col-xs-offset-1">
                                <h3><?php echo lang('change_password_heading');?></h3>
                        </div>
                </div>
        </div>
<!-- ./col -->
</div>
<div class="row">
      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1" style="background-color: #3c8dbc">
            
            <div id="infoMessage"><?php echo $message;?></div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-5" style="color: #fff">
                  <?php echo form_open("auth/change_password");?>

                        <p>
                              <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
                              <?php echo form_input($old_password);?>
                        </p>

                        <p>
                              <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
                              <?php echo form_input($new_password);?>
                        </p>

                        <p>
                              <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
                              <?php echo form_input($new_password_confirm);?>
                        </p>

                        <?php echo form_input($user_id);?>
            </div>
      </div>
                  <p><?php echo form_submit('submit', lang('change_password_submit_btn'), array('class' => 'btn btn-primary btn btn-lg btn-primary col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1'));?></p>

            <?php echo form_close();?>

</div>