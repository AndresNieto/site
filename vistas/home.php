<?php ob_start() ?>
    <!--Header-->
    <section id="slider-wrapper" class="layer-slider-wrapper layer-slider-dynamic">
        <div id="layerslider" style="width:100%;">
            <?php if(isset($sli)) {
                foreach($sli as $sli){ ?>  
            <div class="ls-slide" data-ls="transition2d:1;timeshift:-1000;" >
                <img src="../images/slider/<?php echo $sli['name_image'];?>" class="ls-bg" alt="Slide background" />
                <?php if ($sli['url']!="#"){ ?>
                <a href="<?php echo $sli['url'];?>" class="btn btn-danger btn-lg ls-l" style="top:80%; left:50%;" data-ls="offsetxin:0;offsetyin:250;durationin:1500;delayin:1500;offsetxout:0;offsetyout:-8;easingout:easeInOutQuart;scalexout:1.2;scaleyout:1.2;" target="_blank">Ver más</a> 
                <?php } ?>
            </div>
            <?php }} ?>             
        </div>
    </section>
    <br>
    <!--Access-->
    
    <section class="slice relative bg-white bb animate-hover-slide">
        <div class="wp-section">
            <div class="container">
                <div class="section-title-wr">
                    <h3 class="section-title left"><span></span></h3>
                </div>                               
                <div id="carouselWork" class="carousel carousel-3 slide animate-hover-slide">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="wp-block inverse">
                                        <div class="figure">

                                            <img alt="" src="../images/externo/voluntario.jpg" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="#" class="btn btn-xs btn-b-white theater"><i class="fa fa-plus-circle"></i>Ver más</a>                                               
                                            </div>
                                        </div>                                       
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="" src="../images/externo/campaña.jpg" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="/site/index.php/02042017reconciliemonosconlanaturaleza" class="btn btn-xs btn-b-white theater"><i class="fa fa-plus-circle"></i>Ver más</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="" src="../images/externo/itinerario.jpg" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                                <a href="#" class="btn btn-xs btn-b-white theater"><i class="fa fa-plus-circle"></i>Ver más</a>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="wp-block inverse">
                                        <div class="figure">
                                            <img alt="" src="../images/externo/prensa.jpg" class="img-responsive">
                                            <div class="figcaption bg-base"></div>
                                            <div class="figcaption-btn">
                                               <a href="#" class="btn btn-xs btn-b-white theater"><i class="fa fa-plus-circle"></i>Ver más</a>   
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <!--Video-->
    <section class="slice bg-white bb">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="panel panel-default panel-sidebar-1">
                            <div class="owl-carousel owl-carousel-single">
                                <div>
                                    <div class="wp-block testimonial style-1 base">
                                        <div class="wp-block-video">
                                            <div class="embed-responsive embed-responsive-16by9">
                                               <iframe width="560" height="315" src="https://www.youtube.com/embed/WJ_Zn6mlAsE" frameborder="0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="wp-block-body"> 
                                            <p>
                                                <i class="fa fa-quote-left"></i> Con el lema ‘Demos el primer paso, reconciliémonos con la naturaleza’, 
                                                la Arquidiócesis de Villavicencio se prepara desde ya para recibir al Papa el próximo 8 de septiembre. 
                                                La campaña que tiene como propósito cambiar el uso de la palma para elaborar los ramos que se bendicen 
                                                en la apertura de la Semana Santa y, a cambio, donar y sembrar un árbol.
                                            </p><br>
                                        </div>
                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4"> 
                        <div class="wp-block mb-20">
                            
                           <a class="twitter-timeline" href="https://twitter.com/pontifex_es" height=600px></a> 
                           <script async    src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Notices-->
    <section class="slice relative bg-white bb animate-hover-slide">
        <div class="wp-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Style 1 -->
                        <div class="section-title-wr">
                            <h3 class="section-title left"><span>Noticias</span></h3>
                            <div class="aux-nav">
                                <a href="#"> <i class="fa fa-paperclip"></i> Ver todas las noticias</a>
                            </div>
                        </div> <br>
                        <?php if(isset($pub)) {
                                        $n=sizeof($pub);
                                        $j=0;?> 
                        <div id="carouselWork" class="carousel carousel-3 slide animate-hover-slide">
                            <div class="carousel-nav">
                                <a data-slide="prev" class="left" href="#carouselWork"><i class="fa fa-angle-left"></i></a>
                                <a data-slide="next" class="right" href="#carouselWork"><i class="fa fa-angle-right"></i></a>
                            </div>
                            <div class="carousel-inner">
                                <?php if ($j<$n) { ?>
                                <div class="item active">                       
                                    <div class="row">
                                                           
                                        <?php if ($j<$n) { ?>     
                                        <div class="col-md-4">
                                            <div class="wp-block article grid">
                                                <div class="article-image">
                                                    <img src="../images/noticias/<?php echo $pub[$j]['name_image'];?>" alt="">
                                                </div>
                                                <span class="article-category">Papa Francisco</span>
                                                <h3 class="title">
                                                    <a href="/site/index.php/<?php echo $pub[$j]['url'];?>"><?php echo $pub[$j]['title'];?></a>
                                                </h3>
                                                <p><?php echo substr($pub[$j]['body'], 0,300)?></p>
                                            </div>
                                        </div>
                                        <?php $j+=1;} ?> 
                                        <?php if ($j<$n) { ?>  
                                        <div class="col-md-4">
                                            <div class="wp-block article grid">
                                                <div class="article-image">
                                                    <img src="../images/noticias/<?php echo $pub[$j]['name_image'];?>" alt="">
                                                </div>
                                                <span class="article-category">Papa Francisco</span>
                                                <h3 class="title">
                                                    <a href="/site/index.php/<?php echo $pub[$j]['url'];?>"><?php echo $pub[$j]['title'];?></a>
                                                </h3>
                                                <p><?php echo substr($pub[$j]['body'], 0,300)?></p>
                                            </div>
                                        </div>
                                        <?php $j+=1;} ?>
                                        <?php if ($j<$n) { ?>  
                                        <div class="col-md-4">
                                            <div class="wp-block article grid">
                                                <div class="article-image">
                                                    <img src="../images/noticias/<?php echo $pub[$j]['name_image'];?>" alt="">
                                                </div>
                                                <span class="article-category">Papa Francisco</span>
                                                <h3 class="title">
                                                    <a href="/site/index.php/<?php echo $pub[$j]['url'];?>"><?php echo $pub[$j]['title'];?></a>
                                                </h3>
                                                <p><?php echo substr($pub[$j]['body'], 0,300)?></p>
                                            </div>
                                        </div>
                                        <?php $j+=1;} ?>         
                                    </div> 
                                </div> 
                                <?php } ?>
                                <?php if ($j<$n) { ?>
                                <div class="item ">                       
                                    <div class="row">                                                     
                                        <?php if ($j<$n) { ?>     
                                        <div class="col-md-4">
                                            <div class="wp-block article grid">
                                                <div class="article-image">
                                                    <img src="../images/noticias/<?php echo $pub[$j]['name_image'];?>" alt="">
                                                </div>
                                                <span class="article-category">Papa Francisco</span>
                                                <h3 class="title">
                                                    <a href="/site/index.php/<?php echo $pub[$j]['url'];?>"><?php echo $pub[$j]['title'];?></a>
                                                </h3>
                                                <p><?php echo substr($pub[$j]['body'], 0,300)?></p>
                                            </div>
                                        </div>
                                        <?php $j+=1;} ?> 
                                        <?php if ($j<$n) { ?>  
                                        <div class="col-md-4">
                                            <div class="wp-block article grid">
                                                <div class="article-image">
                                                    <img src="../images/noticias/<?php echo $pub[$j]['name_image'];?>" alt="">
                                                </div>
                                                <span class="article-category">Papa Francisco</span>
                                                <h3 class="title">
                                                    <a href="/site/index.php/<?php echo $pub[$j]['url'];?>"><?php echo $pub[$j]['title'];?></a>
                                                </h3>
                                                <p><?php echo substr($pub[$j]['body'], 0,300)?></p>
                                            </div>
                                        </div>
                                        <?php $j+=1;} ?>
                                        <?php if ($j<$n) { ?>  
                                        <div class="col-md-4">
                                            <div class="wp-block article grid">
                                                <div class="article-image">
                                                    <img src="../images/noticias/<?php echo $pub[$j]['name_image'];?>" alt="">
                                                </div>
                                                <span class="article-category">Papa Francisco</span>
                                                <h3 class="title">
                                                    <a href="/site/index.php/<?php echo $pub[$j]['url'];?>"><?php echo $pub[$j]['title'];?></a>
                                                </h3>
                                                <p><?php echo substr($pub[$j]['body'], 0,300)?></p>
                                            </div>
                                        </div>
                                        <?php $j+1;} ?>          
                                    </div> 
                                </div>
                                <?php } ?>
                                <?php if ($j<$n) { ?>
                                <div class="item ">                       
                                    <div class="row">                                                     
                                        <?php if ($j<$n) { ?>     
                                        <div class="col-md-4">
                                            <div class="wp-block article grid">
                                                <div class="article-image">
                                                    <img src="../images/noticias/<?php echo $pub[$j]['name_image'];?>" alt="">
                                                </div>
                                                <span class="article-category">Papa Francisco</span>
                                                <h3 class="title">
                                                    <a href="/site/index.php/<?php echo $pub[$j]['url'];?>"><?php echo $pub[$j]['title'];?></a>
                                                </h3>
                                                <p><?php echo substr($pub[$j]['body'], 0,300)?></p>
                                            </div>
                                        </div>
                                        <?php $j+=1;} ?> 
                                        <?php if ($j<$n) { ?>  
                                        <div class="col-md-4">
                                            <div class="wp-block article grid">
                                                <div class="article-image">
                                                    <img src="../images/noticias/<?php echo $pub[$j]['name_image'];?>" alt="">
                                                </div>
                                                <span class="article-category">Papa Francisco</span>
                                                <h3 class="title">
                                                    <a href="/site/index.php/<?php echo $pub[$j]['url'];?>"><?php echo $pub[$j]['title'];?></a>
                                                </h3>
                                                <p><?php echo substr($pub[$j]['body'], 0,300)?></p>
                                            </div>
                                        </div>
                                        <?php $j+=1;} ?>
                                        <?php if ($j<$n) { ?>  
                                        <div class="col-md-4">
                                            <div class="wp-block article grid">
                                                <div class="article-image">
                                                    <img src="../images/noticias/<?php echo $pub[$j]['name_image'];?>" alt="">
                                                </div>
                                                <span class="article-category">Papa Francisco</span>
                                                <h3 class="title">
                                                    <a href="/site/index.php/<?php echo $pub[$j]['url'];?>"><?php echo $pub[$j]['title'];?></a>
                                                </h3>
                                                <p><?php echo substr($pub[$j]['body'], 0,300)?></p>
                                            </div>
                                        </div>
                                                                   
                                        <?php }}  ?>                           
                                    </div> 
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>  
    <!--Count-->
    <section class="slice no-padding bb">
        <div class="wp-section">
            <div class="container-fluid no-padding">
                <div class="row">
                    <div class="col-md-12">
                        <!-- JumboTron -->
                        <div class="jumbotron">
                            <div class="jumbotron-center">
                                <div id="homepageCarousel" class="carousel carousel-1 carousel-fixed-height slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="item item-dark active" style="background-image:url(../images/prv/estate/regresive.jpg);">
                                            <div class="mask mask-1"></div>  
                                            <div class="container">                                                
                                                <div class="description-left">
                                                    <ul class="countdown">
                                                        <li> <span class="days">00</span><p class="days_ref">días</p></li>    
                                                        <li class="seperator">.</li>
                                                        <li> <span class="hours">00</span><p class="hours_ref">horas</p></li>
                                                        <li class="seperator">:</li>
                                                        <li> <span class="minutes">00</span><p class="minutes_ref">minutos</p></li>
                                                        <li class="seperator">:</li>
                                                        <li> <span class="seconds">00</span><p class="seconds_ref">segundos</p></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>     
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!--Interes-->
    <section class="slice bg-white">
        <div class="wp-section">
            <div class="container">
                <div class="section-title-wr">
                    <h3 class="section-title left"><span>Links de Interes</span></h3>
                </div>
                <div class="row">
                    <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="client">
                            <a href="http://www.comisiondeconciliacion.co/" target="_blank">
                                <img src="../images/interes/1.jpg" alt="">
                            </a>
                        </div>
                    </div>
                     <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="client">
                            <a href="http://www.new.pastoralsocial.org/" target="_blank">
                                <img src="../images/interes/2.jpg" alt="">
                            </a>
                        </div>
                    </div>
                     <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="client">
                            <a href="http://www.cec.org.co/" target="_blank">
                                <img src="../images/interes/3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                     <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="client">
                            <a href="http://w2.vatican.va/content/vatican/es.html" target="_blank">
                                <img src="../images/interes/4.jpg" alt="">
                            </a>
                        </div>
                    </div>
                     <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="client">
                            <a href="http://www.celam.org/">
                                <img src="../images/interes/5.jpg" alt="" target="_blank">
                            </a>
                        </div>
                    </div>
                     <div class="col-md-2 col-sm-4 col-xs-6">
                        <div class="client">
                            <a href="http://www.arqidiocesisdevillavicencio.org.co" target="_blank">
                                <img src="../images/interes/6.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantillabase.php"; ?>