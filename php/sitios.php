<?php
	require_once "abstractOperations.php";

	class Sitios extends abstractOperations{
		private $id;
		private $lugar;
		private $descripcion;
		private $ciudad;
		private $telefono;
		private $horario;
		private $url;

		private $ultimoId;

		public function __construct(){
			parent::__construct();
		}

		public function poblarPropiedades(array $datos){
			$this->id = isset($datos['ID']) ? trim($datos['ID']) : 0;
			$this->lugar = isset($datos['lugar']) ? trim($datos['lugar']) : null;
			$this->descripcion = isset($datos['descripcion']) ? trim($datos['descripcion']) : null;
			$this->ciudad = isset($datos['ciudad']) ? trim($datos['ciudad']) : null;
			$this->telefono = isset($datos['telefono']) ? trim($datos['telefono']) : null;
			$this->horario = isset($datos['horario']) ? trim($datos['horario']) : null;
			$this->url = isset($datos['url']) ? trim($datos['url']) : null;
		}

		public function save(){
			$this->PDOAttribute();
			if($this->id==0){
				$sql = "INSERT INTO lugares_turisticos(ID, lugar, descripcion, ciudad, telefono, horario, url) VALUES(?,?,?,?,?,?,?)";
				$sqlInsertDatos = $this->pdo->prepare($sql);
				$sqlInsertDatos->execute(array(null,//para que haga un auto increment
										$this->lugar,
										$this->descripcion,
										$this->ciudad,
										$this->telefono,
										$this->horario,
										$this->url));
				$this->ultimoId=$this->pdo->lastInsertId();
			}else{
				//actualizar el registro
				$sql = "UPDATE lugares_turisticos
							SET lugar = ?,
                                descripcion = ?,
								ciudad = ?,
								telefono = ?,
								horario = ?,
								url = ?,
						WHERE ID = ?";
				$sqlUpdateDatos = $this->pdo->prepare($sql);
				$sqlUpdateDatos->execute(array(	$this->lugar,
												$this->descripcion,
												$this->ciudad,
												$this->telefono,
												$this->horario,
												$this->url,
												$this->id));
			}
		}

		public function load($id){
			$sql = "SELECT ID, lugar, descripcion, ciudad, telefono, horario, url FROM lugares_turisticos WHERE ID = ?";
			$sqlSelect = $this->pdo->prepare($sql);
			$sqlSelect->execute(array($id));
			$data = $sqlSelect->fetch(PDO::FETCH_ASSOC);
			foreach($data as $indice => $valor){
				$this->$indice = $valor;
			}
		}


		public function getId(){
			return $this->id;
		}

		public function getLugar(){
			return $this->lugar;
		}

		public function getDescripcion(){
			return $this->descripcion;
		}

		public function getCiudad(){
			return $this->ciudad;
		}

		public function getTelefono(){
			return $this->telefono;
		}
		public function getHorario(){
			return $this->horario;
		}
		public function getUrl(){
			return $this->url;
		}

		private function PDOAttribute(){
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}

		//Implementar la función/método delete
		public function delete(){
			$this->PDOAttribute();
			$sql = "DELETE FROM lugares_turisticos WHERE id = ?";
			$sqlEliminar = $this->pdo->prepare($sql);
			$sqlEliminar->execute(array($this->id));
			$this->load(array());
		}

		public function __destruct(){
			parent::__destruct();
		}
	}
?>