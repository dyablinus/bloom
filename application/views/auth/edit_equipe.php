
                
        <section class="col-lg-4 col-md-offset-2 connectedSortable">
                <?php echo $this->session->flashdata('success'); ?> 
                <?php echo $this->session->flashdata('error'); ?>
                <h1>Actualiser l'équipe de la bourgemestre</h1>

             
                <!-- defini vers quelle methode envoyer le form -->
                <?php
                $link=base_url('equipeedit/create');
                echo form_open_multipart($link); ?>
                <?php

                $data_name = array(
                'name'  => 'name',
                'Class'   => 'form-control',
                'name'   => 'name'
                );

                $data_poste = array(
                'poste'  => 'poste',
                'Class'   => 'form-control',
                'name'   => 'poste'
                );

                $data_image = array(
                'type'  => 'file',
                'Size'   => '20',
                'name'   => 'userfile'
                );
               
                ?>

                <?php echo form_label('Catégorie de l\'article', 'valeur'); ?>
               <br>
                <select name="valeur" id="valeur">
                        <option class="no_value" value="">---</option>
                        <option class="liste" for="valeur">Liste de la bourgemestre</option>
                        <option class="equipe" for="valeur">Equipe de la bourgemestre</option>      
                </select>

                <br>
                <?php echo form_error('name'); ?>
                <?php echo form_label('Nom et prénom', 'name'); ?>
                <?php echo form_input($data_name); ?>
                
                
                <?php echo form_error('poste'); ?>
                <?php echo form_label('Fonction', 'poste'); ?>
                <?php echo form_input($data_poste); ?>
                
                <?php echo form_error('file'); ?>
                <?php echo form_label('Photo carrée max 2 Mo', 'userfile'); ?>
                <?php echo form_upload($data_image); ?>
                
                <?php echo form_submit('mysubmit', 'Publish', array('class' => 'btn btn-primary')); ?>
                <?php echo form_close() ?> 
        </section>


                


 
