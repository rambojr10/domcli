<?php 
	require_once '../model/conexion.php';
	/**
	 * 
	 */
	class tabla_model extends conexion
	{
		private $basedatos;
		public function __construct(){
			$this->basedatos = $this->conectar();
		}

		public function datos(){
			$datos = $this->basedatos->prepare("SELECT * FROM tblusuarios");
			$datos->execute();
			return $datos->fetchAll();
		}
	}
?>