
  <div class="row">
        <div class="col-lg-12 col-xs-12 ">
        <!-- small box -->
                <div class="small-box bg-yellow">
                        <div class="inner col-xs-offset-1">
                                <h3>Add an event</h3>
                        </div>
                </div>
        </div>
<!-- ./col -->
</div>              
<section class="connectedSortable col-md-offset-1">
        <div class="row">
                <div class="col-lg-4">
                
                        <?php echo $this->session->flashdata('success'); ?> 
                        <?php echo $this->session->flashdata('error'); ?>
                
                        <!-- defini vers quelle methode envoyer le form -->
                        <?php
                        $link=base_url('artiste/create');
                        echo form_open_multipart($link); ?>
                        <?php

                        $data_name = array(
                        'name'  => 'name',
                        'Class'   => 'form-control',
                        'name'   => 'name'
                        );

                        $data_date = array(
                        'date'  => 'date',
                        'Class'   => 'form-control',
                        'id'  => 'datepicker',
                        'name'   => 'date'
                        );

                        $data_date_end = array(
                        'date'  => 'date',
                        'Class'   => 'form-control',
                        'id'  => 'datepicker2',
                        'name'   => 'date'
                        );

                        $data_image = array(
                        'type'  => 'file',
                        'Size'   => '20',
                        'name'   => 'userfile'
                        );
                
                        ?>


                        <?php echo form_error('name'); ?>
                        <?php echo form_label('Event name', 'name'); ?>
                        <?php echo form_input($data_name); ?>

                        <?php echo form_error('start_date'); ?>
                        <?php echo form_label('Start date', 'start_date'); ?>
                        <?php echo form_input($data_date); ?>


                </div>        
                <div class="col-lg-4">    
                    <?php echo form_error('file'); ?>
                    <?php echo form_label('Picture max 2 Mo', 'userfile'); ?>
                    <?php echo form_upload($data_image); ?>
                
                    <div id="end_date" style=" margin-top: 3.5%">
                        <?php echo form_error('end_date'); ?>
                        <?php echo form_label('End date', 'end_date'); ?>
                        <?php echo form_input($data_date_end); ?>
                    </div>
                </div>
        </div>
        
        <div class="row">            
                <div class="col-lg-10  connectedSortable" style="margin-top: 3%;">
                        <textarea id="some-textarea" name="texte" texte="texte" class="form-control" placeholder="Enter text ..." style="styles to copy to the iframe"></textarea>
                        
                        <?php echo form_submit('mysubmit', 'Publish', array('class' => 'btn btn-primary')); ?>
                        <?php echo form_close() ?> 
                </div>
        </div> 
</section>

<script>
    $( function() {
    $( "#datepicker" ).datetimepicker();
    } );
</script>

<script>
    $( function() {
    $( "#datepicker2" ).datetimepicker();
    } );
</script>


                


 
