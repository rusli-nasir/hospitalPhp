<?PHP 
require('/Constantes.php');
include(CONSTANT_PATH_CONFIGURACION."/administracionhospitalaria/inventarios/inventariosmenu.php");?>
<?php include(CONSTANT_PATH_CONFIGURACION.'/clases/validaModulos.php'); ?>


<?php $articulo = $_POST['nomArticulo']; ?>
          <?php


?>
<?php
$hoy = date("d/m/Y");
$hora = date("g:i a");

if($_POST['almacen1']){
$alm = $_POST['almacen1'];
$alma = $_POST['almacen1'];
} else if($_POST['almacen2']) {
$alm = $_POST['almacen2'];
$alma = $_POST['almacen2'];
}
if($_POST['anaquel']){
$ana = $_POST['anaquel'];
} else if($_POST['anaquel1']) {
$ana = $_POST['anaquel1'];
}

if($_POST['nomArticulo']){
$nombredeArticulo = $_POST['nomArticulo'];
} else if($_POST['nomArticulo1']) {
$nombredeArticulo = $_POST['nomArticulo1'];
}
if($_POST['actualizar']){
$sSQL1= "Select * From existencias WHERE entidad='".$entidad."' AND
codigo = '".$_POST['codigo1']."' AND almacen = '".$_POST['almacen']."'";
$result1=mysql_db_query($basedatos,$sSQL1);
$myrow1 = mysql_fetch_array($result1);
//$almacenes = $myrow1['almacen'];

for($i=0;$i<=$_POST['pasoBandera'];$i++){
$existencias = $_POST['existencias'];

if($coder= $_POST['codigoAlfa'] AND $almacen=$_POST['almacen']){

 $q = "UPDATE existencias set 
almacen='".$almacen[$i-1]."', 
fechaA='".$hoy."', 
hora='".$hora."', 
existencia='".$existencias[$i-1]."'
WHERE 
codigo='".$coder[$i-1]."'
AND 
almacen = '".$almacen[$i-1]."'
";

//mysql_db_query($basedatos,$q);
echo mysql_error();
}}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
<!--
.style7 {font-size: 9px}
.style11 {color: #FFFFFF; font-size: 10px; font-weight: bold; }
.style12 {font-size: 10px}
.Estilo3 {font-size: 16px; font-family: "Times New Roman", Times, serif; color: #FFFFFF; font-weight: bold; }
.style13 {
	color: #0000FF;
	font-weight: bold;
}
.Estilo24 {font-size: 10px}
-->
</style>
</head>
<body>
<p align="center">Asignar anaquel a art&iacute;culo </p>
<form id="form1" name="form1" method="post" action="">
  <table width="523" border="0" align="center">
    <tr>
      <th width="28" bgcolor="#660066" class="style11" scope="col"><input name="escoje" type="radio" value="porarticulo" checked="checked" /></th>
      <th width="182" bgcolor="#660066" class="style11" scope="col"><div align="left"><span class="style12">Escribe el nombre del art&iacute;culo </span></div></th>
      <th width="291" bgcolor="#660066" class="style11" scope="col"><div align="left"><span class="style12">
        <input name="nomArticulo" type="text" class="style12" id="nomArticulo" value="<?php echo $nombredeArticulo; ?>" size="60" />
      </span></div></th>
    </tr>
    <tr>
      <th scope="col">&nbsp;</th>
      <th class="style7" scope="col"><div align="left">Almacen</div></th>
      <th class="style7" scope="col"><div align="left"><span class="style7">
        <?php require(CONSTANT_PATH_CONFIGURACION."/componentes/comboAlmacen.php"); 
$comboAlmacen=new comboAlmacen();
$comboAlmacen->despliegaAlmacen($entidad,'style7','almacen',$almacenDestino,$basedatos)
?>
      </span></div></th>
    </tr>
    <tr>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col"><label>
        <div align="left">
          <input name="buscar" type="submit" class="style12" id="buscar" value="buscar" />
        </div>
      </label></th>
    </tr>
  </table>
</form>
   <label>&nbsp;</label>
   <?php	
	  $articulo = $_POST['nomArticulo'];
if($_POST['buscar'] AND $_POST['nomArticulo']){
if($_POST['escoje'] =="porarticulo" ){
 
$sSQL= "
SELECT * FROM articulos,existencias

 WHERE 
 articulos.entidad='".$entidad."' AND
 articulos.descripcion LIKE '%$articulo%' 
and
(articulos.um<>'s' or articulos.um<>'S')
and
articulos.codigo=existencias.codigo
and
existencias.almacen ='".$_POST['almacenDestino']."'
 order by articulos.descripcion ASC";

 } else if($_POST['escoje'] =="porcodigo"){
 $sSQL= "SELECT 
*
FROM
  `articulos`
  INNER JOIN `existencias` ON (`articulos`.`codigo` = `existencias`.`codigo`)

WHERE
articulos.entidad='".$entidad."' AND
articulos.codigo = '".$_POST['porcodigo']."' ";
}
if($result=mysql_db_query($basedatos,$sSQL)){
echo mysql_error();

?>
   <form id="form2" name="form2" method="post" action="articulos-anaquel2.php">
     <table width="572" border="0" align="center">
       <tr>
         <th width="99" bgcolor="#660066" scope="col"><span class="style11">C&oacute;digo</span></th>
         <th width="405" bgcolor="#660066" scope="col"><span class="style11">Descripci&oacute;n</span></th>
         <th width="54" bgcolor="#660066" scope="col"><span class="style11">Costo</span></th>
       </tr>
       <tr>
         <?php
while($myrow = mysql_fetch_array($result)){
$code = $myrow['codigo'];
 $sSQL5="SELECT *
FROM
  `precioArticulos`
WHERE
codigo = '".$code."'  
  ";
  $result5=mysql_db_query($basedatos,$sSQL5);
  $myrow5 = mysql_fetch_array($result5);
  if($col){
$color = '#FFCCFF';
$col = "";
} else {
$color = '#FFFFFF';
$col = 1;
}
$C=$myrow['codigo'];
?>
         <td bgcolor="<?php echo $color?>" class="style12"><span class="style7">
           <label>
           <input name="codigo" type="submit" class="style12" value="<?php echo $C?>" readonly=""/>
           </label>
         </span></td>
         <td bgcolor="<?php echo $color?>" class="style12"><span class="style7"><?php echo $myrow['descripcion']; ?>
           <input name="almacen" type="hidden" id="almacen" value="<?php echo $_POST['almacen1']; ?>" />
           <input name="cod" type="hidden" id="cod" />
         </span></td>
         <td bgcolor="<?php echo $color?>" class="style12"><span class="style7">
           <?php 
	  if($myrow5['costo']){
	  echo number_format($myrow5['costo'],"2");
	  } else {
	  echo "N/A";
	  }
	  ?>
         </span></td>
       </tr>
       <?php }}}?>
     </table>
</form>
<p>&nbsp;</p>
</body>
</html>