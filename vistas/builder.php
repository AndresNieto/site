<?php ob_start() ?>
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
                                                    <p>Lamentamos informar que esta sección de la pagina aún se encuentra en construcción. Lo invitamos a estar a suscribirse a nuestro boletín de noticias y a seguirnos en nuestra pagina de Facebook </p>
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
<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantillabase.php"; ?>