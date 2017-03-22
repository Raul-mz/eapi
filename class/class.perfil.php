<?php


require_once("../class/class.field.php");

class Table {
	
	//var $fields = array();
	public function Table($resultado){
	    $r_Obt = $resultado->obtResultado('sgt_menu');
	    $this->title=$r_Obt[0]['titulo'];
	    $this->id=$r_Obt[0]['menu_id'];
	    $this->tabla=$r_Obt[0]['tabla'];
	}

	public function render($resultado){
		$field;
		$fields = array();
		$text="<table border='1'><tr>";
		//$fields=$field->getFields();
		 $r_Obt = $resultado->obtResultadoW('sgt_field','menu_id','1');
	     for ($i=0; $i<count($r_Obt);$i++) {
	     	$field[]=new Field($r_Obt[$i]);
	     	$text.=$field[$i]->renderInput($field[$i]);
	    }
	    $text.="</tr></table>";
	    return $text;
		//return $field->getFields();
	}

	
	
	public function getColumna($tabla){  //funcion principal, ejecuta todas las consultas
		$r_Obt = $tabla->obtResultadoW('sgt_field','menu_id','1');
	     for ($i=0; $i<count($r_Obt);$i++) {
	     	$field[]=new Field($r_Obt[$i]);
	     }
		return $field;
	} 
	public function getMenu(){  //funcion principal, ejecuta todas las consultas
		$tColumna= array('Codigo', 'Tabla', 'Nombre', 'Secuencia');

		return $tColumna;
	} 
	
	public function getTitle(){
	 return $this->title;
	}
	public function getTabla(){
	 return $this->tabla;
	}
}
