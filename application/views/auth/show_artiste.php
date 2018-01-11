<div class="row">
        <div class="col-lg-12 col-xs-12 ">
        <!-- small box -->
                <div class="small-box bg-yellow">
                        <div class="inner col-xs-offset-1">
                                <h3>Modifier un artiste</h3>
                        </div>
                </div>
        </div>
<!-- ./col -->
</div>
<div class="col-md-10 col-md-offset-1">

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th class="col-xs-3"><h3 class="text-center"><strong>Photo</strong></h3></th>
                <th class="col-xs-2"><h3 class="text-center"><strong>Nom</strong></h3></th>
                <th class="col-xs-2"><h3 class="text-center"><strong>Pratique</strong></h3></th>
                <th class="col-xs-2"><h3 class="text-center"><strong>Texte</strong></h3></th>
                <th class="col-xs-3"><h3 class="text-center"><strong>Actions</strong></h3></th>

            </tr>
        </thead>
    
        <tbody>
            <?php foreach ($result->result() as $rows) { ?>
                <tr>
                    <td>
                        <?php if ($rows->file_name): ?>
                        <img class="img-responsive" src="<?php echo base_url("uploads/artistes/$rows->file_name")?>" alt="">
                        <?php endif;?>
                    </td>
                    <td>
                        <h3 class="text-center"><a data-toggle="modal" data-target="#myModal<?php echo $rows->id?>"><?php echo $rows->name ?></a>
                        </h3>
                    </td>
                    <td>
                        <h4 class="colorpara text-center"><?php echo $rows->valeur ?></h4>
                    </td>
                    <td>                            
                        <?php if (strlen(($rows->texte)) > 260) {?>
                            <h4 class="colorpara text-center"><?php $t = substr($rows->texte, 0, 60)." ...";echo $t ?> </h4>
                        <?php } else { ?>
                                <h4 class="colorpara text-center"><?php echo $rows->texte ?> </h4>
                        <?php }?>
                    </td>
                    <td class="text-center" scope="row" style="padding-top:2%">
                        <!-- Button trigger modal -->
                        <button class="btn  btn-success" data-toggle="modal" data-target="#myModal<?php echo $rows->id?>">Modifier </button>
                        <button class="btn  btn-warning" data-toggle="modal" data-target="#myModalDelete<?php echo $rows->id?>"> Delete</button>
                    </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="myModal<?php echo $rows->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modifier un artiste</h4>
                        </div>
                        <div class="modal-body" id="contentEdit">


                                <?= form_open('artiste/updated_post/' . $rows->id); ?>

                                <?php

                                $data_name = array(
                                        'name'  => 'name',
                                        'Class'   => 'form-control',
                                        'value'   => $rows->name,
                                        'name'   => 'name'
                                );


                                $data_image = array(
                                        'type'  => 'file',
                                        'Size'   => '20',
                                        'value'   => $rows->file_name,
                                        'name'   => 'userfile'
                                );
                                ?>
                                <?php echo form_hidden('id_post', $rows->id);?>
                                <?php echo form_label('Artiste', 'name'); ?>
                                <?= form_input($data_name); ?>
                                
                                <?php echo form_label('Médium', 'valeur'); ?>
                                <br>
                                <select name="valeur" id="valeur">
                                        <option class="no_value" value=""><?php echo $rows->valeur ?></option>
                                        <option class="Photographe" for="valeur">Photographie</option>
                                        <option class="Peintre" for="valeur">Peinture</option>      
                                        <option class="Sculpteur" for="valeur">Installation</option>      
                                        <option class="Sculpteur" for="valeur">Dessin</option>      
                                </select>
                                <br>
                                <?php echo form_label('About the artiste', 'poste'); ?>
                                <textarea id="some-textarea" name="texte" texte="texte" class="form-control" placeholder="<?php echo $rows->texte ?>" style="styles to copy to the iframe"></textarea>



                            </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <?php echo form_submit('mysubmit', 'Publish', array('class' => 'btn btn-primary')); ?>
                                <?= form_close() ?>
                        </div>
                        </div>
                    </div>
                </div>

                    <!-- Modal Delete-->
                <div class="modal fade" id="myModalDelete<?php echo $rows->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Supprimer l'article</h4>
                            </div>   
                            <div class="modal-body" id="contentEdit">
                            
                                <?= form_open('equipeedit/updated_post/'); ?>
                                <?php

                                $data_name = array(
                                        'name'  => 'name',
                                        'Class'   => 'form-control',
                                        'value'   => $rows->name,
                                        'name'   => 'name'
                                );
                                $data_poste = array(
                                        'poste'  => 'poste',
                                        'Class'   => 'form-control',
                                        'value'   => $rows->poste,
                                        'name'   => 'poste'
                                );
                                ?>
                                <?php echo form_hidden('id_post', $rows->id);?>
                                <?php echo form_label('What is your name', 'name'); ?>
                                <?= form_input($data_name); ?>
                                <?php echo form_label('What is your content', 'poste'); ?>
                                <?= form_textarea($data_poste); ?>

                                <?= form_close() ?>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a href=" <?php echo base_url("equipeedit/delete/".$rows->id); ?>"class="btn btn-lg btn-warning">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>


            <?php } ?>
        </tbody>
    </table>

</div>


