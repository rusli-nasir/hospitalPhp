<?php include("../configuracion/ventanasEmergentes.php"); ?>
<?php include("../configuracion/funciones.php"); 
$numCliente=$_GET['numCliente'];
$seguro=$_GET['seguro'];
$medico=$_GET['medico'];
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
if($_POST['actualizar'] and $_POST['costo']){

$costo=$_POST['costo'];
$keyConvenios=$_POST['keyConvenios'];
for($i=0;$i<=$_POST['flag'];$i++){

 $sql="Update convenios
set
costo = '".$costo[$i]."', 
usuario='".$usuario."'
where keyConvenios='".$keyConvenios[$i]."'
";
mysql_db_query($basedatos,$sql);
echo mysql_error();

}
 $leyenda='Se actualizaron Registros...';
}
?>





<?php 

if(!$_POST['actualizar'] and $_POST['keyConvenios'] and $_POST['eliminar']){

$keyConvenios=$_POST['keyConvenios'];


for($i=0;$i<$_POST['flag'];$i++){

if($keyConvenios[$i]){
$borrame = "DELETE FROM convenios WHERE keyConvenios='".$keyConvenios[$i]."'";
mysql_db_query($basedatos,$borrame);
echo mysql_error();
}

}
echo "Se eliminaron convenios";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<?php
$estilos=new muestraEstilos();
$estilos->styles();
?>
</head>

<body>
<p align="center">
  <label></label><label>
  </label> 
<span >
<?php echo $_POST['almacenDestino'];
$sSQL23= "Select * From clientes WHERE numCliente ='".$numCliente."'";
$result23=mysql_db_query($basedatos,$sSQL23);
$rNombre23 = mysql_fetch_array($result23); 
echo $nombreSeguro=$rNombre23['nomCliente'].'</br>';

?> </span></p>
<form id="form2" name="form2" method="post" action="" >
    <p align="center" ><?php echo $leyenda; ?>DESCUENTOS x CONVENIO </p>
>
    <table width="586" class="table table-striped">
      <tr >
        <th width="76"  scope="col"><div align="left"><span >C&oacute;digo</span></div></th>
        <th width="96"  scope="col"><div align="left"><span >Descripci&oacute;n</span></div></th>
        <th width="79"  scope="col"><div align="left"><span >gpoProducto</span></div></th>
        <th width="106"  scope="col"><div align="left"><span >Incluye Referidos</span></div></th>
        <th width="43"  scope="col"><div align="left"><span >Depto.</span></div></th>
        <th width="26"  scope="col"><div align="left"><span >%  </span></div></th>
        <th width="51"  scope="col"><div align="left"><span >F. Inicial</span></div></th>
        <th width="50"  scope="col"><div align="left"><span >F. Final </span></div></th>
        <th width="59"  scope="col"><div align="left"><span >Elimina</span></div></th>
      </tr>
      <tr>
<?php	




 $sSQL= "SELECT 
 *
FROM
  convenios
   WHERE 
   entidad='".$entidad."'
   and
tipoConvenio='descuentoConvenio'
and

numCliente = '".$_GET['numCliente']."'


 ";
$result=mysql_db_query($basedatos,$sSQL);

while($myrow = mysql_fetch_array($result)){ 
$bandera+=1;




if($myrow['tipoConvenio']=='cantidad'){
$codigo=$myrow['codigo'];
$checaModuloScript2= "Select descripcion from articulos WHERE codigo = '".$codigo."' ";
$checaModuloScript24= "Select descripcion from almacenes WHERE almacen = '".$myrow['departamento']."' ";
$resScript24=mysql_db_query($basedatos,$checaModuloScript24);
$resulScripModulo24 = mysql_fetch_array($resScript24);
$descripcionAlmacen=$resulScripModulo24['descripcion'];

$resScript2=mysql_db_query($basedatos,$checaModuloScript2);
$resulScripModulo2 = mysql_fetch_array($resScript2);
$descripcion=$resulScripModulo2['descripcion'];
$descripcion=$descripcion.' ['.$descripcionAlmacen.']';
echo mysql_error();
} else if($myrow['tipoConvenio']=='grupoProducto') {

$codigo=$myrow['gpoProducto'];
$checaModuloScript2= "Select descripcionGP from gpoProductos WHERE codigoGP = '".$codigo."' ";
$resScript2=mysql_db_query($basedatos,$checaModuloScript2);
$resulScripModulo2 = mysql_fetch_array($resScript2);
$descripcion=$resulScripModulo2['descripcionGP'];
} else {
$descripcion='Convenio Global';
}

if($col){
$color = '#FFCCFF';
$col = "";
} else {
$color = '#FFFFFF';
$col = 1;
}
?>
      <td height="24" bgcolor="<?php echo $color?>" ><span >
          <label> <span >
          <?php 
	
		  $C=$myrow['codigo'];?>
       
		  </span>
          <?php echo $C?>          </label>
		  
		  
		  <?php //echo $myrow['keyConvenios']; ?>
          <input name="keyConvenios[]" type="hidden" id="keyConvenios[]"  value="<?php echo $myrow['keyConvenios']; ?>" />
        </span></td>
        <td bgcolor="<?php echo $color?>" ><span >
                <?php 
					echo 'Descuentos x Convenios';
		?>
        </span></td>
        <td bgcolor="<?php echo $color?>" >
		<span >
          <?php echo $myrow['gpoProducto'];?>
        </span></td>
        <td bgcolor="<?php echo $color?>"><span ><?php 
		if($myrow['incluirReferidos']){ 
		echo $myrow['incluirReferidos'];
		} else {
		echo '---';
		}
		?></span></td>
        <td bgcolor="<?php echo $color?>" ><span >
          <?php 
if($myrow['departamento']=='*'){
echo $myrow['departamento']." [Todos] ";
} else {
echo "---";
}
?>
        </span></td>
        <td bgcolor="<?php echo $color?>" ><span >
   
          <input name="costo[]" type="text"  id="costo[]"  value="<?php 
if($myrow['costo']){
echo $myrow['costo'];
} else {
echo '0';
}
?>" size="3" maxlength="3"
<?php 
if($myrow['cantidadoPorcentaje']=='no'){
echo 'readonly=""';
}
?>
/>
         
        </span></td>
        <td bgcolor="<?php echo $color?>" ><span >
          <?php 
	  echo cambia_a_normal($myrow['fechaInicial']);
	 // echo $myrow2['existencias'];
	 
	  ?>
        </span></td>
        <td bgcolor="<?php echo $color?>" ><label><span ><?php echo cambia_a_normal($myrow['fechaFinal'],2);
	  ?>
     
        </span></label></td>
        <td bgcolor="<?php echo $color?>" >
		
		<input name="keyConvenios[]" type="checkbox" id="keyConvenios[]" value="<?php echo $myrow['keyConvenios']; ?>" /></td>
      </tr>
      <?php  
	  $bandera+='1';
	  }  //cierra while
	  ?>
  </table>

<p align="center"><em> 
  
  
<?php if($bandera){ ?>Se encontraron <?php echo $bandera; ?> Registros <?php 
	}else{
	echo "No se encontraron registros..!";
	}
	?></em></p>





    <div align="center">

      <input name="almacenDestino" type="hidden" id="almacenDestino"  value="<?php echo $_POST['almacenDestino']; ?>" />
	 
	  
	  

	  <input name="almacenDestino1" type="hidden" id="almacenDestino1"  value="<?php echo $_POST['almacenDestino1']; ?>" />

	  

	  <input name="search" type="hidden" id="search"  value="search" />

	  
      <input name="flag" type="hidden"  value="<?php echo $bandera; ?>" />
      <?php if($bandera>=1){ ?>
      <input name="actualizar" type="submit"  id="actualiza" value="Actualizar" />
      <input name="eliminar" type="submit"  id="eliminar" value="Eliminar art&iacute;culos" />
	  <?php } ?>
   
    </div>
</form>
  <p></p>
  
  
</body>
</html>
