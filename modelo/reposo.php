<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link href="../css/main.css" rel="stylesheet">

<?php 
$texto=explode(",",$_POST['texto']);
$text=$_POST['texto'];
$num=$_POST['num'];
$pag=$_POST['pag'];
$id=$_POST['id'];
for($x=0;$x<=$num;$x++)
 $texto[$x];

/** **/

$var="reposo";
$Tabla="reposo";
// Columnas de la bd. 
$i=0;
   $cols[$i++]="id_reposo";
   $cols[$i++]="id_empleado";
   $cols[$i++]="fecha_inicio";
   $cols[$i++]="fecha_final";
   $cols[$i++]="emfermedad";


/** Fin **/  
require_once("../class/class.new.php");

/* Para consultar Personas */
$datosUsu = new conSqlSelect;



if($id==""){
$usuarios_reg = $datosUsu->obtResultadoW($Tabla,'id_reposo',$texto[1]);
/* ************************/
if (!empty($usuarios_reg))
{//si el reposo esta registrado
echo "<div id='msj' align='center' class='c'>Este reposo ya está Registrado  <a onClick=\"newRecord('reposo')\">Volver</a></div>";

}
else{
   $newReg = new conSqlInsert;
   
	$registro = $newReg->new_Record($Tabla,$cols,$texto);
 
//header("location: ../vista/".$var.".php");
echo "Registrado con Exito... <a href='../vista/".$var.".php'>Continuar</a>";
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