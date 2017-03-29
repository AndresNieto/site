<?php ob_start() ?>
    <div class="pg-opt">
        <div class="container">
            <div class="row">
                <div class="col-xs-6">
                    <h2>Blog</h2>
                </div>
                <div class="col-xs-6">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="active">Large grid</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    
        <section class="slice bg-white">
            <div class="wp-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Standard image post example -->
                            <?php if(isset($pub)) { 
                                $fecha="";
                                foreach($pub as $pub){ 
                                    switch (substr($pub['fecha'], 5,2)) {
                                        case '01':$fecha="Ene";break;
                                        case '02':$fecha="Feb";break;
                                        case '03':$fecha="Mar";break;
                                        case '04':$fecha="Abr";break;
                                        case '05':$fecha="May";break;
                                        case '06':$fecha="Jun";break;
                                        case '07':$fecha="Jul";break;
                                        case '08':$fecha="Ago";break;
                                        case '09':$fecha="Sep";break;
                                        case '10':$fecha="Oct";break;
                                        case '11':$fecha="Nov";break;
                                        case '12':$fecha="Dic";break;                                    
                                        
                                    }
                                    ?>
                            <div class="post-item style2">
                                <div class="post-meta hidden-xs">
                                    <div class="date">
                                        <span class="icon"><i class="fa fa-calendar"></i></span>
                                        <span class="month"><?php echo $fecha;?></span>
                                        <span class="day"><?php echo substr($pub['fecha'], 5,2)?></span>
                                    </div>
                                    <div class="fb-share-button" data-href="http://elpapaenvillavicencio.com/site/index.php/<?php echo $pub['url'];?>" data-layout="button" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Compartir</a></div>
                                </div>
                                <div class="post-content-wr">
                                    <div class="post-meta-top">
                                        <div class="post-image">
                                            <a href="#"><img src="../images/noticias/<?php echo $pub['name_image'];?>" alt=""></a>
                                        </div>
                                        <h2 class="post-title">
                                            <a href="<?php echo $pub['url'];?>"><?php echo $pub['title'];?></a>
                                        </h2>
                                    </div>
                                    <div class="post-content clearfix">
                                        <div class="post-tags">Categoria <?php echo $pub['categoria'];?></div>
                                        <div class="post-desc">
                                            <p><?php echo substr($pub['body'], 0,500)?> ...</p>
                                        </div>
                                    </div>
                                    <div class="post-meta-bot clearfix">
                                        <span class="post-author">Por<a href="#"> Comisión de Comunicaciones</a></span>
                                        <a href="<?php echo $pub['url'];?>" class="btn btn-sm btn-base">Leer más</a>
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
    
    
                      
</div>

    
<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantillabase.php"; ?>