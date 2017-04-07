<?php 
include("../partes/encabezado.php");
require_once("../class/class.new.php");
require_once("../class/class.perfil.php");

$pagName="general";

/* Para consultar */
$resultado = conSqlSelect::getInstance();

$tabla=$_REQUEST['ids'];
$pag="general";

?>
<div id="cen" class="row">
  <div class="col-xs-12 col-md-10 col-md-offset-1 " id="registro">
<!--main-->

                   <?php include 'c_'.$pagName.'.php';?>
              
              
            </div>
        </div>
        </div><!--/row-->
</div><!--/container-->

<?php include("../partes/pie.php");
?>
