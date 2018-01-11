
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
                        $link=base_url('artiste/create');
                        echo form_open_multipart($link); ?>
                        <?php

                        $data_name = array(
                        'name'  => 'name',
                        'Class'   => 'form-control',
                        'name'   => 'name'
                        );

                        $data_image = array(
                        'type'  => 'file',
                        'Size'   => '20',
                        'name'   => 'userfile'
                        );
                
                        ?>


                        <?php echo form_error('name'); ?>
                        <?php echo form_label('Nom de l\'artiste', 'name'); ?>
                        <?php echo form_input($data_name); ?>

                        <?php echo form_label('Médium', 'valeur'); ?>
                        <br>
                        <select name="valeur" id="valeur">
                                <option class="no_value" value="">---</option>
                                <option class="Photographe" for="valeur">Photographie</option>
                                <option class="Peintre" for="valeur">Peinture</option>      
                                <option class="Sculpteur" for="valeur">Installation</option>      
                                <option class="Sculpteur" for="valeur">Dessin</option>      
                        </select>
                </div>        
                <div class="col-lg-4">    
                        <?php echo form_error('file'); ?>
                        <?php echo form_label('Photo de l\'artiste max 2 Mo', 'userfile'); ?>
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

        <div class="container">
                <div class="row">
                        <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
                        <form enctype="multipart/form-data" action="" method="post">
                        <div class="form-group">
                                <label>Choose Files</label>
                                <input type="file" class="form-control" name="userFiles[]" multiple/>
                        </div>
                        <div class="form-group">
                                <input class="form-control" type="submit" name="fileSubmit" value="UPLOAD"/>
                        </div>
                        </form>
                </div>
                <div class="row">
                        <ul class="gallery">
                        <?php if(!empty($files)): foreach($files as $file): ?>
                        <li class="item">
                                <img src="<?php echo base_url('uploads/slider/'.$file['file_name']); ?>" alt="" >
                                <p>Uploaded On <?php echo date("j M Y",strtotime($file['created'])); ?></p>
                        </li>
                        <?php endforeach; else: ?>
                        <p>Image(s) not found.....</p>
                        <?php endif; ?>
                        </ul>
                </div>
        </div>
</section>



                


 
