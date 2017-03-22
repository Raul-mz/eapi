<?php
require_once("../class/class.new.php");
$resultado = new conSqlSelect;

$pag="usuario";
if(isset ($_POST['id'])==""){
  
  $r_Obt[0]['id_usuario']="";
  $r_Obt[0]['nombre']="";

  $camp="";

  echo"<h2><p align='center'>Registrar usuario</p> </h2>";
}
else {
  echo"<h2><p align='center'>Editar usuario</p> </h2>";
  $camp=$_POST['id'];

$tabla="usuario";
$ID="id_usuario";
/* Para consultar Personas */

$r_Obt = $resultado->obtResultadoW($tabla,$ID,$camp);

}

?>
                   <form class="table-responsive" onsubmit="registrar('<?php echo $pag;?>'); return false">
                      <table class="table table-hover" height="100%">
                      
                          <tr>
                              <td class="text-right">
                                <label for="exampleInputName2">Usuario: </label>
                              </td>
                              <td>
                                  <input type="hidden" class="form-control" id="campo" value="<?php echo $r_Obt[0]['id_usuario']?>">
                                  <input type="text" class="form-control" id="texto" placeholder="" value="<?php echo $r_Obt[0]['nombre']?>">
                              </td>
                              
                              <td class="text-right">
                                <label for="exampleInputName2">contraseña: </label>
                              </td>
                              <td>
                                  <input type="password" name=“lacosa12” class="form-control" id="texto" placeholder="" value="<?php echo $r_Obt[0]['contraseña']?>">
                              </td>
                         </tr>
                              
                                                            <tr>
                              <td colspan="4" class="text-center">
                                  <input type="submit" class="btn btn-primary" value="Continuar"> -
                                  <a class="btn btn-danger" onclick="nuevo('c_<?php echo $pag;?>')">Cancelar</a>
                              </td>
                          </tr>
                      </table>
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