<!DOCTYPE html>
<html lang="es">
  <head> 
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>SGT</title>
    
   <link rel="stylesheet" href="../js/styles.css">
 <!--  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>-->
       <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="../css/styles.css" rel="stylesheet">
     <script type="text/javascript" src="../js/accion.js"></script>
<!--
    <link href="../js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />-->
  </head>
  <body>

  
        <div id="title" class="col-md-12 text-center"><h3>Sistema de Gestion de Incidencias</h3></div>
  
  <?php
require_once ("../class/class.new.php");
require_once ("../class/class.perfil.php");

/* Para consultar cliente */
$resultado = new conSqlSelect ();

// $perfil=new Table($resultado,'sgt_menu');
$r_Obt = $resultado->obtResultado ( 'sgt_menu' );
$current="";
if(isset($_REQUEST['ids']))
	$active=$_REQUEST['ids'];
else 
	$active="";
?>


<ul class="nav nav-tabs">

 <li role="presentation" class="">
       <a href="admin.php">Inicio</a></li>
  <?php foreach ($r_Obt as $i => $value) { 
  	if($value['menu_id']==$active)
  		$current="active";
    else
    	$current=""; ?>  
  
       <li role="presentation" class="<?php echo $current; ?>">
       <a href="general.php?ids=<?php echo $value['menu_id']?>"><?php  echo  $value['titulo']; ?></a></li>
			
  <?php	} ?>
  </ul>