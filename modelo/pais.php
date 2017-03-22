<?php 
$texto=explode(",",$_POST['texto']);
$text=$_POST['texto'];
$num=$_POST['num'];
$pag=$_POST['pag'];
$id=$_POST['id'];
for($x=0;$x<=$num;$x++)
$texto[$x];


$Tabla="pais";
// Columnas de la bd. 
  $cols[0]="pais_id";
  $cols[1]="nombre";
require_once("../class/class.consultas.php");

/* Para consultar Personas */
$datosUsu = new conSqlSelect;


$var="pais";

if($id==""){
$usuarios_reg = $datosUsu->obtResultadoW($Tabla,'nombre',$texto[1]);
/* ************************/
if (!empty($usuarios_reg))
{//si el cliente esta registrado
echo "<div id='msj'>Este Pais ya esta Registrado  <a onClick=\"cargar('$var','$var')\">Volver</a></div>";

}
else{
   $newReg = new conSqlInsert;
   
	$registro = $newReg->new_Record($Tabla,$cols,$texto);
		echo "Registrado con Exito... <a href='../vista/".$var.".php'>Continuar</a>";


}
}
else{

  $editReg = new conSqlUpdate;


	$registro = $editReg->update($Tabla,$cols,$texto);
		echo "Editado con Exito... <a href='../vista/".$var.".php'>Continuar</a>";


?>
<?php


}

?>

</body>
</html>