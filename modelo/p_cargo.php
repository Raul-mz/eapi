<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="../css/main.css" rel="stylesheet">
<body onload="inicializaCampos()">
<?php 
$texto=explode(",",$_POST['texto']);
$text=$_POST['texto'];
$num=$_POST['num'];
$pag=$_POST['pag'];
$id=$_POST['id'];
for($x=0;$x<=$num;$x++)
$texto[$x];

/** **/

$var="cargo";
$Tabla="cargo";
// Columnas de la bd. 
$i=0;
  $cols[$i++]="id_cargo";
  $cols[$i++]="nombre";
/** Fin **/  
require_once("../class/class.new.php");

/* Para consultar Personas */
$datosUsu = new conSqlSelect;



if($id==""){
$usuarios_reg = $datosUsu->obtResultadoW($Tabla,'id_cargo',$texto[1]);
/* ************************/
if (!empty($usuarios_reg))
{//si el vacaciones esta registrado
echo "<div id='msj' align='center' class='c'>Este vacaciones ya está Registrado  <a onClick=\"newRecord('vacaciones')\">Volver</a></div>";

}
else{
   $newReg = new conSqlInsert;
   
	$registro = $newReg->new_Record($Tabla,$cols,$texto);
 
//header("location: ../vista/".$var.".php");
?>Registrado con Exito... <a onMouseOver='inicializaCampos("cargo")' onClick='self.close();'>Continuar</a><?php
}
}
else{

  $editReg = new conSqlUpdate;


	$registro = $editReg->update($Tabla,$cols,$texto);
 //header("location: ../vista/".$var.".php");
echo "Editado con Exito... <a href='../vista/".$var.".php'>Continuar</a>";


?>
<?php


}

?>
<p>&nbsp; </p>

<p>&nbsp; </p>
</div>
</body>
</html>