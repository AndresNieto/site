
                    <?php ob_start() ?>   
                    <section class="slice bg-white">
                        <div class="wp-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="../images/backgrounds/Cabezote-audios.jpg" width="100%"><br><br><br>
                                        <iframe id='audio_17890928' frameborder='0' allowfullscreen='' scrolling='no' height='200' style='border:1px solid #EEE; box-sizing:border-box; width:100%;' src="https://co.ivoox.com/es/player_ej_17890928_4_1.html?c1=ff6600"></iframe><br>
                                        <iframe id='audio_17891520' frameborder='0' allowfullscreen='' scrolling='no' height='200' style='border:1px solid #EEE; box-sizing:border-box; width:100%;' src="https://co.ivoox.com/es/player_ej_17891520_4_1.html?c1=ff6600"></iframe>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </section>
                    <?php $contenido=ob_get_clean(); ?>
                    <?php include "plantilla/plantillabase.php"; ?>