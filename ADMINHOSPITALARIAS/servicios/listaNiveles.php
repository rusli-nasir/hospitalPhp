<?PHP 
require("/Constantes.php");
include(CONSTANT_PATH_CONFIGURACION."/administracionhospitalaria/inventarios/inventariosmenu.php"); ?>
<?php

$_POST['codigo']=$_GET['codigo'];

?>
<?php 
if($_POST['nuevo']){
$_POST['usuario']="";
$leyenda = "Ingrese los datos correctamente";
}
//actualizar ******************************************************************************************************


if($_POST['actualizar'] AND $_POST['codigo'] ){ 
//********abro lista

//********cierro lista
//if($myrow1['usuario'] !=$_POST['usuario']){ //checo que no haya un usuario igual
//******************** INSERTAR Y ACTUALIZAR ************************************
if($agregar = $_POST["codAlmacen"]){ //paso arreglo de agregar modulos a agregar
foreach($agregar as $i => $agregar_articulo){
$sSQL3= "Select distinct * From existencias WHERE codigo = '".$_POST['codigo']."'
AND almacen = '".$agregar[$i]."'";
$result3=mysql_db_query($basedatos,$sSQL3);
$myrow3 = mysql_fetch_array($result3);
if($myrow3['codigo']!= $_POST['codigo'] AND $agregar[$i] != $myrow3['almacen']){
$agrega = "INSERT INTO existencias (
codigo,almacen
) values (
'".$_POST['codigo']."',
'".$agregar[$i]."'
)";
mysql_db_query($basedatos,$agrega);
echo mysql_error();
$leyenda = "Se ingres� el almac�n para el art�culo: ".$_POST['codigo'];
}}}
//*****************cierro INSERTAR Y ACTUALIZAR **********************************
/* } else {
ya_existe();
$leyenda = "EL  USUARIO QUE ESCOGISTE YA ESTA EN EXISTENCIA..!!!";
}  *///cierro verificacion de existencia de usuario
} else if($_POST['actualizar']){
$leyenda = "Te Faltan Campos por Rellenar..!!!";
}
//****************************************************************************************************************************

if($_POST['borrar'] AND $_POST['codigo']){
if($quitar = $_POST['quitar']){
foreach($quitar as $is => $quitar_articulo){
$borrame = "DELETE FROM existencias WHERE codigo ='".$_POST['codigo']."' 
AND almacen = '".$quitar[$is]."' ";
mysql_db_query($basedatos,$borrame);
echo mysql_error();
/* echo '<META HTTP-EQUIV="Refresh"
      CONTENT="0; URL=listaUsuarios.php">';
exit;
 */
}$leyenda = "Se elimin� el almac�n ".$quitar[$i];}} else if($_POST['borrar'] AND !$_POST['usuario']){
$leyenda = "Por favor, escoja el nombre de almac�n que desee quitar.!";
}





/* $nCliente1= $_POST['nCliente'];
if(!$_POST['actualizar']){
$s = "select max(nCLiente) as maximo from usuarios";
$r1=mysql_db_query($basedatos,$s);
$m = mysql_fetch_array($r1);
$nCliente = $m['maximo'];
$nCliente+=1;
}
if($_POST['actualizar']){
$nCliente = $_POST['tope']+1;
$password = $_POST['pwd1'];
if($_POST['actualizar'] AND $nCliente AND $_POST['nombre']
AND $_POST['usuario'] AND $password
AND $_POST['aPaterno'] AND $_POST['aMaterno']
){

echo $sSQL5= "Select distinct * From usuarios-modulos WHERE usuario = '".$_POST['usuario']."'";
$result5=mysql_db_query($basedatos,$sSQL5);
$myrow5 = mysql_fetch_array($result5);

if($agregar = $_POST["codModulo"]){
foreach($agregar as $i => $agregar_articulo){
if($myrow5['usuario']== $_POST['usuario']){
$q = "UPDATE usuarios-modulos set 
modulo='".$agregar[$i]."'
WHERE 
usuario='".$_POST['usuario']."' AND modulo='".$agregar[$i]."'
";
mysql_db_query($basedatos,$q);
$leyenda = "Se actualiz� el usuario: ".$_POST['usuario'];
echo mysql_error();
} else {
$agrega = "INSERT INTO usuarios-modulos (
usuario,modulo
) values (
$nCliente,
'".$_POST['usuario']."'
'".$agregar[$i]."'
)";
mysql_db_query($basedatos,$agrega);
$leyenda = "Se insert� el usuario: ".$_POST['usuario'];
echo mysql_error();
//$nCliente-=1;
//echo '<META HTTP-EQUIV="Refresh"
//      CONTENT="0; URL=listaUsuarios.php">';

}}
}}
} else if($_POST['pwd1'] !=$_POST['pwd2'] ){
no_coinciden();
}


if($_POST['borrar'] AND $_POST['nCliente']){
$borrame = "DELETE FROM usuarios WHERE nCliente ='".$_POST['nCliente']."'";
mysql_db_query($basedatos,$borrame);
echo mysql_error();
$leyenda = "Se elimin� el usuario: ".$_POST['usuario'];
echo '<META HTTP-EQUIV="Refresh"
      CONTENT="0; URL=listaUsuarios.php">';
exit;
}


if($_POST['borrar'] || $_POST['actualizar']){
$sSQL1= "Select distinct * From usuarios WHERE nCliente = '".$nCliente."'";
$result1=mysql_db_query($basedatos,$sSQL1);
$myrow1 = mysql_fetch_array($result1);
}
*/
if($_POST['usuario']){
$sSQL1= "Select distinct * From usuarios WHERE usuario = '".$_POST['usuario']."'";
$result1=mysql_db_query($basedatos,$sSQL1);
$myrow1 = mysql_fetch_array($result1);
} 


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<style type="text/css">
<!--
.style12 {font-size: 10px}
.style13 {color: #FFFFFF}
.style11 {color: #FFFFFF; font-size: 10px; font-weight: bold; }
.style7 {font-size: 9px}
.style14 {color: #003366}
-->
</style>
</head>

<body>
<p align="center">
  <label></label><label>
  </label>
</p>
<table width="323" border="1" align="center" class="style12">

    <tr>
      <th colspan="2" bgcolor="#660066" scope="col"><strong><span class="style13">PRECIOS EN NIVELES </span></strong></th>
    </tr>
    <tr>
      <th scope="col">C&oacute;digo: </th>
      <th width="152" scope="col"><label>
      <input name="codigo" type="text" class="style12" id="codigo" readonly="" value="<?php echo $_POST['codigo']; ?>">
      </label></th>
    </tr>
</table>
  <p>
 
  </p>
  
  
  <table width="346" border="1" align="center">
    <tr>
      <th width="103" bgcolor="#660066" scope="col"><span class="style11">C&oacute;digo del Almac&eacute;n </span></th>
      <th width="151" bgcolor="#660066" scope="col"><span class="style11">Agregar Almacenes </span></th>
      <th width="70" bgcolor="#660066" scope="col"><span class="style11">Agregar
        <label><input style="border:inset 1px;" name="allbox" type="checkbox" value="Check All" onClick="checkUncheckAll(this);"/> 
		</label>
      </span></th>
    </tr>
    <tr>
      <?php   
 $sSQL= "Select distinct * From almacenes order by almacen ASC";
$result=mysql_db_query($basedatos,$sSQL); 
?>
      <?php	while($myrow = mysql_fetch_array($result)){
$bandera += 1;
$codigoModulo = $myrow['codModulo'];
if($col){
$color = '#FFCCFF';
$col = "";
} else {
$color = '#FFFFFF';
$col = 1;
}
?>
      <td bgcolor="<?php echo $color?>" class="style12"><div align="center"><span class="style7"> </span></div>
          <span class="style7">
            <label></label>
          </span>
        <div align="center"><span class="style7"><?php echo $myrow['almacen'];?></span></div></td>
      <td bgcolor="<?php echo $color?>" class="style12"><span class="style7"><?php echo $myrow['descripcion'];?></span>
          <input name="pasoBandera" type="hidden" id="pasoBandera" value="<?php echo $bandera; ?>" />
               <input name="modes[]" type="hidden" id="modes[]" value="<?php echo $myrow['almacen']; ?>" /></td>
      <td bgcolor="<?php echo $color?>" class="style12"><label>
          <div align="center">
                   
            <input name="codAlmacen[]" type="checkbox" class="style12" id="codAlmacen[]" 
		value="<?php 
		echo $myrow['almacen'];
		?>" onClick="CheckCheckAll(document.trackunread);"/>
          </div>
        </label></td>
    </tr>
    <?php }?>
</table>
  <p align="center">
  
    <input name="actualizar" type="submit" class="style12" id="actualizar" value="Precios en Almacenes" />
    <label></label>
  </p>
  <p>
    <?php //*********ANAQUELES
	   $sSQL8= "Select distinct * From existencias WHERE codigo ='".$_POST['codigo']."' ORDER BY 
	   almacen ASC";
$result8=mysql_db_query($basedatos,$sSQL8);
echo mysql_error();


	  ?>
  </p>
  <hr />
  <form id="form1" name="form1" method="post" action="">
    <table width="305" border="1" align="center" class="style12">
      <tr>
        <th width="239" bgcolor="#660066" scope="col"><strong><span class="style13">Art&iacute;culos en Almacenes ya agregados </span></strong></th>
        <th width="50" bgcolor="#660066" scope="col"><p class="style11">Quitar
        </p>
        </th>
      </tr>
      
	  <tr>
	  <?php while($myrow8 = mysql_fetch_array($result8)){ 
	 if($col){
$color = '#FFCCFF';
$col = "";
} else {
$color = '#FFFFFF';
$col = 1;
} 
	  ?>
        <th scope="col" bgcolor="<?php echo $color?>"><label><span class="style7">
		<?php  $alma=$myrow8['almacen'];
		$sSQL10= "Select distinct * From almacenes WHERE almacen = '".$alma."'";
$result10=mysql_db_query($basedatos,$sSQL10);
$myrow10 = mysql_fetch_array($result10);
echo $myrow10['descripcion']." || ".$myrow10['almacen'];
		?></span></label></th>
        <th scope="col" bgcolor="<?php echo $color?>"><input name="quitar[]" type="checkbox" class="style12" id="quitar[]" 
		value="<?php 
		echo $myrow8['almacen'];
		
		?>" /></th>
      </tr>  <?php }?>
    </table>
    <div align="center">
    
      <input name="borrar" type="submit" class="style12" id="borrar" value="Eliminar/Borrar" />
    </div>
   
<p align="center">&nbsp;</p>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
