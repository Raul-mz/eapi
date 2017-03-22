<?php
require_once("../class/class.new.php");
$resultado = new conSqlSelect;

 $pag="cargo"; 

if(isset ($_POST['id'])==""){
  $r_Obt[0]['nombre']="";
  $r_Obt[0]['id_cargo']="";

  $camp="";

  echo"<p class='subtitle' align='center'>Consulta de Solicitudes</p> </h1>";
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
                                <label for="exampleInputName2">Cod. Inc: </label>
                              </td>
                              <td>
                                  <input type="hidden" class="form-control" id="campo" value="<?php echo $r_Obt[0]['id_cargo']?>">
                                  <input type="text" class="form-control" id="texto" placeholder="" value="<?php echo $r_Obt[0]['nombre']?>">
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Franquiciado: </label>
                              </td>
                              <td>
                                  <input type="hidden" class="form-control" id="campo" value="<?php echo $r_Obt[0]['id_cargo']?>">
                                  <input type="text" class="form-control" id="texto" placeholder="" value="<?php echo $r_Obt[0]['nombre']?>">
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Cliente: </label>
                              </td>
                              <td>
                                  <input type="hidden" class="form-control" id="campo" value="<?php echo $r_Obt[0]['id_cargo']?>">
                                  <input type="text" class="form-control" id="texto" placeholder="" value="<?php echo $r_Obt[0]['nombre']?>">
                              </td>  
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Fecha Desde: </label>
                              </td>
                              <td>
                                  <input type="date" class="form-control" id="texto" placeholder="" value="<?php echo $r_Obt[0]['nombre']?>">
                              </td>  
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Fecha Hasta: </label>
                              </td>
                              <td><input type="date" class="form-control" id="texto" placeholder="" value="<?php echo $r_Obt[0]['nombre']?>">
                              </td>  
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Tipo: </label>
                              </td>
                              <td>
                                  <select type="text" class="form-control" id="texto" placeholder="" value="<?php echo $r_Obt[0]['nombre']?>"></select>
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Estado: </label>
                              </td>
                              <td>
                                 <select type="text" class="form-control" id="texto" placeholder="" value="<?php echo $r_Obt[0]['nombre']?>"></select>
                              </td>
                        </tr>
                              <td colspan="4" class="text-center">
                                  <input type="submit" class="btn btn-primary" value="Buscar Incidencias"> </td>
                        </tr>
                        <tr>
                              <td colspan="4" class="text-center">                        
                                  <a class="btn btn-danger" onclick="nuevo('c_<?php echo $pag;?>')">Volver</a>                              </td>
                          </tr>
                      </table>
                    </form>
                </div>
              
              </div></div>
              <div class="row">
                <div class="col-sm-12 ">
                <div class="row">
                  <div class="subtitle text-center">Listado de Incidencias</div>
                </div>
                <div class="table-responsive">
                <table class="table"><tr class="info">
                  <td >Cod. Inc</td>
                  <td >Solicitante</td>
                  <td >Cliente</td>
                  <td >Fecha Alta</td>
                  <td >Hora Alta</td>
                  <td >Tipo </td>
                  <td >Estado</td>
                  <td >Detalle</td></tr>
                  <tr class="danger">
                  <td >156</td>
                  <td >j</td>
                  <td >ip</td>
                  <td ><?php echo Date('Y-m-d');?></td>
                  <td >22:00</td>
                  <td >Solicitud de Prueba </td>
                  <td >Pendiente</td>
                  <td ><a>Ver Detalles </a></td></tr>
                  </tr>
                  </table>
                </div>
                </div>
              </div>
            </div>
        </div>
        </div><!--/right-->
    </div><!--/row-->
</div><!--/container-->
