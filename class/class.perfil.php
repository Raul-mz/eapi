<?php


require_once("../class/class.field.php");

class Table {
	
	/**
	 * 
	 * @param conexion $resultado
	 * @param id $tabla
	 */
	public function Table($resultado,$tabla){
	    $r_Obt = $resultado->obtResultadoW('sgt_menu','menu_id',$tabla);
	    $this->title=$r_Obt[0]['titulo'];
	    $this->id=$r_Obt[0]['menu_id'];
	    $this->table=$r_Obt[0]['tabla'];
	    $this->connect=$resultado;
	}

	/**
	 * 
	 * @param ID $resultado
	 * @return string
	 */
	public function render($resultado){
		$field;
		$fields = array();
		$text="<table class='table responsive'><tr>";
		 $r_Obt =  $this->connect->obtResultadoW('sgt_field','menu_id',$resultado);
	     for ($i=0; $i<count($r_Obt);$i++) {
	     	$field[]=new Field($r_Obt[$i]);
	     	$text.=$field[$i]->renderInput($field[$i]);
	    }
	    $text.="</tr></table>";
	    return $text;
	}
	
	/**
	 * 
	 * @param unknown $tabla
	 * @return Field
	 */
	public function getColumnas($tabla){  //funcion principal, ejecuta todas las consultas
		$r_Obt = $this->connect->obtResultadoW('sgt_field','menu_id',$tabla);
	     for ($i=0; $i<count($r_Obt);$i++) {
	     	$field[]=new Field($r_Obt[$i]);
	     }
		return $field;
	} 
	/**
	 * 
	 * @return multitype:string
	 */
	public function getMenu(){  //funcion principal, ejecuta todas las consultas
		$tColumna= array('Codigo', 'Tabla', 'Nombre', 'Secuencia');

		return $tColumna;
	} 
	
	public function getColumnsName($tabla){
		$field=$this->getColumnas($tabla);
		for ($i=0; $i<count($field);$i++) {
	     	$columName[]=$field[$i]->getColumnName();
	     }
	     return $columName;
	}
	
	/**
	 * 
	 * @param unknown $tabla
	 * @return Field|string
	 */
	public function getColumnID($tabla){  //funcion principal, ejecuta todas las consultas
		$r_Obt = $this->connect->obtResultadoW('sgt_field','menu_id',$tabla);
	     for ($i=0; $i<count($r_Obt);$i++) {
	     	$field[]=new Field($r_Obt[$i]);
	     	if($field[$i]->isPrimaryKey())
	     		return $field[$i];
	     }
		return "Error";
	} 
	
	/**
	 * @return Title
	 */
	public function getTitle(){
	 return $this->title;
	}
	
	/**
	 * @return Table
	 */
	public function getTabla(){
	 return $this->table;
	}
}
