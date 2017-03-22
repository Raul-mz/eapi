<?php
require_once("../class/class.new.php");
require_once("../class/class.perfil.php");

$resultado = new conSqlSelect;
$form = new Table($resultado);

$tabla="sgt_field";
$id=$_GET['ids'];
$pk=$tabla."_ID";
$pag="core";

$c_Obt1 = $resultado->obtResultadoW($tabla,'menu_id',$id);

$t_Obt = $resultado->obtResultadoW($tabla,'menu_id',$id);


$c_Obt = $resultado->obtColumna('sgt_perfil');
/**
 <td>

                                  <input type="hidden" class="form-control" id="campo" value="<?php echo $r_Obt[0]['centralid']?>">
                                  <input type="text" class="form-control" id="texto" placeholder="" value="<?php echo $r_Obt[0]['central']?>">
                            
<h2><p align="center"><?php echo $t_Obt[0]['eTexto'];?></p> </h2>
                   
                              </td>*/
?>
<!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div id="Resulta" class="modal-content">
      <h4>Cargando</h4>
    </div>
    <div class="modal-footer">
      <a href="#!" onclick="location.reload();" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
 <input type="hidden" readonly="true"; value="<?php echo $t_Obt[0]['eTexto'];?>" name="<?php echo $t_Obt[0]['eTexto'];?>" id="title">

                   
                    <form class="form-inline" onsubmit="registrar('<?php echo $pag;?>','<?php echo $rTabla;?>','<?php echo $rTabla_ID;?>'); return false">
                      
                      <?php 
print_r($form->render($resultado));
echo 's';
                      for ($i=0; $i< count($c_Obt1); $i++){ ?>   
                                   
                           <?php
                                      }
                                    ?>
                             
                         <div  class="input-field col s12">
                                  <input type="submit" class="btn waves-effect waves-light" value="Continuar"> -
                                  <button class="btn waves-effect waves-light" onclick="nuevo('c_<?php echo $pag;?>')">Cancelar</button>
                         </div>
                    </form>
                </div>
              
              </div>
              <div class="row">
                <div class="col-sm-8 col-sm-offset-3">
                </div>
              </div>
            </div>
        </div>
        </div><!--/right-->
    </div><!--/row-->
</div><!--/container-->

<script type="text/javascript">
  document.getElementById('page-title').innerHTML=document.getElementById('title').value;

