<?php
require_once("../class/class.new.php");
require_once("../class/class.perfil.php");

$resultado = new conSqlSelect;

$id=$_REQUEST['ids'];
$form = new Table($resultado,$id);

$tabla="sgt_field";
$pk=$tabla."_ID";
$pag="core";

$c_Obt1 = $resultado->obtResultadoW($tabla,'menu_id',$id);

$t_Obt = $resultado->obtResultadoW($tabla,'menu_id',$id);
if(isset($_REQUEST['id'])){

$cod=$_REQUEST['id'];
echo "Editando.. Falta Agregar funcionalidad";
$t_Obt = $resultado->obtResultadoW($tabla,'menu_id',$id);

}

?>
 <p ><div class=" r col-md-offset-3"><h2><?php echo $form->getTitle();?></h2></div> </p>
<!-- Modal Structure -->
  <div id="modal2" class="modal">
    <div id="Resulta" class="modal-content">
      <h4>Cargando</h4>
    </div>
    <div class="modal-footer">
      <a href="#!" onclick="location.reload();" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
               
                   <form name="Formu" class="form-horizontal table-responsive" onsubmit="registrar('<?php echo $pag;?>','<?php echo $form->getTabla();?>','<?php echo $id;?>'); return false">
                      
                      <?php 
print_r($form->render($id));

                      for ($i=0; $i< count($c_Obt1); $i++){ ?>   
                                   
                           <?php
                                      }
                                    ?>
                             
                         <div  class="input-field col s12 text-center">
                                  <input type="submit" class="btn btn-primary" value="Guardar"> -
                                  <button class="btn btn-danger" onclick="nuevo('c_<?php echo $pag;?>')">Cancelar</button>
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

