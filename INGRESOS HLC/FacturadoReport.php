<?PHP //require("menuOperaciones.php"); 
require("/configuracion/ventanasEmergentes.php");
require('/configuracion/funciones.php');

$mostrarmenu=new menus();
$mostrarmenu->menuTemplate($_GET['warehouse'],$_GET['datawarehouse'],$rutasalir,$rutapasswd,$usuario,$entidad,$rutamenuprincipal,'principal',$rutaimagen,$basedatos);

?>
<?php require('/configuracion/clases/reporteFactura.php');

$mostrarFooter=new menus();
$mostrarFooter->footerTemplate();
?>