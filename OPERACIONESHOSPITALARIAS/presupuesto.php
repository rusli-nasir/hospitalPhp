<?php //require("../OPERACIONESHOSPITALARIAS/menuOperaciones.php"); 
require("/configuracion/ventanasEmergentes.php");
require('/configuracion/funciones.php');

$mostrarmenu=new menus();
$mostrarmenu->menuTemplate($_GET['warehouse'],$_GET['datawarehouse'],$rutasalir,$rutapasswd,$usuario,$entidad,$rutamenuprincipal,'principal',$rutaimagen,$basedatos);

?>
<?php include("/configuracion/clases/presupuestoPaciente.php"); 
$mostrarFooter = new menus();
$mostrarFooter->footerTemplate();
?>

