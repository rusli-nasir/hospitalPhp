<?php 
require('/Constantes.php');
require(CONSTANT_PATH_CONFIGURACION.'/ventanasEmergentes.php');
require(CONSTANT_PATH_CONFIGURACION."/funciones.php"); 
$cargosCia=new acumulados();
$cargosParticularesCC=new  cierraCuenta();
$cargosAseguradoraCC=new cierraCuenta();
?>
<script language=javascript> 
function ventanaSecundaria4 (URL){ 
   window.open(URL,"ventana4","widtd=800,height=300,scrollbars=YES,resizable=YES, maximizable=YES") 
} 
</script>
<script language=javascript>
function ventanaSecundaria2 (URL){ 
   window.open(URL,"ventana2","widtd=630,height=500,scrollbars=YES,scrollbars=YES,resizable=YES, maximizable=YES") 
} 
</script> 
<script language=javascript> 
function ventanaSecundaria1 (URL){ 
   window.open(URL,"ventana1","widtd=530,height=300,scrollbars=YES") 
} 
</script> 

<script language=javascript> 
function ventanaSecundaria5 (URL){ 
   window.open(URL,"ventana5","widtd=500,height=500,scrollbars=YES,resizable=YES, maximizable=YES") 
} 
</script>

<script language=javascript> 
function ventanaSecundaria3 (URL){ 
   window.open(URL,"ventana3","widtd=500,height=400,scrollbars=YES,resizable=YES, maximizable=YES") 
} 
</script>

<script language=javascript> 
function ventanaSecundaria6 (URL){ 
   window.open(URL,"ventana6","widtd=500,height=400,scrollbars=YES,resizable=YES, maximizable=YES") 
} 
</script>
<script language=javascript> 
function ventanaSecundaria7 (URL){ 
   window.open(URL,"ventana7","widtd=500,height=600,scrollbars=YES,resizable=YES, maximizable=YES") 
} 
</script>
<script language="javascript" type="text/javascript">   
//Validacion de campos de texto no vacios by Mauricio Escobar   
//   
//Iv�n Nieto P�rez   
//Este script y otros muchos pueden   
//descarse on-line de forma gratuita   
//en El C�digo: www.elcodigo.com   
  
  
//*********************************************************************************   
// Function que valida que un campo contenga un string y no solamente un " "   
// Es tipico que al validar un string se diga   
//    if(campo == "") ? alert(Error)   
// Si el campo contiene " " entonces la validacion anterior no funciona   
//*********************************************************************************   
  
//busca caracteres que no sean espacio en blanco en una cadena   
function vacio(q) {   
        for ( i = 0; i < q.lengtd; i++ ) {   
                if ( q.charAt(i) != " " ) {   
                        return true   
                }   
        }   
        return false   
}   
  
//valida que el campo no este vacio y no tenga solo espacios en blanco   
function valida(F) {   
           
        if( vacio(F.campo.value) == false ) {   
                alert("Introduzca un cadena de texto.")   
                return false   
        } else {   
                alert("OK")   
                //cambiar la linea siguiente por return true para que ejecute la accion del formulario   
                return true   
        }   
           
}   
  
  
  
  
</script> 

<SCRIPT LANGUAGE="JavaScript">
function checkIt(evt) {
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        status = "Este campo s�lo acepta n�meros."
        return false
    }
    status = ""
    return true
}
</SCRIPT>
<script type="text/javascript">
<!-- por carlitos. cualquier duda o pregunta, visita www.forosdelweb.com

var ancho=100
var alto=100
var fin=300
var x=100
var y=100

function inicio()
{
ventana = window.open("cita.php", "_blank", "height=1,widtd=1,top=x,left=y,screenx=x,screeny=y");
abre();
}
function abre()
{
if (ancho<=fin) {
ventana.moveto(x,y);
ventana.resizeto(ancho,alto);
x+=5
y+=5
ancho+=15
alto+=15
timer= settimeout("abre()",1)
}
else {
cleartimeout(timer)
}
}
// -->
</script>









<?php //transaccion estatica

if($_POST['aplicar'] ){
        $_GET['departamento']=$_GET['almacen2'];
        if(is_numeric($_POST['porcentaje']) and $_GET['departamento'] and $_POST['fechaInicial'] and $_POST['fechaFinal']){


 $sSQL7f= "Select * From articulos where keyPA='".$_POST['keyPA']."'";
$result7f=mysql_db_query($basedatos,$sSQL7f); 
$myrow7f = mysql_fetch_array($result7f);
echo mysql_error();


if($myrow7f['codigo']!=NULL){
$sSQL7a= "Select * From descuentosAutomaticos where entidad='".$entidad."' and departamento='".$_GET['departamento']."' 
and 
codigo= '".$myrow7f['codigo']."'";
$result7a=mysql_db_query($basedatos,$sSQL7a); 
$myrow7a = mysql_fetch_array($result7a);
echo mysql_error();


if($myrow7a['codigo']!=NULL){

echo '<script>';
echo 'window.alert("Ya existe ese descuento");';
echo '</script>';

}else{
$agrega = "
INSERT INTO descuentosAutomaticos (departamento,fechaInicial,fechaFinal,usuario,entidad,gpoProducto,seguro,porcentaje,tipoPaciente,codigo,tipoDescuento)
values
('".$_GET['departamento']."','".$_POST['fechaInicial']."','".$_POST['fechaFinal']."','".$usuario."','".$entidad."',
'".$_POST['gpoProducto']."','".$_POST['seguro']."','".$_POST['porcentaje']."','".$_POST['tipoPaciente']."','".$myrow7f['codigo']."',
    '".$_POST['tipoDescuento']."')";
mysql_db_query($basedatos,$agrega);
echo mysql_error();

echo '<script>';
echo 'window.alert("Se hizo el descuento del '.$_POST['porcentaje'].'");';
echo 'window.close();';
echo '</script>';
}




}
else{
    echo 'NO EXISTE EL CODIGO';
}


}else{
    echo 'Te faltan campos por llenar!';
}

}
?>








<!-Hoja de estilos del calendario --> 
  <link rel="stylesheet" type="text/css" media="all" href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/calendario/calendar-tas.css" title="win2k-cold-1" /> 

  <!-- librer�a principal del calendario --> 
<script type="text/javascript" src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/calendario/calendar.js"></script> 

 <!-- librer�a para cargar el lenguaje deseado --> 
<script type="text/javascript" src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/calendario/lang/calendar-es.js"></script> 

  <!-- librer�a que declara la funci�n Calendar.setup, que ayuda a generar un calendario en unas pocas l�neas de c�digo --> 
<script type="text/javascript" src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/calendario/calendar-setup.js"></script> 
  
  
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<html xmlns="http://www.w3.org/1999/xhtml">




<head>

<?php 
$showStyles=new muestraEstilos();
$showStyles->styles();
?>
	<script src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/js/scripts/autocomplete.js" type="text/javascript"></script>
	<link rel="stylesheet" href="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/js/stylesheets/autocomplete.css" type="text/css" />
</head>



<BODY  >
<h1 >&nbsp;</h1>
<h1 >Aplicar Descuento Autom&aacute;tico </h1>
<p  >&nbsp;</p>
<form id="form1" name="form1" method="POST" >
  <div align="center">
    <p>&nbsp;</p>
    <table widtd="500" class="table-forma" >
      
        
        
        
  <tr>
       
        <td>Tipo Descuento</td>
            <td width="265" >

                <select name="tipoDescuento" >
              <option value="particular">Particular</option>
             <option value="aseguradora">Aseguradora</option>
             <option value="ambos">Ambos</option>
            </select>          
             
          
            </td>
          </tr>      
        
        
   <tr>
       
        <td>Codigo</td>
            <td width="265" >

                        
              <input name="keyPA" type="text"  id="keyPA"  readonly="" value="<?php echo $_POST['keyPA'];?>" />
          
            </td>
          </tr>




          <tr>
                  <td>Descripcion</td>
               
            <td  scope="col"><textarea name="descripcion" cols="60" /><?php echo ltrim($_POST['descripcion']);?></textarea>
                
            </td>

            <td rowspan="2" >&nbsp;</td>
          </tr>

        
        
      <tr>
        <td>Fecha Inicial</td>
        <td><label>
          <input name="fechaInicial" type="text" class="Estilo24" id="campo_fecha" size="10" maxlengtd="10" readonly=""
		value="<?php
		 if($_POST['fechaInicial']){
		 echo $_POST['fechaInicial'];
		 }
		 ?>"/>
        </label>
          <input name="button" type="button" class="Estilo24" id="lanzador" value="..." /></td>
      </tr>
      <tr>
        <td>Fecha Final</td>
        <td><label>
          <input name="fechaFinal" type="text" class="Estilo24" id="campo_fecha1" size="10" maxlengtd="10" readonly=""
		  value="<?php
		 if($_POST['fechaFinal']){
		 echo $_POST['fechaFinal'];
		 }
		 ?>"/>
        </label>
          <input name="button1" type="button" class="Estilo24" id="lanzador1" value="..." /></td>
      </tr>
 
      <tr>
        <td><div align="left">Porcentaje: </div></td>
        <td><label>
            <div align="left">
              <input name="porcentaje" type="text"  id="porcentaje" size="3"  value="<?php echo $_POST['porcentaje'];?>"  <?php echo $statusD?> autocomplete="off" />
            </div>
          </label>
            <label></label></td>
      </tr>

    </table>
  </div><br /><br />
  
  <input name="aplicar" type="submit"  id="aplicar" value="Aplicar" <?php echo $statusD?> /></td>
 

  <p align="center">&nbsp;</p>
</form>



<script>
		new Autocomplete("descripcion", function() { 
			this.setValue = function( id ) {
				document.getElementsByName("keyPA")[0].value = id;
			}
			
			// If the user modified the text but doesn't select any new item, then clean the hidden value.
			if ( this.isModified )
				this.setValue("");
			
			// return ; will abort current request, mainly used for validation.
			// For example: require at least 1 char if this request is not fired by search icon click
			if ( this.value.length < 1 && this.isNotClick ) 
				return ;
			
			// Replace .html to .php to get dynamic results.
			// .html is just a sample for you
			return "<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/cargos/articulosxAlmacenesx.php?almacen=<?php echo $_GET['almacen2'];?>&entidad=<?php echo $entidad;?>&q=" + this.value;
			// return "completeEmpName.php?q=" + this.value;
		});	
	</script>


      <script type="text/javascript"> 
   Calendar.setup({ 
    inputField     :    "campo_fecha",     // id del campo de texto 
     ifFormat     :    "%Y-%m-%d",      // formato de la fecha que se escriba en el campo de texto 
     button     :    "lanzador"     // el id del bot�n que lanzar� el calendario 
}); 
</script> 
 <script type="text/javascript"> 
   Calendar.setup({ 
    inputField     :    "campo_fecha1",     // id del campo de texto 
     ifFormat     :     "%Y-%m-%d",      // formato de la fecha que se escriba en el campo de texto 
     button     :    "lanzador1"     // el id del bot�n que lanzar� el calendario 
}); 
</script> 
</body>
</html>