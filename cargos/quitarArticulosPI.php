<?php include(CONSTANT_PATH_CONFIGURACION."/ventanasEmergentes.php"); ?>
<?php
$numeroPaciente=$_GET['numeroE'];
$seguro=$_GET['seguro'];
$medico=$_GET['medico'];
$nCuenta=$_GET['nCuenta'];
?>

<script language="javascript" type="text/javascript">   

function vacio(q) {   
        for ( i = 0; i < q.length; i++ ) {   
                if ( q.charAt(i) != " " ) {   
                        return true   
                }   
        }   
        return false   
}   
  
//valida que el campo no este vacio y no tenga solo espacios en blanco   
function valida(F) {   
           
        if( vacio(F.escoje.value) == null ) {   
                alert("Por Favor, escoje como quieres agregar art�culos!")   
                return false   
        }            
}   
  
  
  
  
</script> 

<?php 



if($_POST['actualizar']){
$cantidad=$_POST['cantidad'];
$codigoArt=$_POST['codigoArt'];

for($i=0;$i<$_POST['bandera'];$i++){
if($cantidad[$i]){
$borrame = "update cargosCuentaPaciente 
set
cantidad='".$cantidad[$i]."',
statusCantidad='".$usuario."'
WHERE keyCAP ='".$codigoArt[$i]."'";
//mysql_db_query($basedatos,$borrame);
echo mysql_error();
}
}
$leyenda="Se actualizaron cantidades";
}









if($_POST['quitar']){
$codigo=$_POST['codigo'];

for($i=0;$i<$_POST['bandera'];$i++){
if($codigo[$i]){
$borrame = "update cargosCuentaPaciente 
set
status='cancelado',
statusCancelado='".$usuario."'
WHERE keyCAP ='".$codigo[$i]."'";
//mysql_db_query($basedatos,$borrame);
echo mysql_error();
}
}
$leyenda="Se removieron art�culos/Servicios";
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
.style11 {color: #FFFFFF; font-size: 10px; font-weight: bold; }
.style7 {font-size: 9px}
.Estilo24 {font-size: 10px}
.style15 {color: #0000FF}
-->
</style>
</head>

<body>
<p align="center">
  <label></label><label>
  </label> 
  <span class="style15"><?php echo $leyenda; ?></span></p>
<form id="form2" name="form2" method="post" action="" onSubmit="return valida(this);"><?php	

$sSQL= "SELECT 
* 
FROM cargosCuentaPaciente
WHERE
numeroE='".$numeroPaciente."'
and
nCuenta='".$nCuenta."'

";


if($numeroPaciente){
if($result=mysql_db_query($basedatos,$sSQL)){

?>
    <span class="Estilo24"><span class="style7">
    <input name="almacenCargo" type="hidden" id="almacenCargo" value="<?php echo $_POST['almacen']; ?>" />
    </span></span>
    <input name="nombrePaciente3" type="hidden" id="nombrePaciente3" value="<?php 
echo $nombrePaciente1;
	 ?>" />
    <input name="medico1" type="hidden" id="medico1" value="<?php echo $medico1; ?>" />
    <input name="tipoSeguro1" type="hidden" id="tipoSeguro1" value="<?php echo $seguro; ?>" />
    <input name="almacenP1" type="hidden" id="almacenP1" value="<?php echo $almacenPrincipal; ?>" />
    <input name="numPoliza1" type="hidden" id="numPoliza1" value="<?php echo $numPoliza; ?>" />
    <input name="nCuenta1" type="hidden" id="nCuenta1" value="<?php echo $nCuenta; ?>" />
    <table width="578" border="0" align="center" class="style7">
      <tr>
        <th width="41" height="19" bgcolor="#660066" scope="col"><div align="left"><span class="style11">Cantidad</span></div></th>
        <th width="49" bgcolor="#660066" scope="col"><span class="style11">C&oacute;digo</span></th>
        <th width="335" bgcolor="#660066" scope="col"><span class="style11">Descripci&oacute;n</span></th>
        <th width="100" bgcolor="#660066" scope="col"><span class="style11">Fecha/Hora</span></th>
        <th width="31" bgcolor="#660066" scope="col"><span class="style11">Quitar</span></th>
      </tr>
      <tr>
        <?php 

while($myrow = mysql_fetch_array($result)){ 
$bandera+=1;
$gpoProducto=$myrow['gpoProducto'];
$code1=$myrow['codProcedimiento'];

$sSQL7= "
	SELECT 
  *
FROM
articulosPrecioNivel
WHERE codigo = '".$code1."'";
$result7=mysql_db_query($basedatos,$sSQL7);
$myrow7 = mysql_fetch_array($result7);

//traigo descuento

$sSQL11= "
	SELECT 
  *
FROM
 articulos
WHERE 

codigo = '".$code1."'
";
$result11=mysql_db_query($basedatos,$sSQL11);
$myrow11 = mysql_fetch_array($result11);

//cierro descuento

if($col){
$color = '#FFCCFF';
$col = "";
} else {
$color = '#FFFFFF';
$col = 1;
}
$sSQL4= "
	SELECT 
  *
FROM
existencias
WHERE codigo = '".$code1."'
and 
(almacen='HFARVP' or almacen='HFAR' )
";
$result4=mysql_db_query($basedatos,$sSQL4);
$myrow4 = mysql_fetch_array($result4);

?>
        <td height="24" bgcolor="<?php echo $color;?>" class="Estilo24">
          <label></label>
       <input name="cantidad[]" type="text" class="style7" id="cantidad[]" value="<?php if($myrow['cantidad']){
echo $myrow['cantidad'];
} else {
echo "N/A";
}?>" size="4" maxlength="4" />
</td>
        <td bgcolor="<?php echo $color;?>" class="Estilo24"><?php echo $myrow['codProcedimiento']; ?>
        <input name="codigoArt[]" type="hidden" id="codigoArt[]" value="<?php  echo $myrow['keyCAP']; ?>" /></td>
        <td bgcolor="<?php echo $color;?>" class="Estilo24"><?php echo $myrow11['descripcion']; ?></td>
        <td bgcolor="<?php echo $color;?>" class="Estilo24"><div align="center">
          <?php 
echo $myrow['fecha1']."/".$myrow['hora1'];
?>
        </div></td>
        <td bgcolor="<?php echo $color;?>" class="Estilo24"><label>
          <input name="codigo[]" type="checkbox" id="codigo[]" value="<?php echo $myrow['keyCAP']; ?>" />
        </label></td>
      </tr>
      <?php }}?>
  </table>
    <p align="center">
      <label>
      <input name="actualizar" type="submit" class="Estilo24" id="actualizar" value="Actualizar Cantidad" onclick="if(confirm('Esta seguro que desea actualizar existencias-?') == false){return false;}" />
      <input name="quitar" type="submit" class="Estilo24" id="quitar" value="Quitar Art&iacute;culos" onClick="if(confirm('Esta seguro que eliminar el art�culo/servicio?') == false){return false;}" />
      </label>
    </p>
    <?php 
	
	
	} ?>
    <input name="gpoProducto" type="hidden" id="numPaciente2" value="<?php echo $gpoProducto; ?>" />
    <input name="numeroMedico1" type="hidden" id="numeroMedico1" value="<?php echo $numeroMedico; ?>" />
    <input name="nombreDelPaciente2" type="hidden" id="nombreDelPaciente2" value="<?php echo $nombreDelPaciente; ?>" />
    <input name="extension2" type="hidden" id="extension2" value="<?php echo $extension; ?>" />
    <input name="segu1" type="hidden" id="segu1" value="<?php echo $segu; ?>" />
    <input name="bandera" type="hidden" id="numPaciente22" value="<?php echo $bandera; ?>" />
</form>
  <p></p>
  
  
</body>
</html>
