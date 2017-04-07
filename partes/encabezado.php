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

    <link href="../js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <style type="text/css">.nav {    padding-left: 30%; }</style>
  </head>
  <body>

  
        <div id="title" class="col-md-12 text-center"><h3>Sistema de Gestion de Incidencias</h3></div>
  
  <?php

  session_start();
require_once ("../class/class.new.php");
require_once ("../class/class.perfil.php");
require_once("../class/class.user.php");
/* Para consultar cliente */
$resultado = new conSqlSelect ();
// Para traer datos del usuario logueado

$r_Obt = $resultado->obtResultadoW('sgt_usuario','usuario_id', $_SESSION["userID"]);

$user = User::getInstance();
$user->setUserName($r_Obt[0]["usuario"]);
$user->setName($r_Obt[0]["nombre"]);
$user->setUserID($r_Obt[0]["usuario_id"]);
$user->setLastName($r_Obt[0]["apellido"]);
$user->setIsAgent($r_Obt[0]["agente"]);
$user->setEmail($r_Obt[0]["email"]);

// $perfil=new Table($resultado,'sgt_menu');
$r_Obt = $resultado->obtResultado ( 'sgt_menu' );
$current="";
if(isset($_REQUEST['ids']))
	$active=$_REQUEST['ids'];
else 
	$active="";

?>


<div class="text-center">
<ul class="nav nav-tabs">

 <li role="presentation" class="">
       <a href="admin.php">Inicio</a></li>
  <?php foreach ($r_Obt as $i => $value) {
  	
  	if($value['submenu_id']==0){
  	if($user->isAgent()==$value['isAgent']){
  	if($value['tabla']==""){ ?>
      	<li><a class="dropdown-toggle" data-toggle="dropdown" href="general.php?ids=<?php echo $value['menu_id']?>" role="button" aria-haspopup="true" aria-expanded="false">
    
       <?php  echo  $value['titulo']; ?> <span class="caret"></span></a>
    <?php }else { 
    	if($value['isSpecial']==0){ ?>  			
      	 <li><a href="general.php?ids=<?php echo $value['menu_id']?>">
       <?php  echo  $value['titulo']; ?> </a></li>
       		
       <?php }
    	else { ?>
    	 <li><a href="<?php echo $value['tabla']?>.php">
       <?php  echo  $value['titulo']; ?> </a></li>
    	<?php }
    		} foreach ($r_Obt as $b => $values) { ?>
      	
      	
      	<?php  $id=$values['submenu_id']; 
      	$sub = $resultado->obtResultadoW('sgt_menu','submenu_id', $id);
      	if($values['submenu_id']==$value['menu_id']){
      	?>
   <ul class="dropdown-menu">
      	<?php 
      	foreach ($sub as $x => $v){  		?>
      	           
      	                  <li role="presentation" class="<?php echo ""; ?>">
      	       <a href="general.php?ids=<?php echo $v['menu_id']?>"><?php  echo  $v['titulo']; ?></a></li>
      	  				<?php
      	  			}
      	  			?></ul></li><?php 
      	} else {
      	?>
      	<!-- <li><a href="general.php?ids=<?php //echo $value['menu_id']?>">
       <?php // echo  $value['titulo']; ?> </a></li> -->
      	<?php }
  	}
      }}}
	  ?>
           </ul> 
     </div>
  
 