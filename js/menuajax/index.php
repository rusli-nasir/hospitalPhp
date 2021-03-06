<?php 
require('/Constantes.php');
require (CONSTANT_PATH_CONFIGURACION.'/operacioneshospitalariasmenu/sala1/sala1.php'); require(CONSTANT_PATH_CONFIGURACION.'/funciones.php');?>
<?php

$_GET['folioVenta']='I20064';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta http-equiv="Content-Script-Type" content="text/javascript">

    
        <script src="jquery-1.1.3.1.pack.js" type="text/javascript"></script>
        <script src="jquery.history_remote.pack.js" type="text/javascript"></script>
        <script src="jquery.tabs.pack.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {

                $('#container-1').tabs();
                $('#container-2').tabs(2);
                $('#container-3').tabs({ fxSlide: true });
                $('#container-4').tabs({ fxFade: true, fxSpeed: 'fast' });
                $('#container-5').tabs({ fxSlide: true, fxFade: true, fxSpeed: 'normal' });
                $('#container-6').tabs({
                    fxFade: true,
                    fxSpeed: 'fast',
                    onClick: function() {
                        alert('onClick');
                    },
                    onHide: function() {
                        alert('onHide');
                    },
                    onShow: function() {
                        alert('onShow');
                    }
                });
                $('#container-7').tabs({ fxAutoHeight: true });
                $('#container-8').tabs({ fxShow: { height: 'show', opacity: 'show' }, fxSpeed: 'normal' });
                $('#container-9').tabs({ remote: true });
                $('#container-10').tabs();
                $('#container-11').tabs({ disabled: [3] });

                $('<p><a href="#">Disable third tab<\/a><\/p>').prependTo('#fragment-28').find('a').click(function() {
                    $(this).parents('div').eq(1).disableTab(3);
                    return false;
                });
                $('<p><a href="#">Activate third tab<\/a><\/p>').prependTo('#fragment-28').find('a').click(function() {
                    $(this).parents('div').eq(1).triggerTab(3);
                    return false;
                });
                $('<p><a href="#">Enable third tab<\/a><\/p>').prependTo('#fragment-28').find('a').click(function() {
                    $(this).parents('div').eq(1).enableTab(3);
                    return false;
                });

            });
        </script>

        <link rel="stylesheet" href="jquery.tabs.css" type="text/css" media="print, projection, screen">
        <!-- Additional IE/Win specific style sheet (Conditional Comments) -->
        <!--[if lte IE 7]>
        <link rel="stylesheet" href="jquery.tabs-ie.css" type="text/css" media="projection, screen">
        <![endif]-->
        <style type="text/css" media="screen, projection">

            /* Not required for Tabs, just to make this demo look better... */

            body {
                font-size: 16px; /* @ EOMB */
            }
            * html body {
                font-size: 100%; /* @ IE */
            }
            body * {
                font-size: 87.5%;
                font-family: "Trebuchet MS", Trebuchet, Verdana, Helvetica, Arial, sans-serif;
            }
            body * * {
                font-size: 100%;
            }
            h1 {
                margin: 1em 0 1.5em;
                font-size: 18px;
            }
            h2 {
                margin: 2em 0 1.5em;
                font-size: 16px;
            }
            p {
                margin: 0;
            }
            pre, pre+p, p+p {
                margin: 1em 0 0;
            }
            code {
                font-family: "Courier New", Courier, monospace;
            }
        </style>
    </head>
    <body>
        
        <h2>Lista de Pacientes</h2>

        <div id="container-3" >
            <ul>
                <li><a href="#fragment-1"><span>Datos del Paciente</span></a></li>
                <li><a href="#fragment-2"><span>Estado de Cuenta</span></a></li>
                <li><a href="#fragment-3"><span>Cargos</span></a></li>
                <li><a href="#fragment-4"><span>Devoluciones</span></a></li>
                <li><a href="#fragment-5"><span>Alta del Px</span></a></li>
            </ul>
            <div id="fragment-1">
                <p>Datos del Paciente</p>
     <?php
               include (CONSTANT_PATH_CONFIGURACION.'/clases/datosPaciente.php');
			  
               ?>
            </div>
            <div id="fragment-2">
               <?php
               include (CONSTANT_PATH_CONFIGURACION.'/clases/estadoCuentaMenu.php');
			  
               ?>
            </div>
            <div id="fragment-3">

            </div>
            
           <div id="fragment-4">
               <?php
               include (CONSTANT_PATH_CONFIGURACION.'/clases/aplicarDevolucionesMenu.php');
			  
               ?>
            </div>
            <div id="fragment-5">
               <?php
               include (CONSTANT_PATH_CONFIGURACION.'/clases/cargosPacientesInternos.php');
			  
               ?>
            </div>
        </div>

        

    </body>
</html>