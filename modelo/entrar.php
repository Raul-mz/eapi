

<?php
session_start();
$var="admin";

require_once("../class/class.consultas.php");
require_once("../class/class.user.php");
$resultado = new conSqlSelect;

$opcion=$_POST["clave"];
$id=$_POST["usuario"];


/******************************/
 $r_Obt = $resultado->obtDoble("sgt_usuario","usuario","contrasena",$id,$opcion);

/******************************/
/* ************************/
if (isset($r_Obt[0]['usuario_id']))
{//si el cliente esta registrado
 echo $contrasena = $r_Obt[0]["contrasena"];
  echo $idcliente = $r_Obt[0]["usuario"];				


  
   if ($contrasena == $opcion)
   {				   
     //establecermos las variables de sesión
     $_SESSION["user"] = $r_Obt[0]["usuario"];
	  $_SESSION["pass"] = $r_Obt[0]["contrasena"];
	  $_SESSION["userID"]=$r_Obt[0]["usuario_id"];
 header("Location: ../vista/".$var.".php");
 }
?>
<?php
}else {
	?>
	<?php 
 header("Location: ../index1.html");	
}



?>

</body>
</html>