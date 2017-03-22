<?php
require_once("../class/class.new.php");
$resultado = new conSqlSelect;

 $pag="cargo"; 

if(isset ($_POST['id'])==""){
  $r_Obt[0]['nombre']="";
  $r_Obt[0]['id_cargo']="";

  $camp="";

  echo"<p class='subtitle' align='center'>Detalle Incidencia</p> </h1>";
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
                                <label for="exampleInputName2">Cod. Incidencia: </label>
                              </td>
                              <td><label>156</label>
                              </td>
                               <td class="text-right">
                                <label for="exampleInputName2">Solicitante: </label>
                              </td>
                              <td><label>jj</label>
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Cliente: </label>
                              </td>
                              <td>IP
                              </td> 
                               <td class="text-right">
                                <label for="exampleInputName2">Fecha de Creacion: </label>
                              </td>
                              <td>
                                 <?php echo Date('Y/m/d');?>
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Tipo de Solicitud: </label>
                              </td>
                              <td>
                              <label>No</label>
                              </td>

                               <td class="text-right">
                                <label for="exampleInputName2">Estado de la Solicitud: </label>
                              </td>
                              <td>
                                  <select> Pendiente</select>
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Prioridad: </label>
                              </td>
                              <td> 
                                 <label>Media</label>
                              </td>
                              </tr><tr>
                               <td class="text-center subtitle" colspan="4">
                                <label for="exampleInputName2">Titulo </label>
                              </td>
                        </tr>
                        <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Descripcion: </label>
                              </td>
                              <td> 
                                 <label>TT</label>
                              </td><td class="text-right">
                                <label for="exampleInputName2">Nombre Fichero: </label>
                              </td>
                              <td> 
                                 <label></label>
                              </td>
                              </tr>
                              <tr>
                               <td class="text-right">
                                <label for="exampleInputName2">Comentario: </label>
                              </td>
                              <td> 
                                 <label>A</label>
                              </td>
                              </tr>
                              <tr>
                               <td class="text-center subtitle" colspan="4">
                                <label for="exampleInputName2">Nueva Actuación </label>
                              </td>
                        </tr>
                        <tr>
                               <td class="text-center">
                                <label for="exampleInputName2">Fecha: </label>
                              </td>
                              <td> 
                               <label for="exampleInputName2">Tecnico </label>
                                 
                              </td><td colspan="2">
                               <label>Descripcion Actuación</label>
                              </td>
                              </tr>
                              <tr>
                               <td class="text-right">
                                <input type="date"></input>
                                
                              </td>
                              <td> 
                                 <input type="text" class="form-control" value="J">
                              </td>
                              <td colspan="2"> 
                                 <textarea class="form-control"></textarea>
                              </td>

                              </tr>
                      <tr>
                               <td class="text-center">
                                <label for="exampleInputName2">Hora Inicio: </label>
                              </td>
                              <td> 
                               <label for="exampleInputName2">Hora Final </label>
                                 
                              </td><td>
                               <label>Facturar</label>
                              </td><td>
                               <label>Nuevo Estado</label>
                              </td>
                              </tr>
                              <tr>
                               <td class="text-right">
                                <input type="text" class="form-control"></input>
                                
                              </td>
                              <td> 
                                 <input type="text" class="form-control" value="">
                              </td>
                              <td>
                                <input type="text" class="form-control" value="">
                              </td>
                              <td> 
                                 <select class="form-control"></select>
                              </td>

                              </tr>

                           <tr>
                              <td colspan="4" class="text-center">
                                  <input type="submit" class="btn btn-primary" value="Grabar Nueva Actuacion"> </td>
                        </tr>
                        </table></div> <div class="form-horizontal table-responsive">
                      <table class="table" height="100%">
                              <tr>
                               <td class="text-center subtitle" colspan="9">
                                <label for="exampleInputName2">Nueva Actuación </label>
                              </td>
                        </tr>
                               <tr>
                               <td class="text-center">
                                <label for="exampleInputName2">Fecha </label>
                              </td>
                              <td> 
                               <label for="exampleInputName2">Cantidad </label>
                                 
                              </td><td>
                               <label>Tecnico</label>
                              </td>
                               <td class="text-right">
                                <label>Descripción</label>
                              </td>
                              <td> 
                              <label>Tiempo Actuacion</label>   
                              </td>
                              <td> 
                                 <label>Estado</label>
                              </td>
                              <td> 
                                 <label>Precio Hor</label>
                              </td>
                              <td> 
                                 <label>Facturar</label>
                              </td>
                              <td> 
                                 <label>Detalle</label>
                              </td>

                              </tr>
                        <tr>
                              <td colspan="9" class="text-center">                        
                                  <a class="btn btn-danger" onclick="nuevo('c_<?php echo $pag;?>')">Volver</a>                              </td>
                          </tr>
                          <tr>
                          <td>Total Horas No Facturadas</td><td>0</td><td>Total Horas Facturadas</td>
                          <td>0</td><td>Total Euro Incidencia</td>
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
