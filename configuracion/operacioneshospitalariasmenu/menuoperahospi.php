<?php 
require('/Constantes.php');
require(CONSTANT_PATH_CONFIGURACION."/ventanasEmergentes.php"); 

?>


<style type="text/css">
<!--
body {
	background-image: url(<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/imagenes/imagenesModulos/administracion.png);
	background-attachment:fixed;
	background-position:center top;
	background-repeat:no-repeat;
}
-->
</style>
</style>
<script type="text/javascript"  src="<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/js/new/stmenu.js"></script>
<style type="text/css">
<!--
.style2 {
	color: #0000FF;
	font-weight: bold;
	font-size: 9px;
}
-->
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="5" topmargin="5">
<center>
<p>
<a href="http://www.dhtml-menu-builder.com"  style="display:none;visibility:hidden;">Javascript DHTML Drop Down Menu Powered by dhtml-menu-builder.com</a>
<script type="text/javascript">
<!--
stm_bm(["menu3ba5",900,"","<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/imagenes/blank.gif",0,"","",1,0,250,0,1000,1,0,0,"","",0,0,1,2,"default","hand","",1,25],this);
stm_bp("p0",[0,4,0,0,0,5,0,0,100,"",-2,"",-2,50,0,0,"#999999","#E6EFF9","<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/imagenes/bg_02.gif",3,0,0,"#000000","",-1,-1,0,"#FFFFF7","",3,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/imagenes/bg_03.gif",37,3,0,"#FFFFF7","",3,"",-1,-1,0,"#FFFFF7","",3,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/imagenes/bg_01.gif",37,3,0,"#FFFFF7","",3,"","","","",20,20,20,20,20,20,20,20]);




stm_aix("p0i1","p0i0",[0,"Departamentos","","",-1,-1,0,"","_self","","","","",0,0,0,"","",0,0,0,1,1,"#E6EFF9",1,"#E6EFF9",1,"","<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/imagenes/4545454.gif",3,0,0,0,"#E6EFF9","#000000","#FFFFFF","#FFFF34","bold 8pt Verdana","bold 8pt Verdana"],100,33);
stm_bp("p1",[1,4,-20,2,0,5,0,0,100,"",-2,"",-2,50,2,3,"#333333","#333333","",3,1,1,"#000000"]);



//----------ADMINISTRACI�N-----------
<?php 
$codModulo='ADMINISTRACION';
$codSM='IModADM';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Administracion","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/administracion","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?PHP } ?>
//*******************************************************


//----------ADMISIONES-----------
<?php 
$codModulo='ADMISIONES';
$codSM='IModADMISIONES';
 $checaModuloScript= "

SELECT *
FROM `ModulosUsuarios1`
WHERE 
entidad='".$entidad."'
    and
   secundario='ADMISIONES' 
and
usuario = '".$usuario."'

";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Admisiones","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/admisiones/","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?PHP } ?>




//----------ARCHIVO-----------
<?php 
$codModulo='ARCHIVO';
$codSM='IModAr';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE codModulo='".$codModulo."' 
and codSM = '".$codSM."' and 
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){ ?>

stm_aix("p1i0","p0i1",[0,"Archivo","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/archivo","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?PHP } ?>



//----------BENEFICENCIA-----------
<?php 
$codModulo='BENEFICENCIA';
$codSM='IBENE';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE codModulo='".$codModulo."' 
and codSM = '".$codSM."' and 
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){ ?>

stm_aix("p1i0","p0i1",[0,"Beneficencia","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/beneficencia","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);

<?PHP } ?>


//*******************************************************


//----------CAPELLANIA-----------
<?php 
$codModulo='CAPELLANIA';
$codSM='ICapellan';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>


stm_aix("p1i0","p0i1",[0,"Capellania","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/capellania","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);

<?PHP } ?>
//----------FIN CAPELLANIA.-----------

<!------------INICIO CENTRO DENTAL----------------------
<?php 
$codModulo='CENTRODENTAL';
$codSM='ICD';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Centro Dental","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/centrodental","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN CENTRO DENTAL-----------



<!------------INICIO CONSULTA EXTERNA----------------------
<?php 
$codModulo='CONSULTAEXTERNA';
$codSM='ICE';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Consulta Externa","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/consultaexterna","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN CONSULTA EXTERNA-----------




<!------------INICIO CEYE----------------------
<?php 
$codModulo='CEYE';
$codSM='ICeye';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"CEYE","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/ceye","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN CEYE-----------








<!------------INICIO DIAGNOSTICO----------------------


stm_aix("p1i0","p0i1",[0,"Diagnostico","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/diagnostico/","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);

//----------FIN DIAGNOSTICO-----------





<!------------INICIO FARMACIA----------------------
<?php 
$codModulo='FARMACIA';
$codSM='IFar';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Farmacia","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/farmacia","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN FARMACIA-----------


<!------------INICIO FISIOTERAPIA----------------------
<?php 
$codModulo='FISIOTERAPIA';
$codSM='IMODFISIO';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Fisioterapia","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/fisioterapia","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN FISIOTERAPIA-----------


<!------------INICIO GEDIATRIA----------------------
<?php 
$codModulo='GEDIATRIA';
$codSM='IModGed';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Geriatria","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/geriatria","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN GEDIATRIA-----------



<!------------INICIO GINECOLOGIA----------------------
<?php 
$codModulo='GINECOLOGIA';
$codSM='IGine';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>
stm_aix("p1i0","p0i1",[0,"Ginecologia","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/ginecologia","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN GEDIATRIA-----------


//----------LABORATORIO-----------
<?php 
$codModulo='LABORATORIO';
$codSM='IndMenuLab';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Laboratorio","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/laboratorio","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);

<?PHP } ?>
//----------FIN LABORATORIO-----------



//----------LUZ Y VIDA-----------
<?php 
$codModulo='LUZYVIDA';
$codSM='ILYV';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Luz y Vida","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/luzyvida","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);

<?php } ?>
//----------FIN LUZ Y VIDA-----------






//----------MANTENIMIENTO-----------
<?php 
$codModulo='MANTENIMIENTO';
$codSM='IMantM';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>


stm_aix("p1i0","p0i1",[0,"Mantenimiento","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/mantenimiento","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN MANTENIMIENTO-----------







//----------NEFRO Y DIABETES-----------
<?php 
$codModulo='NEFROLOGIADIABETOLOGIA';
$codSM='INefDiaMeta';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>


stm_aix("p1i0","p0i1",[0,"Nefrologia","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/nefrologiaDiabetologia","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN NEFRO Y DIABETES-----------

<!------------INICIO OPTICA----------------------
<?php 
$codModulo='OPTICA';
$codSM='IOPTICA';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Optica","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/optica","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN OPTICA-----------






<!------------INICIO PARTO----------------------
<?php 
$codModulo='Parto';
$codSM='IParto';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Parto","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/parto","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN PARTO-----------



<!------------INICIO PREQUIRURGICO----------------------
<?php
$codModulo='prequirurgico';
$codSM='IPQX';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Prequirurgico","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/prequirurgico","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN PREQUIRURGICO-----------






<!------------INICIO QUIROFANO----------------------
<?php 
$codModulo='QUIROFANO';
$codSM='IQuir';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Quirofano","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/quirofano","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN QUIROFANO-----------



<!------------INICIO RAYOSX----------------------
<?php 
$codModulo='RAYOSX';
$codSM='IMODRX';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Rayos X","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/rayosx","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN RAYOSX-----------



<!------------INICIO SALA 1----------------------
<?php 
$codModulo='SALA1';
$codSM='IS1';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>


stm_aix("p1i0","p0i1",[0,"Sala 1","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/sala1","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN SALA1-----------



<!------------INICIO SISTEMAS----------------------
<?php 
$codModulo='SISTEMAS';
$codSM='Isistemas';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>


stm_aix("p1i0","p0i1",[0,"Sistemas","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/sistemas","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN SISTEMAS-----------



<!------------INICIO URGENCIAS----------------------
<?php 
$codModulo='URGENCIAS';
$codSM='IUrg';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Urgencias","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/urgencias","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
stm_aix("p1i0","p0i1",[0,"Gastro","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/gastro","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
    <?php } ?>
//----------FIN URGENCIAS-----------



<!------------INICIO VIDA SANA----------------------
<?php 
$codModulo='VIDASANA';
$codSM='IVS';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Vida Sana","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/vidasana","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN VIDA SANA-----------





<!------------INICIO WELNEESS----------------------
<?php 
$codModulo='WELLNESS';
$codSM='IWMod';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE 
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Wellness","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/wellness","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN WELLNESS-----------


<!------------INICIO VALORACIONES----------------------
<?php
$codModulo='VALORACION';
$codSM='IVALPQXO';
$checaModuloScript= "Select usuario From usuariosSubmodulos WHERE
codModulo = '".$codModulo."'
and
codSM='".$codSM."'
and
usuario1 = '".$usuario."'";
$resScript=mysql_db_query($basedatos,$checaModuloScript);
$resulScripModulo = mysql_fetch_array($resScript);
echo mysql_error();
if($resulScripModulo['usuario']){?>

stm_aix("p1i0","p0i1",[0,"Valoracion","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/OPERACIONESHOSPITALARIAS/valoracion/","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);
<?php } ?>
//----------FIN VALORACIONES-----------


stm_ep();














<!------------INICIO SALIR----------------------
stm_aix("p0i1","p0i0",[0,"Salir","","",-1,-1,0,"","_self","","","","",0,0,0,"","",0,0,0,1,1,"#E6EFF9",1,"#E6EFF9",1,"","<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/imagenes/4545454.gif",3,0,0,0,"#E6EFF9","#000000","#FF0000","#FFFF34","bold 8pt Verdana","bold 8pt Verdana"],100,33);
stm_bp("p1",[1,4,-20,2,0,5,0,0,100,"",-2,"",-2,50,2,3,"#333333","#333333","",3,1,1,"#000000"]);


stm_aix("p1i0","p0i1",[0,"Menu Principal","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/MenuIndex.php","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);


stm_aix("p1i0","p0i1",[0,"Salir del Sistema","","",-1,-1,0,"<?php echo CONSTANT_PATH_SIMA_RAIZ;?>/salir.php","_self","","","","",0,0,0,"","",0,0,0,0,1,"#E6EFF9",1,"#000000",0,"","",3,3,0,0,"#E6EFF9","#000000","#FFFFFF","#6699FF"],165,20);


stm_em();
//---------------FIN SALIR------------------>
stm_ep();

stm_em();
//-->
</script>
</center>
</body>
</html>
