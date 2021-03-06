<?php

require("../config/config.php");

class conectorDB extends configuracion
{
	private static $conexion;
		
	public function __construct(){
		$this->conexion = parent::conectar(); //variable con la conexión
		return $this->conexion;										
	}
	
	public static function getInstance()
	{
		if (  !self::$conexion instanceof self)
		{
			self::$conexion = new self;
		}
		return self::$conexion;
	}
	 
	
	public function consultarBD($consulta, $valores = array()){  //funcion principal, ejecuta todas las consultas
		$resultado = false;
		
		if($statement = $this->conexion->prepare($consulta)){  //prepara la consulta
			if(preg_match_all("/(:\w+)/", $consulta, $campo, PREG_PATTERN_ORDER)){ //tomo los nombres de los campos iniciados con :xxxxx
				$campo = array_pop($campo); //inserto en un arreglo
				foreach($campo as $parametro){
					$statement->bindValue($parametro, $valores[substr($parametro,1)]);
				}
			}
			try {
				if (!$statement->execute()) { //si no se ejecuta la consulta...
					print_r($statement->errorInfo()); //imprimir errores
				}
				$resultado = $statement->fetchAll(PDO::FETCH_ASSOC); //si es una consulta que devuelve valores los guarda en un arreglo.
				
			}
			catch(PDOException $e){
				echo "Error de ejecución: \n";
				print_r($e->getMessage());
			}	
		}
		return $resultado;
		$this->conexion = null; 
	} 
}

class conSqlUpdate
{
 public function update($Tabla,$campo,$valor){
        $registrar = false; //variable de control
        $concat="";
        for($i=1;$i<count($campo);$i++){
        	if($i==count($campo)-1){
        		$concat.=$campo[$i]."='".$valor[$i]."'";
        	}
        	else{
        		$concat.=$campo[$i]."='".$valor[$i]."',";	
        	}
        }
		$consulta = "UPDATE $Tabla SET $concat WHERE $campo[0]='$valor[0]'";
		
		$valores = null;
		
		$oConexion = new conectorDB; //instanciamos conector
		$registrar = $oConexion->consultarBD($consulta, $valores);
		
		if($registrar !== false){
			return true;
		}
		else{
			return false;
		}
    }
}
class conSqlSelect
{

private static $resultado;
	
	public function __construct(){
		
	}
	
	public static function getInstance()
	{
		if (  !self::$resultado instanceof self)
		{
			self::$resultado = new self;
		}
		return self::$resultado;
	}
	public function obtResultado($tabla){
		//mysqlnd_qc_set_is_select("is_select");
		$consulta = "/*qc=on*/ SELECT * FROM $tabla";
		$valores = null;
		
		$oConectar = new conectorDB; 
		$this->resultado = $oConectar->consultarBD($consulta,$valores);
		
		return $this->resultado;
	}
	public function obtColumna($tabla){
		$consulta = "SHOW COLUMNS FROM $tabla";
		$valores = null;
		
		$oConectar = new conectorDB; 
		$this->resultado = $oConectar->consultarBD($consulta,$valores);
        
		return $this->resultado;
	} 
	public function acceso($tabla,$campo1,$valor1,$campo2,$valor2){
		$consulta = "SELECT * FROM $tabla WHERE $campo1 = '$valor1' and $campo2 = '$valor2'";
		$valores = null;
		
		$oConectar = new conectorDB; 
		$this->resultado = $oConectar->consultarBD($consulta,$valores);
        
		return $this->resultado;
	}	
	public function obtResultadomax($tabla,$campo){
		$consulta = "SELECT MAX($campo) as 'a' FROM $tabla";
		$valores = null;
		
		$oConectar = new conectorDB; 
		$this->resultado = $oConectar->consultarBD($consulta,$valores);
        
		return $this->resultado;
		
	} 	public function obtResultadord($tabla,$dato){
		$consulta = "SELECT * FROM $tabla order by $dato";
		$valores = null;
		
		$oConectar = new conectorDB; 
		$this->resultado = $oConectar->consultarBD($consulta,$valores);
        
		return $this->resultado;
	} public function obtResultadordx($tabla,$dato, $ord){
		$consulta = "SELECT * FROM $tabla order by $dato $ord";
		$valores = null;
		
		$oConectar = new conectorDB; 
		$this->resultado = $oConectar->consultarBD($consulta,$valores);
        
		return $this->resultado;
	} 

	public function obtResultadoW($tabla,$col_id,$text){
		$consulta = "SELECT * FROM $tabla where $col_id='$text'";
		$valores = null;
		
		$oConectar = new conectorDB; 
		$this->resultado = $oConectar->consultarBD($consulta,$valores);
        
		return $this->resultado;
	}

	public function obtDoble($tabla,$campo1,$campo2,$text1,$text2){
		$consulta = "SELECT * FROM $tabla where $campo1='$text1' and $campo2='$text2'";
		$valores = null;
		
		$oConectar = new conectorDB; 
		$this->resultado = $oConectar->consultarBD($consulta,$valores);
        
		return $this->resultado;
	} 
}
/**
* 
*/
class conSqlDelete
{
	public function delete($Tabla,$col, $id){
        $delete = false; //variable de control
		$consulta = "DELETE FROM $Tabla WHERE $col=$id";
		
		$valores = null;
		
		$oConexion = new conectorDB; //instanciamos conector
		$delete = $oConexion->consultarBD($consulta, $valores);
		
		if($delete !== false){
			return true;
		}
		else{
			return false;
		}
    }

}
class conSqlInsert
{		
	private $resultado;

   public function new_Record($Tabla,$campo,$valor){
        $registrar = false; //variable de control
        $concatV="";
        $matriz = array();
        for($i=0;$i<count($campo);$i++){
        	if($i==0){
        		$matriz[$campo[$i]] ='';
	        		$concatV.=":".$campo[$i].", ";	
        	}
        	else{
        		$matriz[$campo[$i]]=$valor[$i];
	        	if($i==count($campo)-1){
	        		$concatV.=":".$campo[$i];
	        	}
	        	else{
	        		$concatV.=":".$campo[$i].",";	
	        	}
	        }
	    }
	    
		$consulta = "INSERT INTO $Tabla VALUES ($concatV)";
	
	
		
		$oConexion = new conectorDB; //instanciamos conector
		$registrar = $oConexion->consultarBD($consulta, $matriz);
		
		if($registrar !== false){
			return true;
		}
		else{
			return false;
		}
    }

}