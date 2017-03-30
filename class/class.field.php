<?php

require_once("../class/class.new.php");

    
class Field {
	
	public $fields = array();
 
 /**
  * 
  * @return conSqlSelect
  */
 	public function connect(){

		return $resultado = new conSqlSelect;
 	}
 	/**
 	 * 
 	 * @param unknown $data
 	 */
	public function __construct($data){
	        $i=0;
	    $this->id=$data['field_id'];
	    $this->menu_ID=$data['menu_id'];
	    $this->columnName=$data['columnName'];
	    $this->name=$data['name'];
	    $this->type=$data['type'];
	    $this->reference=$data['reference'];
	    $this->value=$data['value'];
	    $this->sequence=$data['sequence'];
	    $this->isDisplay=$data['isDisplay'];
	    $this->isMandatory=$data['isMandatory'];
	    $this->isSameLine=$data['isSameLine'];
	    $this->isReadOnly=$data['isReadOnly'];
	    $this->isPrimaryKey=$data['isPrimaryKey'];
	}

	/**
	 * 
	 * @param unknown $input
	 * @return string
	 */
	public function renderInput($input){
		$field=null;
		$value=$text = $typeField = "";
		switch($input->getType()){
			case 1:
				$typeField = 'text';
				$inputs=$this->createInput($input,$typeField);
			break;
			case 4:

				$inputs="<td><input type='checkbox' ".$input->getValue()." value='1'>".$input->getName()."</td>";
			break;
			case 5:
				$typeField = 'date';
				$inputs=$this->createInput($input,$typeField);
			break;
			case 6:

				$con = $this->connect();
				$options="";
				
				$c_Obt1 = $con->obtResultado($this->getReference());
				for($i=0; $i<count($c_Obt1); $i++) { 
					$options.="<option value=".$this->getColumnName().">".$c_Obt1[$i]['nombre']."</option>";
				}
				$inputs="<td class='text-right'><label>".$input->getName()."</label></td><td><select>".$options."
				</select></td>";
				//$this->createSelect($input,$typeField);
			break;
			case 7:
				$typeField = 'color';
				$inputs=$this->createInput($input,$typeField);
			break;
			default:
			$typeField = 'text';
				$inputs=$this->createInput($input,$typeField);
			break;

		}
		 
		if($input->isSameLine()==0)
			$text="</tr><tr>";
		
		$text.=$inputs;
		return $text;
                                    
	}

	/**
	 * 
	 * @param unknown $input
	 * @param unknown $typeField
	 * @return string
	 */
	public function createInput($input,$typeField){
		$value="";
		if($input->getValue()=="#toDay")
			$value=Date('Y-m-d');

		return $input="<td class='text-right'><label>".$input->getName()."</label></td><td><input class='form-control' ".$input->isPrimaryKey()." type='$typeField' ".$input->isReadOnly()." name='".$input->getName()."' id='".$input->getName()."' value='".$value."'></td>";
	}
	public function getColumna($tabla){  //funcion principal, ejecuta todas las consultas
		if($tabla=='sgt_perfil')
			$tColumna= array('Cod. Perfil', 'Fecha de Alta', 'Nombre', 'Descripcion','Fecha de Baja');

		else if($tabla=='sgt_plantilla')
			$tColumna= array('Cod. Plantilla', 'Fecha de Alta', 'Nombre', 'Descripcion','Modelo','Fecha de Baja');


		return $tColumna;
	} 
	
	/**
	 * 
	 * @return multitype:string
	 */
	public function getMenu(){  //funcion principal, ejecuta todas las consultas
		$tColumna= array('Codigo', 'Tabla', 'Nombre', 'Secuencia');

		return $tColumna;
	} 
	
	public function getTitle(){
	 return $this->title;
	}
		public function getFields(){
		return $this->fields;
	}
	function getId(){
		return $this->id;
	}
	function getMenuID(){
		return $this->menu_ID;
	}
	function getColumnName(){
		return $this->columnName;
	}
	public function getName(){
		return $this->name;
	}
	function getType(){
		return $this->type;
	}
	function getValue(){
		return $this->value;
	}
	function getCequence(){
		return $this->sequence;
	}
	function isDisplay(){
		return $this->isDisplay;
	}
	function isMandatory(){
		return $this->isMandatory;
	}
	function isSameLine(){
		return $this->isSameLine;
	}
	function isPrimaryKey(){
		if($this->isReadOnly!=1)
			return "";
		else
			return "data-id=true";
		
	}
	function isReadOnly(){
		if($this->isReadOnly!=1)
			return "";
		else 
		return "readonly";
	}
	function getReference(){
		return $this->reference;
	}
}
