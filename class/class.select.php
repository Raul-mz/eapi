<?php
class conSqlSelect {
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
		$consulta = "SELECT * FROM $tabla";
		$valores = null;

		$oConectar = conectorDB::getInstance();
		$this->resultado = $oConectar->consultarBD($consulta,$valores);

		return $this->resultado;
	}

	public function obtResultadord($tabla,$dato){
		$consulta = "SELECT * FROM $tabla order by $dato";
		$valores = null;

		$oConectar = conectorDB::getInstance();
		$this->resultado = $oConectar->consultarBD($consulta,$valores);

		return $this->resultado;
	}

	public function obtResultadoW($tabla,$col_id,$text){
		$consulta = "SELECT * FROM $tabla where '$col_id'='$text'";
		$valores = null;

		$oConectar = conectorDB::getInstance();
		$this->resultado = $oConectar->consultarBD($consulta,$valores);

		return $this->resultado;
	}

	public function obtDoble($tabla,$campo1,$campo2,$text1,$text2){
		$consulta = "SELECT * FROM $tabla where $campo1='$text1' and $campo2='$text2'";
		$valores = null;

		$oConectar = conectorDB::getInstance();
		$this->resultado = $oConectar->consultarBD($consulta,$valores);

		return $this->resultado;
	}
}
?>