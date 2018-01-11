<section class="margin-top-art">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php $query = $this->db->query("SELECT * FROM artiste WHERE deleted='0' LIMIT 1;");  
                foreach($query->result() as $rows){ ?>
                    <div class="row">   
                        <div class="col-xs-12">
                            <div class="col-xs-6">
                            <h1 class="titre-decallage"><?php echo $rows->name ?></h1>
                                <?php if ($rows->file_name): ?>
                                <img class="img_actu img-responsive center-block" src="<?php echo base_url("uploads/artistes/$rows->file_name")?>" alt="">
                                <?php endif;?>
                            </div>
                            <?php if (strlen(($rows->texte)) > 252 ){?>
                            <div class="col-xs-6">  
                                    <div id="actu_margin_titre" class="hidden_actu padding-text">
                                        <!-- <h1><?php echo $rows->name ?></h1> -->
                                        <div class="date hidden_actu">
                                            <h4><?php echo $rows->valeur ?><h4>
                                        </div>
                                        <p class="colorpara"><?php $t = substr($rows->texte, 0, 252)." ...";echo $t ?> </p>
                                    </div>
                            </div>
                            <?php }else { ?>
                            <div class="col-xs-12">
                            <p class="ghg"><?php echo substr($rows->texte, 253, 1000)?></p>
                            </div>
                            <?php } ?>
                        <!--FIN COL 12 ACTU -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="owl-carousel owl-theme">
                                <div class="item" style="width:250px">
                                    <div class="item-box">
                                        <img class="img_actu img-responsive center-block item-container" src="<?php echo base_url("uploads/artistes/$rows->file_name")?>" alt=""> 
                                        <a href="<?php echo base_url("uploads/artistes/$rows->file_name")?>" class="fancylight" data-fancybox-group="light">
                                            <div class="link-zoom">
                                                <div class="link-zoom__text">
                                                    <h4>Branding</h4>
                                                </div>
                                            </div>
                                        </a> 
                                    </div>
                                </div>  
                                <div class="item" style="width:250px">
                                    <div class="item-box">
                                        <img class="img_actu img-responsive center-block item-container" src="<?php echo base_url("uploads/artistes/$rows->file_name")?>" alt=""> 
                                        <a href="<?php echo base_url("uploads/artistes/$rows->file_name")?>" class="fancylight" data-fancybox-group="light">
                                            <div class="link-zoom">
                                                <div class="link-zoom__text">
                                                    <h4>Branding</h4>
                                                </div>
                                            </div>
                                        </a> 
                                    </div>
                                </div>
                                <div class="item" style="width:250px">
                                    <div class="item-box">
                                        <img class="img_actu img-responsive center-block item-container" src="<?php echo base_url("uploads/artistes/$rows->file_name")?>" alt=""> 
                                        <a href="<?php echo base_url("uploads/artistes/$rows->file_name")?>" class="fancylight" data-fancybox-group="light">
                                            <div class="link-zoom">
                                                <div class="link-zoom__text">
                                                    <h4>Branding</h4>
                                                </div>
                                            </div>
                                        </a> 
                                    </div>
                                </div>
                                <div class="item" style="width:250px">
                                    <div class="item-box">
                                        <img class="img_actu img-responsive center-block item-container" src="<?php echo base_url("uploads/artistes/$rows->file_name")?>" alt=""> 
                                        <a href="<?php echo base_url("uploads/artistes/$rows->file_name")?>" class="fancylight" data-fancybox-group="light">
                                            <div class="link-zoom">
                                                <div class="link-zoom__text">
                                                    <h4>Branding</h4>
                                                </div>
                                            </div>
                                        </a> 
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div id="barre_molen"></div>

                <?php } ?>     

            </div>
        </div>
    </div>
</section>