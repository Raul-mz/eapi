<?php 
$inicio = microtime(true);
$perfil = new Table($resultado,$tabla);

$columID=$perfil->getColumnID($tabla)->getColumnName();

$r_Obt = $resultado->obtResultado($perfil->getTabla());



?>
<p>&nbsp; </p>
    
      <p ><div class=" r col-md-offset-3"><h2><?php echo $perfil->getTitle();?></h2></div> </p>
          
</br>
<div class="table-responsive">
                                <table class="table table-hover" align="center">

                            <thead><tr id="listar">
                            <div align="right"><input class="btn btn-primary" type="submit" name="boton" onclick="nuevo('<?php echo 'r_'.$pag; ?>','<?php echo $tabla; ?>' )" value="Registrar" /></div>
                                        
                                        <tr id="listar">
                                        <?php foreach ($perfil->getColumnas($tabla) as $i => $value) { ?>
                                          <th ><div align="center" class="t"><?php echo $value->getName(); ?></div></th>
                                         <?php } ?> 
                                         <th ><div align="center" class="t">Editar</div></th>
                                          <th ><div align="center" class="t">Eliminar</div></th>
 
                                        </tr>
                                  </thead>
                                    <?php //for ($i=0; $i< count($r_Obt); $i++){ ?>   
                                        <?php foreach ($r_Obt as $i => $value2) { ?>  
                                       
                                    <tr id="consultar">
                                     <?php foreach ($value2 as $b => $a) {

                                     if($b== $columID)
                                      $cod=$a; ?>
                          
  
                                   <td><div align="center"><a href="general.php?ids=<?php echo $a;?>"><?php  echo $a; ?></a></div></td>
                                     
                                      
                                    <?php
                                       }
                                    ?>  <td width="150"><div align="center"><a onclick="del_up(
                                              '<?php echo $perfil->getTabla();?>'
                                             ,'<?php echo $cod;?>'
                                             ,'general'
                                             ,1
                                             ,'<?php echo $columID;?>'
                                             ,'<?php echo $tabla; ?>')">
                                            <img src="../img/editar.png"  height="28" title="Editar"></a></div></td>
                                             <td width="50"><div align="center">
                                             <a onclick="del_up(
                                              '<?php echo $perfil->getTabla();?>'
                                             ,'<?php echo $cod;?>'
                                             ,'general'
                                             ,0
                                             ,'<?php echo $columID;?>'
                                             ,'<?php echo $tabla; ?>')">
                                            <img src="../img/delete.png"  height="28" title="Eliminar"></a></div>
                                            </td>
                                      </tr>
                                    <?php
                                      } 
                                    ?>
                                </table>
                                </br>              

            

</div>
<?php printf("Tiempo total de consulta: %.6fs\n", microtime(true) - $inicio);
?>