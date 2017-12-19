<div class="row">
        <div class="col-lg-12 col-xs-12 ">
        <!-- small box -->
                <div class="small-box bg-yellow">
                        <div class="inner col-xs-offset-1">
                                <h3>Terminer un article</h3>
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
                <th class="col-xs-2"><h3 class="text-center"><strong>Titre</strong></h3></th>
                <th class="col-xs-2"><h3 class="text-center"><strong>Texte</strong></h3></th>
                <th class="col-xs-2"><h3 class="text-center"><strong>Catégorie</strong></h3></th>
                <th class="col-xs-3"><h3 class="text-center"><strong>Actions</strong></h3></th>
            </tr>
        </thead>
    
        <tbody>
            <?php foreach ($result->result() as $rows) { ?>
                <tr>
                    <td>
                        <?php if ($rows->file_name): ?>
                        <img class="img-responsive" src="<?php echo base_url("uploads/draft/files/$rows->file_name")?>" alt="">
                        <?php endif;?>
                    </td>
                    <td>    
                        <h3 class="text-center"><a data-toggle="modal" data-target="#myModal<?php echo $rows->id?>"><?php echo $rows->title ?></a></h3>
                    </td>
                    <td>                            
                        <?php if (strlen(($rows->texte)) > 260) {?>
                            <h4 class="colorpara text-center"><?php $t = substr($rows->texte, 0, 60)." ...";echo $t ?> </h4>
                        <?php } else { ?>
                                <h4 class="colorpara text-center"><?php echo $rows->texte ?> </h4>
                        <?php }?>
                    </td>
                    <td>
                        <h4 class="colorpara text-center"><?php echo $rows->valeur ?></h4>
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
                            <h4 class="modal-title" id="myModalLabel">Terminer l'article</h4>
                        </div>
                        <div class="modal-body" id="contentEdit">
                                <?php
                                $link=base_url('edit/update_draft');
                                echo form_open_multipart($link); ?>
                                <?php

                                $data_title = array(
                                        'title'  => 'title',
                                        'Class'   => 'form-control',
                                        'value'   => $rows->title,
                                        'name'   => 'title'
                                );

                                $data_texte = array(
                                        'texte'  => 'texte',
                                        'Class'   => 'form-control',
                                        'value'   => $rows->texte,
                                        'name'   => 'texte'

                                );
                                $data_image = array(
                                        'type'  => 'file',
                                        'Size'   => '20',
                                        'name'   => 'userfile'
                                );
                                ?>
                                <?php echo form_hidden('id_post', $rows->id);?>
                                <?php echo form_label('Title', 'title'); ?>
                                <?= form_input($data_title); ?>
                                
                                <?php echo form_label('Catégorie', 'valeur'); ?>
                                <br>
                                <select name="valeur" id="valeur">
                                        <option class="no_value" value=""><?php echo $rows->valeur ?></option>
                                        <option class="Expositions" for="valeur">Expositions</option>
                                        <option class="Artistes" for="valeur">Artistes</option>      
                                        <option class="Oeuvres" for="valeur">Oeuvres</option>      
                                        <option class="Evenements" for="valeur">Evenements</option>      
                                </select>
                                <br>

                                        <?php echo form_error('file'); ?>
                                        <?php echo form_label('Image max 2 Mo', 'userfile'); ?>
                                        <?php echo form_upload($data_image); ?>

                                <?php echo form_label('Article', 'poste'); ?>
                                <?php echo form_input($data_texte); ?> 

                            </div>

                        <div class="modal-footer">
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                            <?php echo form_submit('mysubmit', 'Publish', array('class' => 'btn btn-primary', 'data-dismiss' => 'modal')); ?>
                            <?php echo form_submit('mysubmit', 'Save', array('class' => 'btn btn-info', 'data-dismiss' => 'modal')); ?>
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
                                    <h4 class="modal-title" id="myModalLabel">Delete an article</h4>
                            </div>   
                            <div class="modal-body" id="contentEdit">
                            
                                <?= form_open('edit/updated_post/'); ?>
                                <?php

                                $data_title = array(
                                        'title'  => 'title',
                                        'Class'   => 'form-control',
                                        'value'   => $rows->title,
                                        'name'   => 'title'
                                );
                                $data_texte = array(
                                        'title'  => 'texte',
                                        'Class'   => 'form-control',
                                        'value'   => $rows->texte,
                                        'name'   => 'texte',
                                        'id' => 'some-textarea',
                                        'style' => 'styles to copy to the iframe'
                                );
                                ?>
                                <?php echo form_hidden('id_post', $rows->id);?>
                                <?php echo form_label('your title', 'title'); ?>
                                <?= form_input($data_title); ?>
                                <?php echo form_label('Your content', 'poste'); ?>
                                <?= form_textarea($data_texte); ?>

                                <?= form_close() ?>

                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <a href=" <?php echo base_url("edit/delete_draft/".$rows->id); ?>"class="btn btn-lg btn-warning">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>


            <?php } ?>
        </tbody>
    </table>

</div>


