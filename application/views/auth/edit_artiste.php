
  <div class="row">
        <div class="col-lg-12 col-xs-12 ">
        <!-- small box -->
                <div class="small-box bg-yellow">
                        <div class="inner col-xs-offset-1">
                                <h3>Ajouter un artiste</h3>
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
                        $link=base_url('edit/create');
                        echo form_open_multipart($link); ?>
                        <?php

                        $data_title = array(
                        'title'  => 'title',
                        'Class'   => 'form-control',
                        'name'   => 'title'
                        );

                        $data_image = array(
                        'type'  => 'file',
                        'Size'   => '20',
                        'name'   => 'userfile'
                        );
                
                        ?>

                        <?php echo form_error('title'); ?>
                        <?php echo form_label('Titre de l\'article', 'title'); ?>
                        <?php echo form_input($data_title); ?>
                </div>        
                <div class="col-lg-4">    
                        <?php echo form_error('file'); ?>
                        <?php echo form_label('Image de l\'article max 2 Mo', 'userfile'); ?>
                        <?php echo form_upload($data_image); ?>
                
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



                


 
