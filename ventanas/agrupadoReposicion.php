<?php 
require('/Constantes.php');
require('../js/pdf/fpdf_js.php');









define('FPDF_FONTPATH','font/');
class PDF_AutoPrint extends PDF_Javascript
{







function AutoPrint($dialog=false)
{
    //Launch the print dialog or start printing immediately on the standard printer
    $param=($dialog ? 'true' : 'false');
    $script="print($param);";
    $this->IncludeJS($script);
}



function AutoPrintToPrinter($server, $printer, $dialog=false)
{
    //Print on a shared printer (requires at least Acrobat 6)
    $script = "var pp = getPrintParams();";
    if($dialog)
        $script .= "pp.interactive = pp.constants.interactionLevel.full;";
    else
        $script .= "pp.interactive = pp.constants.interactionLevel.automatic;";
    $script .= "pp.printerName = '\\\\\\\\".$server."\\\\".$printer."';";
    $script .= "print(pp);";
    $this->IncludeJS($script);
}
}





function numerotexto ($numero) {
    // Primero tomamos el numero y le quitamos los caracteres especiales y extras
    // Dejando solamente el punto "." que separa los decimales
    // Si encuentra mas de un punto, devuelve error.
    // NOTA: Para los paises en que el punto y la coma se usan de forma
    // inversa, solo hay que cambiar la coma por punto en el array de "extras"
    // y el punto por coma en el explode de $partes

    $extras= array("/[\$]/","/ /","/,/","/-/");
    $limpio=preg_replace($extras,"",$numero);
    $partes=explode(".",$limpio);
    if (count($partes)>2) {
        return "Error, el n&uacute;mero no es correcto";
        exit();
    }

    // Ahora explotamos la parte del numero en elementos de un array que
    // llamaremos $digitos, y contamos los grupos de tres digitos
    // resultantes

    $digitos_piezas=chunk_split ($partes[0],1,"#");
    $digitos_piezas=substr($digitos_piezas,0,strlen($digitos_piezas)-1);
    $digitos=explode("#",$digitos_piezas);
    $todos=count($digitos);
    $grupos=ceil (count($digitos)/3);

    // comenzamos a dar formato a cada grupo

    $unidad = array   ('un','dos','tres','cuatro','cinco','seis','siete','ocho','nueve');
    $decenas = array ('diez','once','doce', 'trece','catorce','quince');
    $decena = array   ('dieci','veinti','treinta','cuarenta','cincuenta','sesenta','setenta','ochenta','noventa');
    $centena = array   ('ciento','doscientos','trescientos','cuatrocientos','quinientos','seiscientos','setecientos','ochocientos','novecientos');
    $resto=$todos;

    for ($i=1; $i<=$grupos; $i++) {

        // Hacemos el grupo
        if ($resto>=3) {
            $corte=3; } else {
            $corte=$resto;
        }
            $offset=(($i*3)-3)+$corte;
            $offset=$offset*(-1);

        // la siguiente seccion es una adaptacion de la contribucion de cofyman y JavierB

        $num=implode("",array_slice ($digitos,$offset,$corte));
        $resultado[$i] = "";
        $cen = (int) ($num / 100);              //Cifra de las centenas
        $doble = $num - ($cen*100);             //Cifras de las decenas y unidades
        $dec = (int)($num / 10) - ($cen*10);    //Cifra de las decenas
        $uni = $num - ($dec*10) - ($cen*100);   //Cifra de las unidades
        if ($cen > 0) {
           if ($num == 100) $resultado[$i] = "cien";
           else $resultado[$i] = $centena[$cen-1].' ';
        }//end if
        if ($doble>0) {
           if ($doble == 20) {
              $resultado[$i] .= " veinte";
           }elseif (($doble < 16) and ($doble>9)) {
              $resultado[$i] .= $decenas[$doble-10];
           }else {
              $resultado[$i] .=' '. $decena[$dec-1];
           }//end if
           if ($dec>2 and $uni<>0) $resultado[$i] .=' y ';
           if (($uni>0) and ($doble>15) or ($dec==0)) {
              if ($i==1 && $uni == 1) $resultado[$i].="uno";
              elseif ($i==2 && $num == 1) $resultado[$i].="";
              else $resultado[$i].=$unidad[$uni-1];
           }
        }

        // Le agregamos la terminacion del grupo
        switch ($i) {
            case 2:
            $resultado[$i].= ($resultado[$i]=="") ? "" : " mil ";
            break;
            case 3:
            $resultado[$i].= ($num==1) ? " millon " : " millones ";
            break;
        }
        $resto-=$corte;
    }

    // Sacamos el resultado (primero invertimos el array)
    $resultado_inv= array_reverse($resultado, TRUE);
    $final="";
    foreach ($resultado_inv as $parte){
        $final.=$parte;
    }
    return $final;
}




//$pdf=new FPDF();
$pdf=new PDF_AutoPrint();
$pdf->AddPage();



//*****************CONEXION  A SIMA***************
require(CONSTANT_PATH_CONFIGURACION.'/baseDatos.php');
$base=new MYSQL();
$basedatos=$base->basedatos();
$conexionManual=new MYSQL();
$conexionManual->conecta();
//**************************************************




function cambia_a_normal($fecha){
    ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fecha, $mifecha);
    $lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1];
    return $lafecha;
}

//******************************************************************

if($seguro)$paciente=$seguro;


$pdf->SetFont('Arial','',10);
//establece el nombre del paciente

$pdf->SetXY(75,5);
$pdf->Cell(0,0,'HOSPITAL LA CARLOTA',0,0,M);
$pdf->SetX(1);


//*****************ech*************





$fecha1=$_GET['fecha'];
$pdf->SetY(10);
$pdf->SetFont('Arial','',8);
$pdf->Cell(0,0,'Fecha Impresion: '.date("d/m/Y"),0,0,R);





$pdf->SetXY(80,10);
$pdf->SetFont('Arial','',8);
$pdf->Cell(0,0,"POLIZA DE DIARIO, AGRUPADO VENTA DE BOTIQUINES",0,0,M);
$pdf->SetX(1); 


$fecha1=$_GET['fecha'];
$pdf->SetXY(80,13);
$pdf->SetFont('Arial','',8);
$pdf->Cell(0,0,'Dia: '.cambia_a_normal($fecha1),0,0,M);







$pdf->SetFont('Arial','',10);
$pdf->line(2,32,203,32);




$pdf->SetXY(2,30);
$pdf->Cell(0,0,'CTA',0,0,M);

$pdf->SetXY(15,30);
$pdf->Cell(0,0,'DESCRIPCION',0,0,M);

//*************TRANSACCIONES***************
$pdf->SetXY(170,30);
$pdf->Cell(0,0,'DEBE',0,0,M);


$pdf->SetXY(190,30);
$pdf->Cell(0,0,'HABER',0,0,M);


//****************************************

//cambiar fecha
//$myrow1['fecha1']=cambia_a_normal($myrow1['fecha1']);

//Imprimo con salto de pagina
$pdf->Ln(15); //salto de linea







$pdf->SetFont('Arial','',8);
$pdf->SetXY(2,7);
$pdf->Ln(25); //salto de linea







$sSQL40= "SELECT almacen
FROM
almacenes
where 
entidad='".$_GET['entidad']."'
and
centroDistribucion='si'  ";
$result40=mysql_db_query($basedatos,$sSQL40);
$myrow40 = mysql_fetch_array($result40);
$cendis=$myrow40['almacen'];



$sSQLa= "SELECT * FROM cargosCuentaPaciente,gpoProductos
WHERE
cargosCuentaPaciente.entidad='".$_GET['entidad']."'
and
cargosCuentaPaciente.fechaCargo='".$fecha1."'
and
gpoProductos.codigoGP=cargosCuentaPaciente.gpoProducto
and
gpoProductos.afectaExistencias='si'
and
cargosCuentaPaciente.almacenDestino!='".$cendis."'
group by cargosCuentaPaciente.almacenDestino
order by cargosCuentaPaciente.almacenDestino
";


$resulta=mysql_db_query($basedatos,$sSQLa);
while($myrowa = mysql_fetch_array($resulta)){
	$pdf->Ln(5); //salto de linea






//*******************
//ALMACEN 
$pdf->Ln(3); //salto de linea
 $sSQL1b1= "SELECT * FROM almacenes
WHERE
entidad='".$_GET['entidad']."'
    and
almacen='".$myrowa['almacenDestino']."'  ";
 

$result1b1=mysql_db_query($basedatos,$sSQL1b1);
$myrow1b1 = mysql_fetch_array($result1b1);


$sSQL40= "SELECT descripcion,almacen
FROM
almacenes
where 
entidad='".$_GET['entidad']."'
and
almacen='".$myrow1b1['almacenPadre']."'  ";
$result40=mysql_db_query($basedatos,$sSQL40);
$myrow40 = mysql_fetch_array($result40);


//******************************************************************************


$pdf->SetX('15');
$pdf->Cell(0,0,'['.$myrow40['descripcion'].']',0,0,M);
$pdf->Ln(3); //salto de linea
	
	
	
 $sSQL= "SELECT * FROM cargosCuentaPaciente,gpoProductos
WHERE

cargosCuentaPaciente.entidad='".$_GET['entidad']."'
and
cargosCuentaPaciente.fechaCargo='".$fecha1."'
and
cargosCuentaPaciente.almacenDestino='".$myrowa['almacenDestino']."'    
        and
    
gpoProductos.codigoGP=cargosCuentaPaciente.gpoProducto
   and
   gpoProductos.afectaExistencias='si'

GROUP BY cargosCuentaPaciente.gpoProducto
ORDER BY 
cargosCuentaPaciente.gpoProducto ASC
";


$result=mysql_db_query($basedatos,$sSQL);
while($myrow = mysql_fetch_array($result)){
$a+=1;




//***********************************SUMATORIAS**********************************

$sSQLd= "SELECT sum(costoHospital*cantidad) as cargos 
FROM cargosCuentaPaciente
WHERE

entidad='".$_GET['entidad']."'
and
fechaCargo='".$fecha1."'
and
almacenDestino='".$myrowa['almacenDestino']."'
and
 gpoProducto='".$myrow['gpoProducto']."'
and
naturaleza='C'
";

$resultd=mysql_db_query($basedatos,$sSQLd);
$myrowd = mysql_fetch_array($resultd);

$sSQLdev= "SELECT sum(costoHospital*cantidad) as devs 
FROM cargosCuentaPaciente
WHERE

entidad='".$_GET['entidad']."'
and
fechaCargo='".$fecha1."'
and
almacenDestino='".$myrowa['almacenDestino']."'
and
 gpoProducto='".$myrow['gpoProducto']."'
and
naturaleza='A'
";

$resultdev=mysql_db_query($basedatos,$sSQLdev);
$myrowdev = mysql_fetch_array($resultdev);








//$sumC[0]+=$myrowd['cargos']-$myrowh['devoluciones'];


$s="SELECT * 
FROM
gpoProductos
WHERE
codigoGP='".$myrow['gpoProducto']."'
";
$res=mysql_db_query($basedatos,$s);
$mrow = mysql_fetch_array($res);


/*
$pdf->SetX('2');
$pdf->Cell(0,0,'4.01.100',0,0,M);*/

$pdf->SetX('15');
$pdf->Cell(0,0,$mrow['descripcionGP'],0,0,M);


$pdf->SetX('170');
if($myrowd['cargos']>0){
$pdf->Cell(0,0,'$'.number_format($myrowd['cargos']-$myrowdev['devs'],2),0,0,M);

}





	$pdf->Ln(3); //salto de linea

}//cierra while anidado



























//***********************************SUMATORIAS**********************************

$sSQLd= "SELECT sum(costoHospital*cantidad) as cargos 
FROM cargosCuentaPaciente
WHERE

entidad='".$_GET['entidad']."'
and
fechaCargo='".$fecha1."'
and
almacenDestino='".$myrowa['almacenDestino']."'

and
naturaleza='C'
";

$resultd=mysql_db_query($basedatos,$sSQLd);
$myrowd = mysql_fetch_array($resultd);

$sSQLdev= "SELECT sum(costoHospital*cantidad) as devs 
FROM cargosCuentaPaciente
WHERE

entidad='".$_GET['entidad']."'
and
fechaCargo='".$fecha1."'
and
almacenDestino='".$myrowa['almacenDestino']."'

and
naturaleza='A'
";

$resultdev=mysql_db_query($basedatos,$sSQLdev);
$myrowdev = mysql_fetch_array($resultdev);
$debe[0]=$myrowd['cargos']-$myrowdev['devs'];
//*********************************************************









$sSQLhe= "
    SELECT sum(costoHospital*cantidad) as cendis 
FROM cargosCuentaPaciente
WHERE

entidad='".$_GET['entidad']."'
and
fechaCargo='".$fecha1."'
and
almacenDestino='".$myrowa['almacenDestino']."' 
    and
naturaleza='C'
";
$resulthe=mysql_db_query($basedatos,$sSQLhe);
$myrowhe = mysql_fetch_array($resulthe);


$sSQLhed= "
    SELECT sum(costoHospital*cantidad) as devs
FROM cargosCuentaPaciente
WHERE

entidad='".$_GET['entidad']."'
and
fechaCargo='".$fecha1."'
and
almacenDestino='".$myrowa['almacenDestino']."' 
    and
naturaleza='A'
";
$resulthed=mysql_db_query($basedatos,$sSQLhed);
$myrowhed = mysql_fetch_array($resulthed);

//*****************************SUMATORIAS******************************
$pdf->Ln(5); //salto de linea
$pdf->SetX('15');
$pdf->Cell(0,0,'Centro de Distribucion',0,0,M);	



$pdf->SetX('190');
$pdf->Cell(0,0,'$'.number_format($myrowhe['cendis']-$myrowhed['devs'],2),0,0,M);
$haber[0]=$myrowhe['cendis']-$myrowhed['devs'];



/*
$pdf->SetX('190');
$pdf->Cell(0,0,'$'.number_format($myrowde['cargos'],2),0,0,M);
$haberC[0]+=$myrowde['cargos'];
*/












$pdf->Ln(15); //salto de linea
$pdf->SetX('100');
$pdf->Cell(0,0,'* * * * * * * * * * * * * * * * * * * * * * * *',0,0,L);
$pdf->Ln(4); //salto de linea



$pdf->SetX('100');
$pdf->Cell(0,0,'DEBE',0,0,M);

$pdf->SetX('130');
$pdf->Cell(0,0,'HABER',0,0,M);

$pdf->Ln(4); //salto de linea */
$pdf->SetX('100');
$pdf->Cell(0,0,''.'$'.number_format($debe[0],2),0,0,M);

$pdf->SetX('130');
$pdf->Cell(0,0,' '.'$'.number_format($haber[0],2),0,0,M);




$pdf->Ln(4); //salto de linea */
$pdf->SetX('100');
$pdf->Cell(0,0,'* * * * * * * * * * * * * * * * * * * * * * * *',0,0,L);


//*************************************************************************************************************************




$pdf->Ln(10); //salto de linea
} //cierra while**************************---------------------------------------------------------------------------------------------------------------




























































//Launch the print dialog
//$pdf->AutoPrint(true);
$pdf->Output();
?>