<?php //require("menuOperaciones.php");
require("/Constantes.php");
require(CONSTANT_PATH_CONFIGURACION."/ventanasEmergentes.php");
require(CONSTANT_PATH_CONFIGURACION.'/funciones.php');

$mostrarmenu=new menus();
$mostrarmenu->menuTemplate($_GET['warehouse'],$_GET['datawarehouse'],$rutasalir,$rutapasswd,$usuario,$entidad,$rutamenuprincipal,'principal',$rutaimagen,$basedatos);

?>
<?php 
$imagen='ordencompra.jpg';
$ventana1='../ventanas/ventanaOCSF.php';
$ventana11='../ventanas/despliegaOrdenes.php';
//include("/configuracion/formas/ordenCompra.php"); 
?>


<?php  
if($_GET['keyCO'] AND $_GET['delete']=='si'){

    
    
    
        
  


	if($_GET['delete']=="si"){

            
$sSQL12= "
	SELECT *
FROM
    compras

WHERE keyCO='".$_GET['keyCO']."'";


$result12=mysql_db_query($basedatos,$sSQL12);
$myrow12 = mysql_fetch_array($result12);             
            
            
            if($myrow12['status']!='sent' and $myrow12['keyCO']!=NULL){
            $q = "DELETE FROM compras 

		
		WHERE keyCO='".$_GET['keyCO']."'";
		mysql_db_query($basedatos,$q);
		echo mysql_error();
                
                
                
        $q = "DELETE FROM OC 

		
		WHERE entidad='".$entidad."' and
numFactura='".$myrow12['factura']."'";
		mysql_db_query($basedatos,$q);
		echo mysql_error();
            }
	} 


}

                
?>
<script>

var win = null;
function nueva(mypage,myname,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings =
'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable'
win = window.open(mypage,myname,settings)
if(win.window.focus){win.window.focus();}
}

</script>

 <div class="page_right">
  <!--<table width="37%" class="table-forma">-->
  <table width="37%" class="table-template">
      <br></br>
    <tr valign="middle">
      <td width="34%"><div align="center">
        <input onMouseOver="Tip('<div class=&quot;estilo25&quot;><?php echo 'Presiona aqui para generar una Orden de Compra';?></div>')" onMouseOut="UnTip()" name="nuevo" 
		type="button"   id="nuevo" value="Nuevo" src="/sima/imagenes/btns/genorden.png"
	  onclick="nueva('<?php echo $ventana1;?>?cargos=cargos&almacen=<?php echo $ALMACEN;?>','ventana7','800','500','yes')" />
      </div></td>


    </tr>
  </table>

<link rel="stylesheet" type="text/css" media="all" href="/sima/calendario/calendar-brown.css" title="win2k-cold-1" />
  <!-- librer�a principal del calendario --> 
 <script type="text/javascript" src="/sima/calendario/calendar.js"></script> 
 <!-- librer�a para cargar el lenguaje deseado --> 
  <script type="text/javascript" src="/sima/calendario/lang/calendar-es.js"></script> 
  <!-- librer�a que declara la funci�n Calendar.setup, que ayuda a generar un calendario en unas pocas l�neas de c�digo --> 
  <script type="text/javascript" src="/sima/calendario/calendar-setup.js"></script> 
 


<script language=javascript> 
function ventanaSecundaria (URL){ 
   window.open(URL,"ventana1","width=800,height=600,scrollbars=YES") 
} 
</script> 




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php

$estilos=new muestraEstilos();
$estilos->styles();
?>

</head>
    <body>
        

<?php

                    if(!$_POST['fechaInicial']){
                        if($_GET['dates']){    
                    $dates= $_GET['dates'];
                    }else{
		    $dates= $fecha1;
                    }
                    }else{
                    
                        $dates= $_POST['fechaInicial'];
                 
                    }
?>


 <form id="form1" name="form1" method="post" action="#">
  <h1 align="center"><?php echo $titulo;?></h1>

  
      <p align="center" class="titulo">
    <span >Escoge la Fecha </span>
      <input onChange="this.form.submit();" name="fechaInicial" type="text"  id="campo_fecha" size="10" maxlength="10" readonly=""
		value="<?php echo $dates; ?>"/>
    </label>
    <input name="button" type="image" id="lanzador" src="/sima/imagenes/btns/fecha.png" />
</p>
  




  

   <!--<table width="700" class="table table-striped">-->
   <table width="700" class="table-template-left">
    <tr >
      <th width="17" >#</th>
      <th width="17" >Hora</th>
      <th width="37" >Factura</th>
      <th width="114" >Proveedor</th>
      <th width="78" >Importe</th>
      <th width="47" >IVA</th>

      <th width="54" >Gastos</th>
      <th width="54" >Usuario</th>

      <th width="54" >Editar</th>
      <th width="54" >Cargar</th>
      <th width="54" >Status</th>
      <th width="54" >Elimina</th>


             <th width="45" ></th>
                   
    </tr>
<?php	



 $sSQL= "
SELECT 
*
FROM
compras
where
entidad='".$entidad."'
    and
fecha='".$dates."'
and

statusDevolucion!='si'
ORDER BY factura DESC";

$result=mysql_db_query($basedatos,$sSQL);
while($myrow = mysql_fetch_array($result)){ 
$a+=1;

$fV[0]=$myrow['folioVenta'];

$sSQL8a= "
SELECT *
FROM
proveedores
WHERE
entidad='".$entidad."'
    and
id_proveedor='".$myrow['proveedor']."'";
$result8a=mysql_db_query($basedatos,$sSQL8a);
$myrow8a = mysql_fetch_array($result8a);


//$sSQL8ab= "
//SELECT descripcion
//FROM
//almacenes
//
//WHERE
//entidad='".$entidad."'
//and
//almacen='".$myrow8a['almacen']."'";
//$result8ab=mysql_db_query($basedatos,$sSQL8ab);
//$myrow8ab = mysql_fetch_array($result8ab);



//   $sSQL8abc= "
//SELECT *
//FROM
//traspasosEspeciales
//
//WHERE
//keyCAP='".$myrow['keyCAP']."'
//";
//$result8abc=mysql_db_query($basedatos,$sSQL8abc);
//$myrow8abc = mysql_fetch_array($result8abc);



//$sSQLd= "SELECT 
//statusCargo
//FROM cargosCuentaPaciente
//WHERE
//entidad='".$entidad."'
//and
//numSolicitud='".$myrow['numSolicitud']."'
//and
//statusCargo='standby' ";
//
//
//$resultd=mysql_db_query($basedatos,$sSQLd);
//$myrowd = mysql_fetch_array($resultd);



?>
	  
<tr  >
<td  ><?php echo $a;?></td>              
  <td  ><?php echo $myrow['hora'];?></td>              
      <td  ><?php echo $myrow['factura'];?></td>
      <td >

                        <span >



        <?php echo $myrow['descripcionProveedor'];	?>

      
                  </span>
</td>
      
      
      
      
      <td >
      <?php 		echo '$'.number_format($myrow['importe'],2);	?>          
      </td>
      
      
      
      
      <td >

      <?php 		echo '$'.number_format($myrow['iva'],2);	?>
          
      </td>
      

      
      
      <td >
          
      <?php 		echo '$'.number_format($myrow['gastos'],2);	?>          
          
      </td>
       
      
      

       
      
       

     <td >
         
        <?php echo $myrow['usuario'];	?>

     </td>   
      
      


     
     
     
      
 <td >
     <?php if($myrow['status']!='sent'){?>
        <a href="#"  onclick="javascript:ventanaSecundaria('../ventanas/ventanaOCSF.php?update=si&id_factura=<?php echo $myrow['factura'];?>&proveedor=<?php echo $myrow['proveedor'];?>')">
        Editar
        </a>
 <?php }else{ 
     
     echo '---';
     
 }
     ?>
 </td> 
      
 
 
  
 
 
  <td >
       <?php if($myrow['status']!='sent'){?>
        <a href="#" onclick="javascript:ventanaSecundaria('../ventanas/enviarSolicitud1.php?proveedor=<?php echo $myrow['proveedor'];?>&id_factura=<?php echo $myrow['factura'];?>&descripcionProveedor=<?php echo $myrow['descripcionProveedor'];?>')">
        Cargar
        </a>
  <?php }else{ 
     
     echo '---';
     
 }
     ?>
 </td>  
 
 <td ><?php if( $myrow['status']=='sent'){
     echo 'Cargada';
     
 }else{
     echo 'Standby';
 }
?></td> 
      
       
 
 
 
       <td ><?php if($myrow['status']!='sent'){ ?>
        <span > <a  href="generaOCSF.php?main=<?php echo $_GET['main'];?>&warehouse=<?php echo $_GET['warehouse'];?>&id_factura=<?php echo $myrow['factura'];?>&keyCO=<?php echo $myrow['keyCO'];?>&dates=<?php echo $dates;?>&delete=si"> 
                <img src="/sima/imagenes/btns/cancelabtn.png" alt="Almac&eacute;n &oacute; M&eacute;dico Activo" width="18" height="18" border="0" onMouseover="showhint('Presiona aqui para cambiar el status del articulo..', this, event, '150px')" onClick="if(confirm('&iquest;Est&aacute;s seguro que deseas eliminar esta factura?') == false){return false;}" /></a>
        <?php }else{ echo '---';} ?>
        </span></td>
 
 
 
 
      <td >
 <a href="#" onclick="javascript:ventanaSecundaria('../ventanas/verFacturas.php?proveedor=<?php echo $myrow['proveedor'];?>&id_factura=<?php echo $myrow['factura'];?>&descripcionProveedor=<?php echo $myrow['descripcionProveedor'];?>')">
 Print
 </a>
          
      </td>  
 
 

       
 
 
    </tr>
    <?php  }?>
   </table>
  





<p>&nbsp;</p>
  <p align="center"><span class="style7">
    
  </span></p>
</form>


    <script type="text/javascript"> 
   Calendar.setup({ 
    inputField     :    "campo_fecha",     // id del campo de texto 
     ifFormat     :    "%Y-%m-%d",      // formato de la fecha que se escriba en el campo de texto 
     button     :    "lanzador"     // el id del bot�n que lanzar� el calendario 
}); 
    </script>
        </div>
    <?php
    $mostrarFooter = new menus();
    $mostrarFooter->footerTemplate($usuario,$entidad,$basedatos);
    ?>
</body>
</html>