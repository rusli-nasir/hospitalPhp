<?PHP 
require('/Constantes.php');
require("menuOperaciones.php"); ?>

<script language=javascript> 
function ventanaSecundaria1 (URL){ 
   window.open(URL,"ventana1","width=1024,height=900,scrollbars=YES") 
} 
</script> 
<script language=javascript> 
function ventanaSecundaria (URL){ 
   window.open(URL,"ventana","width=700,height=800,scrollbars=YES") 
} 
</script>


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
 <h1 >&nbsp;</h1>
 <h1 >Cat&aacute;logo de  Equipos de Sistemas

 </h1>
 <form id="form1" name="form1" method="post" action="">
   <p align="center">&nbsp;</p>
   <table width="479" class="table table-striped">
     <tr>
       <th width="98"  scope="col"><div align="left" ><span >C&oacute;digo </span></div></th>
       <th width="333"  scope="col"><div align="left" ><span >Descripci&oacute;n </span></div></th>
       <th width="34"  scope="col"><div align="left" >
         <div align="center"><span >Editar</span></div>
       </div></th>
     </tr>
     <tr >
       <?php
 $sSQL= "Select * From catEquipos where entidad='".$entidad."' order by descripcion ASC";
$result=mysql_db_query($basedatos,$sSQL); 
      
while($myrow = mysql_fetch_array($result)){
if($col){
$color = '#FFCCFF';
$col = "";
} else {
$color = '#FFFFFF';
$col = 1;
}
$C=$myrow['codigo'];
?>
       <td bgcolor="<?php echo $color?>" ><span >
         <label>
         <span ><?php echo $C?>         </span></label>
       </span></td>
       <td bgcolor="<?php echo $color?>" ><span ><?php echo $myrow['descripcion'];?></span></td>
       <td bgcolor="<?php echo $color?>" ><div align="center" ><a href="#"  
onclick="javascript:ventanaSecundaria20('ventanaCatalogoEM.php?almacen=<?php echo $_POST['almacenDestino2']; ?>&codigo=<?php echo $C; ?>')"><img src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/imagenes/editbtn.png" alt="" width="12" height="12" border="0" /></a></div></td>
     </tr>
     <?php }?>
   </table>
   <div align="center">
     <p>
       <input name="nuevo" type="button"  id="nuevo" value="Nuevo Equipo"
	  onclick="ventanaSecundaria1('ventanaCatalogoEM.php?almacen=<?php echo $_POST['almacenDestino2'];?>')" />
     </p>
   </div>
 </form>
 <p align="center">&nbsp;</p>
</body>
</html>
