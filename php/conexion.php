<?php
	
    class conexion{
		private static $base_datos = "CityTours";
		private static $servidor = "localhost";
		private static $username = "root";
		private static $password="";

		private static $conexionUnica = null;
		
		public static function connect(){
			if(self::$conexionUnica == null){
				try{
					self::$conexionUnica = new PDO("mysql:host=".self::$servidor.";"."dbname=".self::$base_datos,self::$username, self::$password);
                    
				}catch(PDOException $e){
					die($e->getMessage());
				}
			}
			return self::$conexionUnica;
		}

		public static function disconnect(){
			self::$conexionUnica = null;
		}
    }
?>