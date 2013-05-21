<?php include('/var/www/html/sima/js/pdf/fpdf_js.php');









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





require('/configuracion/baseDatos.php');
$base=new MYSQL();
$basedatos=$base->basedatos();
$conexionManual=new MYSQL();
$conexionManual->conecta();



function cambia_a_normal($fecha){ 
    ereg( "([0-9]{2,4})-([0-9]{1,2})-([0-9]{1,2})", $fecha, $mifecha); 
    $lafecha=$mifecha[3]."/".$mifecha[2]."/".$mifecha[1]; 
    return $lafecha; 
} 

//******************************************************************

if($seguro)$paciente=$seguro;



$pdf->SetFont('Arial','',10);
//establece el nombre del paciente

$pdf->SetXY(2,5);
$pdf->Cell(0,0,'HONORARIOS MEDICOS',0,0,M);
$pdf->SetX(1);


//*****************ech*************





$fecha1=date("d-M-Y");
$pdf->SetY(10);
$pdf->Cell(0,0,$fecha1,0,0,R);



$pdf->SetXY(2,10);
$pdf->Cell(0,0,"HOSPITAL LA CARLOTA",0,0,M);


$pdf->Ln(3); //salto de linea
$pdf->SetXY(2,25);
$pdf->Cell(0,0,"HONORARIOS PACIENTES EXTERNOS",0,0,M);
$pdf->SetX(1); 

/* 
$pdf->SetXY(2,13);
$pdf->Cell(0,0,'Cajero(a): '.$myrow1a['usuario'],0,0,M);
$pdf->SetX(1); */

//********************************************
/* /* $sSQL1= "Select descripcionCaja From catCajas where keyCatC='".$_GET['codigoCaja']."'";
$result1=mysql_db_query($basedatos,$sSQL1);
$myrow1 = mysql_fetch_array($result1); */ 


//*****************************************************
/* $pdf->SetXY(2,17);                                  //*  
$pdf->Cell(0,0,$myrow1['descripcionCaja'],0,0,M);   //*
$pdf->SetX(1);     */                                  //*
//*****************************************************

/* $pdf->SetXY(2,20);  
$pdf->Cell(0,0,'Num. Corte: '.$_GET['numCorte'],0,0,M); */




$pdf->SetXY(50,20);  
$pdf->Cell(0,0,'Fecha Inicial: '.cambia_a_normal($_GET['fechaInicial']),0,0,R);
$pdf->SetXY(160,24);  
$pdf->Cell(0,0,'Fecha Final: '.cambia_a_normal($_GET['fechaFinal']),0,0,R); 

//***********************************EFECTIVO SOLAMENTE***********************************


$pdf->SetFont('Arial','',10);
$pdf->line(2,32,203,32);




$pdf->SetXY(2,30);
$pdf->Cell(0,0,'FV.',0,0,M);

$pdf->SetXY(15,30);
$pdf->Cell(0,0,'CONCEPTO',0,0,M);

//*************TRANSACCIONES***************



$pdf->SetXY(170,30);
$pdf->Cell(0,0,'DEBE',0,0,M); 


$pdf->SetXY(190,30);
$pdf->Cell(0,0,'HABER',0,0,M); 



$pdf->Ln(15); //salto de linea









$pdf->SetFont('Arial','',8);
$pdf->SetXY(2,7);
$pdf->Ln(25); //salto de linea






$sSQL= "SELECT * FROM cargosCuentaPaciente
WHERE
entidad='".$_GET['entidad']."'
and
fechaCierre>='".$_GET['fechaInicial']."' and fechaCierre<='".$_GET['fechaFinal']."'
    and
    medico!=''
and
tipoPaciente='externo' 
and
statusCuenta='cerrada'
and
ventasDirectas!='si'
group by medico
order by medico ASC
";
 

$result=mysql_db_query($basedatos,$sSQL);
while($myrow = mysql_fetch_array($result)){














//*******************
//ALMACEN 
$pdf->Ln(3); //salto de linea
 $sSQL1b1= "SELECT * FROM medicos
WHERE
entidad='".$_GET['entidad']."'
and
numMedico='".$myrow['medico']."'  ";
 

$result1b1=mysql_db_query($basedatos,$sSQL1b1);
$myrow1b1 = mysql_fetch_array($result1b1);
//********************


$pdf->SetX('2');
$pdf->Cell(0,0,$myrow1b1['almacen'],0,0,M);




$pdf->SetX('15');
if($myrow1b1['nombreCompleto']){
$pdf->Cell(0,0,'[ '.$myrow1b1['nombreCompleto'].' ]',0,0,M);
$pdf->Ln(3); //salto de linea
}else{
  $pdf->Cell(0,0,'[ '.$myrow['descripcionMedico'].' ]',0,0,M);
$pdf->Ln(3); //salto de linea  
}


 $sSQLg= "Select * From cargosCuentaPaciente where entidad='".$_GET['entidad']."' and

fechaCierre>='".$_GET['fechaInicial']."' and fechaCierre<='".$_GET['fechaFinal']."'
and
medico='".$myrow['medico']."'
and
tipoPaciente='externo' 
and
statusCuenta='cerrada'
and
ventasDirectas!='si'
group by almacenIngreso 
order by almacenIngreso ASC
";
$resultg=mysql_db_query($basedatos,$sSQLg); 
while($myrowg = mysql_fetch_array($resultg)){


//****************************
$sSQLc="SELECT sum((precioVenta*cantidad)+(iva*cantidad)) as haber

FROM
cargosCuentaPaciente
WHERE
entidad='".$_GET['entidad']."'
and

medico='".$myrow['medico']."'
and

almacenIngreso='".trim($myrowg['almacenIngreso'])."'
and

fechaCierre>='".$_GET['fechaInicial']."' and fechaCierre<='".$_GET['fechaFinal']."'
and
naturaleza='C'

and
tipoPaciente='externo' 
and
statusCuenta='cerrada'
and
ventasDirectas!='si'
";
$resultc=mysql_db_query($basedatos,$sSQLc);
$myrowc = mysql_fetch_array($resultc);

  $sSQLd="SELECT 
sum((precioVenta*cantidad)+(iva*cantidad)) as debe

FROM
cargosCuentaPaciente
WHERE
entidad='".$_GET['entidad']."'
and



medico='".$myrow['medico']."'
    and
almacenIngreso='".trim($myrowg['almacenIngreso'])."'
and
fechaCierre>='".$_GET['fechaInicial']."' and fechaCierre<='".$_GET['fechaFinal']."'


and
naturaleza='A'
and
tipoPaciente='externo' 
and
statusCuenta='cerrada'
and
ventasDirectas!='si'
";
$resultd=mysql_db_query($basedatos,$sSQLd);
$myrowd = mysql_fetch_array($resultd); 
//****************************************************************************















//*************************************************************************







//*******************
//ALMACEN 
  $sSQL1b= "SELECT * FROM almacenes
WHERE
entidad='".$_GET['entidad']."'
and
almacen='".$myrowg['almacenIngreso']."' ";
 

$result1b=mysql_db_query($basedatos,$sSQL1b);
$myrow1b = mysql_fetch_array($result1b);
//********************

$pdf->SetX('15');
$pdf->Cell(0,0,$myrow1b['descripcion'],0,0,M);



 $haber[0]+=$myrowc['haber'];
 $hab=$myrowc['haber'];


$debe[0]+=$myrowd['debe'];
$deb=$myrowd['debe'];

if($deb>0){
$pdf->SetX('170');
$pdf->Cell(0,0,'$'.number_format($deb,2),0,0,M);
}




if($hab>0){
$pdf->SetX('190');
$pdf->Cell(0,0,'$'.number_format($hab,2),0,0,M);
}


$pdf->Ln(3); //salto de linea

}



/* $pdf->SetX('190');
$pdf->Cell(0,0,'$'.number_format($dev,2),0,0,M); */


//*****************************************************************






































$pdf->Ln(3); //salto de linea

} //cierra while**************************---------------------------------------------------------------------------------------------------------------




























//**************************************TOTAL DE INGRESOS************************************
$pdf->Ln(15); //salto de linea
$pdf->SetX('100');
$pdf->Cell(0,0,'* * * * * * * * * * * * * * * * * * * * * * * *',0,0,L);
$pdf->Ln(4); //salto de linea


 
$pdf->SetX('100');
$pdf->Cell(0,0,'Debe',0,0,M);

$pdf->SetX('130');
$pdf->Cell(0,0,'Haber',0,0,M);

$pdf->Ln(4); //salto de linea *
$pdf->SetX('100');
$pdf->Cell(0,0,''.'$'.number_format($debe[0],2),0,0,M);

$pdf->SetX('130');
$pdf->Cell(0,0,' '.'$'.number_format($haber[0],2),0,0,M); 

$pdf->Ln(4); //salto de linea */

$pdf->SetX('100');
$pdf->Cell(0,0,'* * * * * * * * * * * * * * * * * * * * * * * *',0,0,L);
$pdf->Ln(7); //salto de linea */
$pdf->SetX('110');
$pdf->Cell(0,0,'TOTAL '.'$'.number_format($debe[0]-$haber[0],2),0,0,M);

//*************************************************************************************************************************









//*********************************************************************************PACIENTES EXTERNOS*************************************************











$pdf->Ln(15); //salto de linea




$pdf->SetX(2);
$pdf->Cell(0,0,"HONORARIOS PACIENTES INTERNOS",0,0,M);
$pdf->Ln(3); //salto de linea




$sSQL= "SELECT * FROM cargosCuentaPaciente
WHERE
entidad='".$_GET['entidad']."'
and
fechaCargo>='".$_GET['fechaInicial']."' and fechaCargo<='".$_GET['fechaFinal']."'
and
medico!=''
and
(tipoPaciente='interno'  or tipoPaciente='urgencias')



and
ventasDirectas!='si'
group by medico
order by medico  ";
 

$result=mysql_db_query($basedatos,$sSQL);
while($myrow = mysql_fetch_array($result)){







//*******************SOLO ENTRA AQUI UNA SOLA VEZ

//$pdf->Ln(3); //salto de linea

























//*******************
//ALMACEN 
$pdf->Ln(3); //salto de linea
 $sSQL1b1= "SELECT * FROM medicos
WHERE
entidad='".$_GET['entidad']."'
and
numMedico='".$myrow['medico']."' ";
 

$result1b1=mysql_db_query($basedatos,$sSQL1b1);
$myrow1b1 = mysql_fetch_array($result1b1);
//********************



$pdf->SetX('2');
//$pdf->Cell(0,0,$myrow1b1['cedula'],0,0,M);

$pdf->SetX('15');
$pdf->Cell(0,0,'[ '.$myrow1b1['nombreCompleto'].' ]',0,0,M);
$pdf->Ln(3); //salto de linea



$sSQLg= "Select * From cargosCuentaPaciente where entidad='".$_GET['entidad']."' and 


fechaCargo>='".$_GET['fechaInicial']."' and fechaCargo<='".$_GET['fechaFinal']."'
and
medico='".trim($myrow['medico'])."' 
and
(tipoPaciente='interno'  or tipoPaciente='urgencias')
and
statusCargo='cargado'
and
ventasDirectas!='si'
group by almacenIngreso 
order by almacenIngreso ASC
";
$resultg=mysql_db_query($basedatos,$sSQLg); 
while($myrowg = mysql_fetch_array($resultg)){


//****************************
$sSQLc="SELECT sum((precioVenta*cantidad)+(iva*cantidad)) as haber

FROM
cargosCuentaPaciente
WHERE
entidad='".$_GET['entidad']."'
and
medico='".trim($myrow['medico'])."' 
and
almacenIngreso='".trim($myrowg['almacenIngreso'])."'

and
fechaCargo>='".$_GET['fechaInicial']."' and fechaCargo<='".$_GET['fechaFinal']."'
and
naturaleza='C'

and
(tipoPaciente='interno'  or tipoPaciente='urgencias')
and
statusCargo='cargado'
and
ventasDirectas!='si'
";
$resultc=mysql_db_query($basedatos,$sSQLc);
$myrowc = mysql_fetch_array($resultc);

  $sSQLd="SELECT 
sum((precioVenta*cantidad)+(iva*cantidad)) as debe
FROM
cargosCuentaPaciente
WHERE
entidad='".$_GET['entidad']."'
and
medico='".trim($myrow['medico'])."' 
and
almacenIngreso='".trim($myrowg['almacenIngreso'])."'
and
fechaCargo>='".$_GET['fechaInicial']."' and fechaCargo<='".$_GET['fechaFinal']."'

and

naturaleza='A'
and
(tipoPaciente='interno'  or tipoPaciente='urgencias')
and
statusCargo='cargado'
and
ventasDirectas!='si'
";
$resultd=mysql_db_query($basedatos,$sSQLd);
$myrowd = mysql_fetch_array($resultd); 
//****************************************************************************















//*************************************************************************







//*******************
//ALMACEN 
 $sSQL1b= "SELECT * FROM almacenes
WHERE
entidad='".$_GET['entidad']."'
and
almacen='".$myrowg['almacenIngreso']."' ";
 

$result1b=mysql_db_query($basedatos,$sSQL1b);
$myrow1b = mysql_fetch_array($result1b);
//********************

$pdf->SetX('15');
$pdf->Cell(0,0,$myrow1b['descripcion'],0,0,M);



 $haberI[0]+=$myrowc['haber'];
 $habI=$myrowc['haber'];


$debeI[0]+=$myrowd['debe'];
$debI=$myrowd['debe'];

if($debI>0){
$pdf->SetX('170');
$pdf->Cell(0,0,'$'.number_format($debI,2),0,0,M);
}





if($habI>0){
$pdf->SetX('190');
$pdf->Cell(0,0,'$'.number_format($habI,2),0,0,M);
}


$pdf->Ln(3); //salto de linea

}



/* $pdf->SetX('190');
$pdf->Cell(0,0,'$'.number_format($dev,2),0,0,M); */


//*****************************************************************






































$pdf->Ln(3); //salto de linea

} //cierra while**************************---------------------------------------------------------------------------------------------------------------





























//**************************************TOTAL DE INGRESOS************************************
$pdf->Ln(15); //salto de linea
$pdf->SetX('100');
$pdf->Cell(0,0,'* * * * * * * * * * * * * * * * * * * * * * * *',0,0,L);
$pdf->Ln(4); //salto de linea


 
$pdf->SetX('100');
$pdf->Cell(0,0,'Debe',0,0,M);

$pdf->SetX('130');
$pdf->Cell(0,0,'Haber',0,0,M);

$pdf->Ln(4); //salto de linea *
$pdf->SetX('100');
$pdf->Cell(0,0,''.'$'.number_format($debeI[0],2),0,0,M);

$pdf->SetX('130');
$pdf->Cell(0,0,' '.'$'.number_format($haberI[0],2),0,0,M); 

$pdf->Ln(4); //salto de linea */

$pdf->SetX('100');
$pdf->Cell(0,0,'* * * * * * * * * * * * * * * * * * * * * * * *',0,0,L);
$pdf->Ln(7); //salto de linea */
$pdf->SetX('110');
$pdf->Cell(0,0,'TOTAL '.'$'.number_format($debeI[0]-$haberI[0],2),0,0,M);

//*************************************************************************************************************************









//*********************************************************************************OPERACIONES*************************************************












//Launch the print dialog
//$pdf->AutoPrint(true);
$pdf->Output();
?>
