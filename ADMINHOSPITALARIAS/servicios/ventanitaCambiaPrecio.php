<?php



if($_POST['actualizar'] AND $_POST['particular']>-1 AND $_POST['aseguradora']>-1){





if($_GET['keyPA']){


  


$q = "UPDATE articulosPrecioNivel set 
nivel1='".$_POST['particular']."', 
nivel3='".$_POST['aseguradora']."', 
usuario='".$usuario."'
WHERE 
keyPA='".$_GET['keyPA']."'   or codigo='".$_GET['codigo']."' ";
mysql_db_query($basedatos,$q);
echo mysql_error();
} 

echo $leyenda="Se actualizaron precios";
?>
<script language="JavaScript" type="text/javascript">
  <!--
window.opener.document.forms["form2"].submit();
    window.close();
  // -->
</script>



<?php
}





?>
<?php
$estilos= new muestraEstilos();
$estilos->styles();

?>








</head>


<?php  
$sSQL6a="SELECT nivel1,nivel3
FROM
`articulosPrecioNivel`
WHERE
keyPA = '".$_GET['keyPA']."' ";
  $result6a=mysql_db_query($basedatos,$sSQL6a);
  $myrow6a = mysql_fetch_array($result6a);
  
?>

<?php if($myrow6a['nivel1']){ ?>

<form name="form1" method="post" >
  <p align="center">ACTUALIZAR PRECIOS</p>
  <p align="center">[TODOS ALMACENES  QUE TIENEN PRECIO SOLAMENTE] </p>
  <table width="274" border="0" align="center" class="style7">
    <tr>
	<?php 
	if($_POST['codigo']){
	$code=$_POST['codigo'];
	} else {
	$code=$_GET['codigo'];
	}
	
$sSQL15="SELECT descripcion,generico
FROM
articulos
WHERE
keyPA = '".$_GET['keyPA']."'";
  $result15=mysql_db_query($basedatos,$sSQL15);
  $myrow15 = mysql_fetch_array($result15);

$sSQL6="SELECT nivel1,nivel3
FROM
`articulosPrecioNivel`
WHERE
keyPA = '".$_GET['keyPA']."' order by keyAPN DESC ";
  $result6=mysql_db_query($basedatos,$sSQL6);
  $myrow6 = mysql_fetch_array($result6);

  $nivel1=$myrow6['nivel1'];
  $nivel3=$myrow6['nivel3'];
  
$sSQL6a="SELECT nivel1,nivel3
FROM
`articulosPrecioNivel`
WHERE
keyPA = '".$_GET['keyPA']."' and nivel1>'".$nivel1."'";
  $result6a=mysql_db_query($basedatos,$sSQL6a);
  $myrow6a = mysql_fetch_array($result6a);
  
  if($myrow6a['nivel1'] and $myrow6a['nivel3']){
  $nivel1=$myrow6a['nivel1'];
  $nivel3=$myrow6a['nivel3'];
  }
  
  
  ?>
      <td colspan="3" bgcolor="#660066"><div align="center" class="blancomid"><?php 

	  
	  echo $myrow15['descripcion']?></div></td>
    </tr>
	
	
	
<tr>
      <td width="25" bgcolor="#FFCCFF">&nbsp;</td>
      <td width="110" bgcolor="#FFCCFF"><div align="left" class="normalmid">Particular</div></td>
      <td width="125" bgcolor="#FFCCFF"><input name="particular" type="text" class="camposmid" value="" /></td>
    </tr>
    <tr>
      <td><div align="left"></div></td>
      <td><div align="left" class="normalmid">Compa&ntilde;&iacute;a / Aseguradora </div></td>
      <td><input name="aseguradora"  value="" type="text" class="camposmid">        &nbsp;</td>
    </tr>
  </table>
  <p align="center">
    <label>
    <input name="actualizar" type="submit" src="../../imagenes/btns/refresh.png" id="actualizar" value="Ajustar">
    </label>
    <input type="hidden" name="codigo" value="<?php echo $_GET['codigo'];?>">
	<input type="hidden" name="almacen" value="<?php echo $_GET['almacen'];?>">
	<input type="hidden" name="almacenPrincipal" value="<?php echo $_GET['almacenPrincipal'];?>">
    <input name="keyAPN" type="hidden" id="keyAPN" value="<?php echo $_GET['keyAPN'];?>" />
    <input name="opcion" type="hidden" class="style12" id="opcion" value="<?php echo $_POST['opcion'];?>" />
  </p>
  
  <?php } else{ ?>
  
 <blink>SE NECESITA QUE AL MENOS ALGUN ALMACEN TENGA PRECIOS ESTABLECIDOS </blink>
  
  <?php } ?>
</form>
