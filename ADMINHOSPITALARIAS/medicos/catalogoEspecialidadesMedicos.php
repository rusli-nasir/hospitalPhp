<?PHP include("../../configuracion/administracionhospitalaria/inventarios/inventariosmenu.php"); ?>
<?php include('../../configuracion/funciones.php'); 
$ventana1='ventanaModificaEspecialidades.php';
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
function ventanaSecundaria1 (URL){ 
   window.open(URL,"ventana1","width=500,height=300,scrollbars=YES") 
} 
</script> 
<script language=javascript> 
function ventanaSecundaria (URL){ 
   window.open(URL,"ventana","width=700,height=600,scrollbars=YES") 
} 
</script>
<script language=javascript> 
function ventanaSecundaria10 (URL){ 
   window.open(URL,"ventana10","width=700,height=600,scrollbars=YES") 
} 
</script>
<?php 
if($_GET['tipoAlmacen'] AND $_GET['almacen']){

	if($_GET['inactiva']=="inactiva"){
$q = "UPDATE almacenes set 

		activo='I'
		WHERE entidad='".$entidad."' AND
		almacen='".$_GET['almacen']."'";
		mysql_db_query($basedatos,$q);
		echo mysql_error();
	} else {
$q = "UPDATE almacenes set 

		activo='A'
		WHERE entidad='".$entidad."' AND
		almacen='".$_GET['almacen']."'";
		mysql_db_query($basedatos,$q);
		echo mysql_error();
	}

$_POST['tipoAlmacen']=$_GET['tipoAlmacen'];

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
<title></title>
<style type="text/css">
<!--
.style7 {font-size: 9px}
.style11 {color: #FFFFFF; font-size: 10px; font-weight: bold; }
.style12 {font-size: 10px}
.Estilo24 {font-size: 10px}
.style71 {font-size: 9px}
.style71 {font-size: 9px}
.style71 {font-size: 9px}
body {
	background-image: url(../../imagenes/imagenesModulos/generalscreen.jpg);
	background-repeat: no-repeat;
}
.style72 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	color: #666666;
}
-->
</style>
</head>

<body>
 <h1 align="center" class="style72">Cat&aacute;logo de Especialidades </h1>
 <?php   

$sSQL= "Select * From especialidades where
entidad='".$entidad."'

order by subEspecialidad,descripcion ASC";

 
 if($sSQL){
$result=mysql_db_query($basedatos,$sSQL); 

?> 
 <form id="form2" name="form2" method="post" action="">
   <table width="537" border="0" align="center">
     <tr>
<th width="61" height="14" bgcolor="#660066" scope="col"><div align="left"><span class="style11">C&oacute;digo  </span></div></th>
       <th width="348" bgcolor="#660066" scope="col"><div align="left"><span class="style11">Descripci&oacute;n</span></div></th>
       <th width="55" bgcolor="#660066" class="style12" scope="col"><div align="left"><span class="style11">SubEspecialidad</span></div></th>
       <th width="55" bgcolor="#660066" class="style12" scope="col"><div align="left"><span class="style11">Editar</span></div></th>
     </tr>
     <tr>

       <?php	while($myrow = mysql_fetch_array($result)){
if($col){
$color = '#FFCCFF';
$col = "";
} else {
$color = '#FFFFFF';
$col = 1;
}
$A=$myrow['codigo'];
?>
       <td height="20" bgcolor="<?php echo $color?>" class="style12"><span class="Estilo24"><span class="style7">
         <?php echo $A?>
       </span></span></td>
       <td bgcolor="<?php echo $color?>" class="style12"><span class="Estilo24"><span class="style71"><?php echo $myrow['descripcion'];?></span></span></td>
       <td bgcolor="<?php echo $color;?>" class="style12"><span class="style71"><?php echo $myrow['subEspecialidad'];?></span></td>
       <?php if($_POST['tipoAlmacen']=='ap'){ ?>
       <?php } ?>
		
		
       <td bgcolor="<?php echo $color;?>" class="style12"><a href="#" onClick="ventanaSecundaria1('<?php echo $ventana1;?>?numMedico=<?php echo $myrow['id_medico']; ?>
		&amp;nCuenta=<?php echo $myrow['nCuenta']; ?>&amp;codigo=<?php echo $A; ?>&amp;seguro=<?php echo $_POST['seguro']; ?>&amp;numCliente=<?php echo $N?>')"><img src="/sima/imagenes/edit.jpg" alt="EDITAR A: <?php echo $myrow['descripcion'];?>" width="12" height="12" border="0" /></a></td>
     </tr>
     <?php }}?>
   </table>
   <p align="center">
     <label></label>
     <input name="nuevo" type="button" class="style71" id="nuevo" value="Nueva Especialidad"
	  onclick="ventanaSecundaria1('<?php echo $ventana1;?>')" />
   </p>
 </form>
 <p align="center">&nbsp;</p>
</body>
</html>