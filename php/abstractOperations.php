<?php
	require_once "Conexion.php";

	abstract class abstractOperations{
		protected $pdo;

		public function __construct(){
			$this->pdo = conexion::connect();
		}

		abstract public function poblarPropiedades(array $datos);

		abstract public function save();
		
		abstract public function delete();

		abstract public function load($id);


		public function __destruct(){
			$this->pdo = conexion::disconnect();
		}
	}
?>