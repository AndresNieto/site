
<?php ob_start() ?>   
<section class="slice bg-white">
    <div class="wp-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="../images/campañas/Cabezote1.jpg" width="100%"><br><br><br>
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <div class="icon-block icon-block-1">
                        <div class="icon-block-item">
                            <i class="fa fa-file"></i>
                        </div>
                        <div class="icon-block-body">
                            <h4 class="">Comunicado de Prensa 001</h4>
                            <p>03-04-2017</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <div class="icon-block icon-block-1">
                        <div class="icon-block-item">
                            <i class="fa fa-file"></i>
                        </div>
                        <div class="icon-block-body">
                            <h4 class="">Comunicado de Prensa 002</h4>
                            <p>03-04-2017</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 ">
                    <div class="icon-block icon-block-1">
                        <div class="icon-block-item">
                            <i class="fa fa-file"></i>
                        </div>
                        <div class="icon-block-body">
                            <h4 class="">Comunicado de Prensa 003</h4>
                            <p>03-04-2017</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantillabase.php"; ?>