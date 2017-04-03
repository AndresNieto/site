<?php
    require_once "modelo/modelo.php";
    require_once "controlador/controlador.php";

    if(isset($_SERVER['REQUEST_URI'])){
      $uri = $_SERVER['REQUEST_URI'];
    }

    //Vistas
    if($uri=="/site/index.php/builder"){
     builder_action();
    } 

    if($uri=="/site/index.php/home"){
     home_action();
    }
    if($uri=="/site/index.php/notices"){
     notices_view_action();
    }
    if($uri=="/site/index.php/02042017reconciliemonosconlanaturaleza"){
     campaña1_action();
    }

    $url = explode("?", $_SERVER['REQUEST_URI']);
    if($url[0]=="/site/index.php/type_notices"){
     type_notices_action();
    }       
    
    ?>

                   
                   <?php
                    if($uri=="/site/index.php/27032017ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA"){
                         notices_action("27032017ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA");
                        }?> <?php
                    if($uri=="/site/index.php/27032017PREPARANDOLAPAGINAWEB"){
                         notices_action("27032017PREPARANDOLAPAGINAWEB");
                        }?>  <?php
                    if($uri=="/site/index.php/27032017ARREGLANDOELEDITOR"){
                         notices_action("27032017ARREGLANDOELEDITOR");
                        }?> <?php
                    if($uri=="/site/index.php/29032017ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA"){
                         notices_action("29032017ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA");
                        }?> <?php
                    if($uri=="/site/index.php/29032017ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA"){
                         notices_action("29032017ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA");
                        }?> <?php
                    if($uri=="/site/index.php/29032017ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA"){
                         notices_action("29032017ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA");
                        }?> <?php
                    if($uri=="/site/index.php/2017-04-01ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA"){
                         notices_action("2017-04-01ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA");
                        }?> <?php
                    if($uri=="/site/index.php/2017-04-01ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA"){
                         notices_action("2017-04-01ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA");
                        }?> <?php
                    if($uri=="/site/index.php/2017-04-01ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA"){
                         notices_action("2017-04-01ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA");
                        }?> <?php
                    if($uri=="/site/index.php/2017-04-01ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA"){
                         notices_action("2017-04-01ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA");
                        }?> <?php
                    if($uri=="/site/index.php/2017-04-01ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA"){
                         notices_action("2017-04-01ASISEPREPARANDOSCIUDADESPARALAVISITADELPAPA");
                        }?> <?php
                    if($uri=="/site/index.php/2017-03-29Probando"){
                         notices_action("2017-03-29Probando");
                        }?> <?php
                            if($uri=="/site/index.php/2017-03-29PreparandolaPáginaWeb"){
                                 notices_action("2017-03-29PreparandolaPáginaWeb");
                                }?> 