<?php 
require("/Constantes.php");
//require("menuOperaciones.php"); 
require(CONSTANT_PATH_CONFIGURACION."/ventanasEmergentes.php");
require(CONSTANT_PATH_CONFIGURACION.'/funciones.php');

$mostrarmenu=new menus();
$mostrarmenu->menuTemplate($_GET['warehouse'],$_GET['datawarehouse'],$rutasalir,$rutapasswd,$usuario,$entidad,$rutamenuprincipal,'principal',$rutaimagen,$basedatos);

$ventana1='ventanaCatalogoAlmacen.php';
 ?>

 <!-Hoja de estilos del calendario -->
  <link rel="stylesheet" type="text/css" media="all" href="/sima/calendario/calendar-brown.css" title="win2k-cold-1" />
  <!-- librer�a principal del calendario -->
 <script type="text/javascript" src="/sima/calendario/calendar.js"></script>
 <!-- librer�a para cargar el lenguaje deseado -->
  <script type="text/javascript" src="/sima/calendario/lang/calendar-es.js"></script>
  <!-- librer�a que declara la funci�n Calendar.setup, que ayuda a generar un calendario en unas pocas l�neas de c�digo -->
  <script type="text/javascript" src="/sima/calendario/calendar-setup.js"></script>

<script language="javascript" type="text/javascript">

function vacio(q) {
        for ( i = 0; i < q.length; i++ ) {
                if ( q.charAt(i) != " " ) {
                        return true
                }
        }
        return false
}


function valida(F) {

        if( vacio(F.almacen.value) == false ) {
                alert("Por Favor, escoje el almacen/departamento!")
                return false
        } else if( vacio(F.descripcion.value) == false ) {
                alert("Por Favor, escribe la descripci�n de este almacen!")
                return false
        } else if( vacio(F.ctaContable.value) == false ) {
                alert("Por Favor, escoje la cuenta mayor!")
                return false
        }
}

</script>


<script language=javascript>
function ventanaSecundaria6 (URL){
   window.open(URL,"ventana6","width=600,height=300,scrollbars=YES")
}
</script>

<script language=javascript>
function ventanaSecundaria1 (URL){
   window.open(URL,"ventana1","width=600,height=400,scrollbars=YES")
}
</script>
<script language=javascript>
function ventanaSecundaria5 (URL){
   window.open(URL,"ventana5","width=700,height=600,scrollbars=YES")
}
</script>
<script language=javascript>
function ventanaSecundaria51 (URL){
   window.open(URL,"ventanaSecundaria51","width=800,height=600,scrollbars=YES")
}
</script>

<script language=javascript>
function ventanaSecundaria511 (URL){
   window.open(URL,"ventanaSecundaria511","width=800,height=600,scrollbars=YES")
}
</script>

<script language=javascript>
function ventanaSecundariaA (URL){
   window.open(URL,"ventanaSecundariaA","width=800,height=600,scrollbars=YES")
}
</script>

<script language=javascript>
function ventanaSecundariaA2 (URL){
   window.open(URL,"ventanaSecundariaA2","width=800,height=600,scrollbars=YES")
}
</script>

<script language=javascript>
function ventanaSecundariaA1 (URL){
   window.open(URL,"ventanaSecundariaA1","width=800,height=600,scrollbars=YES")
}
</script>


<script language=javascript>
function ventanaSecundaria5111(URL){
   window.open(URL,"ventanaSecundaria5111","width=800,height=600,scrollbars=YES")
}
</script>






<?php



if($_POST['fv'] and !$_POST['resumen'] ){
 $random=rand(1,900000000);

$q = "insert into contador
(
usuario,random)
values
('".$usuario."','".$random."')";
mysql_db_query($basedatos,$q);
echo mysql_error();

$sSQL7ab="SELECT *
FROM
contador
WHERE
usuario='".$usuario."'
and
random='".$random."'
order by keyConta DESC

";
$result7ab=mysql_db_query($basedatos,$sSQL7ab);
$myrow7ab = mysql_fetch_array($result7ab);
?>
<script>
//javascript:ventanaSecundaria511('despliegaxFV.php?numeroE=<?php echo $numeroE; ?>&nCuenta=<?php echo $nCuenta; ?>&paciente=<?php echo $_POST['paciente']; ?>&numeroConfirmacion=<?php echo $numeroConfirmacion; ?>&hora1=<?php echo $hora1; ?>&keyClientesInternos=<?php echo $myrow3['keyClientesInternos'];?>&random=<?php echo $myrow7ab['random'];?>&fechaInicial=<?php echo $_POST['fechaInicial'];?>&fechaFinal=<?php echo $_POST['fechaFinal'];?>');
//window.alert("Se genero el numero de reporte: <?php print $myrow7ab['random'];?>");

</script>
<?php
}
?>













<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<?php
$estilos= new muestraEstilos();
$estilos->styles();

?>
	<script src="/sima/js/scripts/autocomplete.js" type="text/javascript"></script>
	<link rel="stylesheet" href="/sima/js/stylesheets/autocomplete.css" type="text/css" />
</head>

<body>
    <div class="page_right">

 <h1 align="center" >RESUMEN DE BENEFICENCIAS X FOLIO DE VENTA </h1>

 <form id="form2" name="form2" method="post" >
   <div align="center"></div>
   <p align="center">
     <label></label>
     Escojer Fechas</p>




   <!--<table width="399" class="table-forma">-->
   <table width="399" class="table-template">



       <tr>
       <td width="267" scope="col"><div align="left">
         <input name="fechaInicial" type="text"  id="campo_fecha1" size="11" maxlength="11" readonly=""
		value="<?php
		 if($_POST['fechaInicial']){
		 echo $_POST['fechaInicial'];
		 } else {
		 echo $fecha1;
		 }
		 ?>"  />
       </div></td>
       <td width="132" scope="col"><div align="center">
         <input name="fechaFinal" type="text"  id="campo_fecha2" size="11" maxlength="11" readonly="readonly"
		value="<?php
		 if($_POST['fechaFinal']){
		 echo $_POST['fechaFinal'];
		 } else {
		 echo $fecha1;
		 }
		 ?>"  />
       </div></td>
     </tr>
     <tr>
       <td><div align="left">
         <input name="button" type="image" src="../imagenes/btns/fecha.png" id="lanzador1" value="..." />
       </div></td>
       <td><div align="center">
         <input name="button1" type="image" src="../imagenes/btns/fecha.png" id="lanzador2" value="..." />
       </div></td>
     </tr>
   </table>
   <!--<p>&nbsp;</p>-->









<input name="buscar" type="submit" src="../imagenes/btns/searchbutton.png"  id="buscar" value="buscar" />
         <label>
         </label>

   <!--<p>&nbsp;</p>-->
     <?php
	  if($_POST['buscar'] and $_POST['fechaInicial'] and $_POST['fechaFinal']){ ?>
   <!--<p align="center">&nbsp;</p>-->
   <p align="center">
<a href="javascript:ventanaSecundaria5111('../ventanas/imprimirBeneficencias.php?nombreCompleto=<?php echo $_POST['nombreCompleto'];?>&numMedico=<?php echo $_POST['numMedico'];?>
   &entidad=<?php echo $entidad;?>&fechaInicial=<?php echo $_POST['fechaInicial'];?>&fechaFinal=<?php echo $_POST['fechaFinal'];?>
   &factorReferencia=<?php echo $_POST['factorReferencia'];?>&seguro=<?php echo $_POST['seguro'];?>&nomSeguro=<?php  echo $_POST['nomSeguro'];?>
   &tipopaciente=<?php echo $_POST['tipopaciente'];?>&gpoProducto=<?php echo $_POST['gpoProducto'];?>')" >
Ver
</a>   </p>
  <?php }?>

 </form>

<p align="center">&nbsp;</p>
  <script type="text/javascript">
   Calendar.setup({
    inputField     :    "campo_fecha1",     // id del campo de texto
     ifFormat     :    "%Y-%m-%d",      // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador1"     // el id del bot�n que lanzar� el calendario
});
</script>
  <script type="text/javascript">
   Calendar.setup({
    inputField     :    "campo_fecha2",     // id del campo de texto
     ifFormat     :    "%Y-%m-%d",      // formato de la fecha que se escriba en el campo de texto
     button     :    "lanzador2"     // el id del bot�n que lanzar� el calendario
});
</script>

          <script>
		new Autocomplete("nombreCompleto", function() {
			this.setValue = function( id ) {
				document.getElementsByName("numMedico")[0].value = id;
			}

			// If the user modified the text but doesn't select any new item, then clean the hidden value.
			if ( this.isModified )
				this.setValue("");

			// return ; will abort current request, mainly used for validation.
			// For example: require at least 1 char if this request is not fired by search icon click
			if ( this.value.length < 4 && this.isNotClick )
				return ;

			// Replace .html to .php to get dynamic results.
			// .html is just a sample for you
			return "/../cargos/medicosx.php?entidad=<?php echo $entidad;?>&q=" + this.value;
			// return "completeEmpName.php?q=" + this.value;
		});
	</script>
    </div>
<?php
$mostrarFooter=new menus();
$mostrarFooter->footerTemplate($usuario,$entidad,$basedatos);
?>
</body>
</html>