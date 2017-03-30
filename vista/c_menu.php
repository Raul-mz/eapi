<?php
require_once ("../class/class.new.php");
require_once ("../class/class.perfil.php");

/* Para consultar cliente */
$resultado = new conSqlSelect ();

// $perfil=new Table($resultado,'sgt_menu');
$r_Obt = $resultado->obtResultado ( 'sgt_menu' );
?>


<ul class="nav nav-tabs">


  <?php foreach ($r_Obt as $i => $value) {  ?>  
       <li role="presentation" class="active">
       <a href="general.php?ids=<?php echo $value['menu_id']?>"><?php  echo  $value['titulo']; ?></a></li>
			
  <?php	} ?>
                              
</ul>
</table>
</br>



</div>