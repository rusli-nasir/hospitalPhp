<?php 
require("/Constantes.php");
//require("menuOperaciones.php"); 
require(CONSTANT_PATH_CONFIGURACION."/ventanasEmergentes.php");
require(CONSTANT_PATH_CONFIGURACION.'/funciones.php');

$mostrarmenu=new menus();
$mostrarmenu->menuTemplate($_GET['warehouse'],$_GET['datawarehouse'],$rutasalir,$rutapasswd,$usuario,$entidad,$rutamenuprincipal,'principal',$rutaimagen,$basedatos);

?>
<?php require(CONSTANT_PATH_CONFIGURACION."/clases/listaExternosDescuentos.php"); ?>

<?php
$ventana='../cargos/aplicarDescuentos.php';
$TITULO='Px Ambulatorios';

$listaExternosDescuentos=new muestraExternosDescuentos();
$listaExternosDescuentos->listaExternosDescuentos($ALMACEN,$entidad,$TITULO,$ventana,$basedatos);

$mostrarFooter = new menus();
$mostrarFooter->footerTemplate($usuario,$entidad,$basedatos);
?>