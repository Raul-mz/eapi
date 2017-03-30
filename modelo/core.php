<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="../css/main.css" rel="stylesheet">

<?php 

require_once("../class/class.new.php");
require_once("../class/class.perfil.php");
$texto=explode(",",$_POST['texto']);
$text=$_POST['texto'];
$num=$_POST['num'];
$pag=$_POST['pag'];
$id=$_POST['id'];
$Tabla=$_POST['table'];
$ids=$_POST['ids'];
for($x=0;$x<=$num;$x++)
 $texto[$x];

/** **/

$datosUsu = new conSqlSelect;

$form = new Table($datosUsu,$ids);
$var="general";
// Columnas de la bd. 
$i=0;

   
/** Fin **/  

/* Para consultar Personas */

//print_r( $form->getColumnID($ids)->getColumnName());

if($id==""){
$usuarios_reg = $datosUsu->obtResultadoW($Tabla,$form->getColumnID($ids)->getColumnName(),$texto[0]);
/* ************************/
if (!empty($usuarios_reg))
{//si el usuario esta registrado
echo "<div id='msj' align='center' class='c'>Este usuario ya está Registrado  <a onClick=\"newRecord('usuario')\">Volver</a></div>";

}
else{
   $newReg = new conSqlInsert;
   
	$registro = $newReg->new_Record($Tabla,$form->getColumnsName($ids),$texto);
 
//header("location: ../vista/".$var.".php");
echo "Registrado con Exito... <a href='../vista/".$var.".php?ids=".$ids."'>Continuar</a>";
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