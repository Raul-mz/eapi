<?php
require_once("../class/class.new.php");
//require_once("../class/class.user.php");

$user = User::getInstance();

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
                                  <input type="hidden" class="form-control" id="campo" value="<?php echo $user->getUserName(); ?>">
                                  <input type="text" class="form-control" id="texto" placeholder="" value="<?php echo $user->getUserName();?>">
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Email: </label>
                              </td>
                              <td>
                                  <input type="text" class="form-control" id="texto" placeholder="" value="<?php echo $user->getEmail()?>">
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Fecha: </label>
                              </td>
                              <td>
                                  <input type="text" class="form-control" id="texto" placeholder="" value="<?php echo Date('d/m/Y');?>">
                              </td>  
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Hora: </label>
                              </td>
                              <td>
                                  <input type="hidden" class="form-control" id="campo" value="<?php echo $r_Obt[0]['id_cargo']?>">
                                  <input type="text" class="form-control" id="texto" placeholder="" value="<?php echo Date('G:i')?>">
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Cliente: </label>
                              </td>
                              <td>
                                 <select> <option>IP</option></select>
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Prioridad: </label>
                              </td>
                              <td>
                                  <select> 
	                                  <option>Media</option>
	                                  <option>Urgente</option>
	                                  <option>Baja</option>
                                  </select>
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Tipo de Solicitud: </label>
                              </td>
                              <td> 
                                  <select style="width: 95%;"> 
                                  <?php $ticketType = $resultado->obtResultado('sgt_tipoticket'); 
                                  foreach ($ticketType as $i => $value) {?>
                                  <option value="<?php echo $value['tipoticket_id']; ?>"><?php echo $value['nombre']; ?></option></select>
                                  
                                  <?php } ?>
                              </td>
                              
                           <tr>
                              <td colspan="4" class="text-center">
                                  <input type="submit" class="btn btn-primary" value="Generar Formulario Incidencia"> </td>
                        </tr>
                        <tr>
                              <td colspan="4" class="text-center">                        
                                  <a class="btn btn-danger" onclick="nuevo('c_<?php echo $pag;?>')">Volver</a>                              </td>
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
