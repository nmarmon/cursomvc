<?php

class Universidad {
	private $aforo = array();
	private $kutxa;
	//Este es un atriburto de la clase Alumno, donde guardamos el objeto recibido (alumno a matricular).
	private $alumno;
	private static $matricula = 100;
	
	private function matricularse($cuota, $alumno){
		if (count($this->aforo)<=199){
			if ($cuota<100){
				echo "Debes de ingresar 100 € para matricularte";
			}else{
				$this->alumno = new Alumno($alumno);
				$this->llenar_aforo();
				$this->actualizar_kutxa($cuota);
			}//fin condicion de cuota
			
		}else{
			echo "No hay aforo, pasate el curso que viene";
		}//fin condicional aforo
	}
	
	private function llenar_aforo(){
		if (count($this->aforo)<=199){
			this->aforo[]=$this->alumno;
		}
	}
	
	private function cambiar_matricula(){
		
	}
	
	private function actualizar_kutxa($cuota){
		$this->kutxa = $this->kutxa + $cuota;
	}
	
	public function get_kutxa(){
		echo $this->kutxa;
	}
	
	
	public function mostrar_alumnos(){
		foreach ($aforo as $valor){
			echo $valor->nombre;
			echo "<br />";
			echo $valor->apellido1;
			echo "<br />";
			echo $valor->apellido2;
			echo "<br />";
			echo $valor->direccion[0]." Nº".$valor->direccion[1]." ".$valor->direccion[2];
			echo "<br />";
			echo $valor->DNI;
			echo "<br />";
			echo $this->NACIMIENTO;
			echo "<hr>";
			echo "<br />";
		}
	}

}
?>
