<?php
	class encomienda_model{
		
		//Declaramos atributos privados
		private $db;
		private $encomienda;

	 
		//Declaramos un constructor que sirve para incializar los atributos
		public function __construct(){
			
			//Asignamos al atributo db el valor del metodo conexion() de la clase Conectar
			//Conectar es la clase y conexion es el metodo
			$this->db = Conectar::conexion();
			//Determinamos que el atributo personas será un array
			$this->encomienda = array();
			
		}
		
		//Declaramos un metodo para obtener todos los registros de personas
		public function getEncomienda(){
			
			$sql = "SELECT * FROM encomienda";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				//Asignamos al atributo personas el resultado de la consulta
				$this->encomienda[]=$filas;
			}
			//El método devuelve el array resultante
			return $this->encomienda;
			
		}

	}
?>