<?php
 
class Alumnos {
	private $nombre;
	private $apellido1;
	private $apellido2;
	private $direccion = array();
	private const $DNI;
	private const $NACIMIENTO = array();
	private $edad = array();
	
	private function __construct($name, $apellido1, $apellido2, $direccion, $dni, $nacimiento){
		$this->nombre = $name;
		$this->apellido1 = $apellido1;
		$this->apellido2 = $apellido2;
		$this->direccion = $direccion;
		$this->DNI = $dni;
		$this->NACIMIENTO = $nacimiento;
		$this->obtener_edad();
	}
	
	public function obtener_edad(){
		$timestamp_actual = time();
		$dias_edad = date_diff($this->NACIMIENTO,$timestamp_actual);
		$anos_con_decimales = $dias_edad / 365.25;
    	$anos = int($anos_con_decimales);
    	$dias_restantes = $anos_con_decimales - $anos;
		$dias = $dias_restantes * 365.25 / 100;
		
		$this->edad[0]= $anos;
		$this->edad[1]= $dias;
		
		//return $this->edad;
	}
	
	

}

?>
