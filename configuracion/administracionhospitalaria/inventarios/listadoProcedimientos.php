<?PHP 
require('/Constantes.php');
include(CONSTANT_PATH_CONFIGURACION."/administracionhospitalaria/inventarios/inventariosmenu.php"); ?>
<?php include(CONSTANT_PATH_CONFIGURACION.'/clases/listadoServicios.php'); ?>
<?php
$listaServicios=new listaServicios();
$listaServicios->listadoServicios($entidad,$ALMACEN,$codigo,$basedatos);
?>