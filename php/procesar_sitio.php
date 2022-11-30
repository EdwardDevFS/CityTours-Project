<?php
	require_once "sitios.php";

	if(!empty($_REQUEST)){
		$usuario = new Sitios();
		$usuario->poblarPropiedades($_REQUEST);
		$usuario->save();

		header("Location: http://localhost/CityTours-Project/index.php");
	}
?>