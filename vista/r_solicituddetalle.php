<?php
require_once("../class/class.new.php");
$resultado = new conSqlSelect;

 $pag="cargo"; 

if(isset ($_POST['id'])==""){
  $r_Obt[0]['nombre']="";
  $r_Obt[0]['id_cargo']="";

  $camp="";

  echo"<p class='subtitle' align='center'>Ingreso de Solicitudes</p> </h1>";
}
else {
  echo"<h2><p align='center'>Editar Cargo</p> </h2>";
  $camp=$_POST['id'];

$tabla="cargo";
$ID="id_cargo";
/* Para consultar Personas */

$r_Obt = $resultado->obtResultadoW($tabla,$ID,$camp);

}

?>
                   <form name="Formu" class="form-horizontal table-responsive" onsubmit="registrar('<?php echo $pag;?>'); return false">
                      <table class="table table-hover" height="100%">
                      
                          <tr>
                              <td class="text-right">
                                <label for="exampleInputName2">Usuario: </label>
                              </td>
                              <td>
                              <label>Test</label>
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Email: </label>
                              </td>
                              <td>
                              <label>e@example.com</label>
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Fecha: </label>
                              </td>
                              <td>
                                  <label><?php echo date('Y-m-d');?></label>
                              </td>  
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Hora: </label>
                              </td>
                              <td>
                                 <label><?php echo date('H:m');?></label>
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Cliente: </label>
                              </td>
                              <td>
                                 <label>IP</label>
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Prioridad: </label>
                              </td>
                              <td>
                                  <label>Media</label>
                              </td>
                        </tr>
                        </table> <div class="form-horizontal table-responsive">
                      <table class="table" height="100%"><tr>
                               <td class="text-center subtitle" colspan="4">
                                <label for="exampleInputName2">Solicitud de Comunicado: </label>
                              </td>

                              </tr>
                              <tr>
                                <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Descripcion de la solicitud: </label>
                              </td>
                              <td>
                                 <input type="text" class="form-control"></input>
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Prioridad: </label>
                              </td>
                              <td>
                                  <textarea class="form-control" cols="45"></textarea>
                              </td>

                              </tr>
                           <tr>
                              <td colspan="4" class="text-center">
                                  <input type="submit" class="btn btn-primary" value="Enviar Solicitud"> </td>
                        </tr>
                        <tr>
                              <td colspan="4" class="text-center">                        
                                  <a class="btn btn-danger" onclick="nuevo('c_<?php echo $pag;?>')">Volver</a>                              </td>
                          </tr>
                      </table>
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
