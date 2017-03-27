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
                        }?> 