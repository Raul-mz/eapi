<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<head>
</head>
<body>

<?php require_once("../class/class.new.php");

/* Para consultar cliente */
$resultado = new conSqlSelect;

$tabla="sgt_usuario";


$r_Obt = $resultado->obtResultado($tabla);
?>
<p>&nbsp; </p>
<p>&nbsp; </p>
    
      <p ><div class=" r col-md-offset-3"><h2>Usuarios</h2></div> </p>
                  
<div class=" col-sm-12 col-xs-12 col-lg-10 col-md-10 ">
</br>
                                <table class="table table-hover" align="center">

                            <thead><tr id="listar">
                            <div align="right"><input class="btn btn-primary" type="submit" name="boton" onclick="nuevo('<?php echo 'r_'.$tabla?>')" value="Registrar" /></div>
                                        
                                        <tr id="listar">

                                          <th ><div align="center" class="t">codigo</div></th>
                                          <th width="90%"><div align="center" class="t">Nombres</div></th>
                                          <th><div align="center" class="t">apellidos</div></th>
                                          <th ><div align="center" class="t">cedula</div></th>
                                          <th width="90%"><div align="center" class="t">condicion</div></th>
                                          <th width="90%"><div align="center" class="t">cargo</div></th>
                                          <th width="90%"><div align="center" class="t">departamento</div></th>
                                          <th width="20%"><div align="center" class="t">fecha de ingreso</div></th>
                                           <th ><div align="center" class="t">Editar</div></th>
                                          <th ><div align="center" class="t">Eliminar</div></th>
                                          
                                        </tr>
                                  </thead>
                                    <?php for ($i=0; $i< count($r_Obt); $i++){ ?>   
                                    <tr id="consultar">

                                  <?php 
                      
                                      $cod=$r_Obt[$i]["id_empleado"]; ?>
                                   <td><div align="center"><?php  echo $r_Obt[$i]["codigo"]?></div></td>
                                      <td><div align="center"><?php  echo $r_Obt[$i]["nombre"]?></div></td>
                                      <td><div align="center"><?php  echo $r_Obt[$i]["apellido"]?></div></td>
                                      <td><div align="center"><?php  echo $r_Obt[$i]["cedula"]?></div></td>
                                     <td><div align="center"><?php  echo $r_Obt[$i]["condicion"]?></div></td>
                                      <td><div align="center"><?php  echo $r_Obt[$i]["id_cargo"]?></div></td>
                                      <td><div align="center"><?php  echo $r_Obt[$i]["id_departamento"]?></div></td>
                                      <td><div align="center"><?php  echo $r_Obt[$i]["fecha_ingreso"]?></div></td>
  
                                      
                                      <td width="150"><div align="center"><a onclick="del_up('<?php echo 'id_'.$tabla;?>','<?php echo $cod;?>','r_<?php echo $tabla;?>',1,'')">
                                            <img src="../img/editar.png"  height="28" title="Editar"></a></div></td>
                                             <td width="50"><div align="center"><a onclick="del_up('<?php echo $tabla;?>','<?php echo $cod;?>','<?php echo $tabla;?>',0,'<?php echo 'id_'.$tabla;?>')">
                                            <img src="../img/delete.png"  height="28" title="Eliminar"></a></div>
                                            </td>
                                      </tr>
                                    <?php
                                      }
                                    ?>
                                </table>
                                </br>              

            

</div>