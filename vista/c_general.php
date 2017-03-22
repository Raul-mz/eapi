<?php require_once("../class/class.new.php");
require_once("../class/class.perfil.php");

/* Para consultar cliente */
$resultado = new conSqlSelect;

$tabla=$_REQUEST['ids'];
$pag="general";
$perfil = new Table($resultado);
//$perfil->create($resultado);


$r_Obt = $resultado->obtResultado($perfil->getTabla());
?>
<p>&nbsp; </p>
<p>&nbsp; </p>
    
      <p ><div class=" r col-md-offset-3"><h2><?php echo $perfil->getTitle();?></h2></div> </p>
                  
<div >
</br>
                                <table class="table table-hover" align="center">

                            <thead><tr id="listar">
                            <div align="right"><input class="btn btn-primary" type="submit" name="boton" onclick="nuevo('<?php echo 'r_'.$pag; ?>','<?php echo $tabla; ?>' )" value="Registrar" /></div>
                                        
                                        <tr id="listar">
                                        <?php foreach ($perfil->getColumna($resultado) as $i => $value) { ?>
                                          <th ><div align="center" class="t"><?php echo $value->getName(); ?></div></th>
                                         <?php } ?> 
                                         <th ><div align="center" class="t">Editar</div></th>
                                          <th ><div align="center" class="t">Eliminar</div></th>
 
                                        </tr>
                                  </thead>
                                    <?php //for ($i=0; $i< count($r_Obt); $i++){ ?>   
                                        <?php foreach ($r_Obt as $i => $value) { ?>  
                                       
                                    <tr id="consultar">
                                     <?php foreach ($value as $b => $a) { ?>
                      
  
                                   <td><div align="center"><a href="general.php?ids=<?php echo $a;?>"><?php  echo $a; ?></a></div></td>
                                     
                                      
                                    <?php
                                       }
                                    ?>  <td width="150"><div align="center"><a onclick="del_up('<?php echo 'id_'.$tabla;?>','<?php echo $cod;?>','r_<?php echo $tabla;?>',1,'')">
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