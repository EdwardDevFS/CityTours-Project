<?php
	require_once "../php/sitios.php";
	$lugar = new Sitios();

	if(!empty($_GET)){
		$lugar->load($_GET['id']);

	}

	if(!empty($_POST)){
		$lugar->load($_POST['id']);
		$lugar->delete();
		// header('Location: http://localhost/CityTours-Project/index.php');
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
	<div class="container">
			<div class="span10 offset1">
				<div class="row">
					<h3>Eliminar Lugar</h3>
				</div>
			</div>

			<form class="form-horizontal" action="borrar_lugar.php" method="POST">
				<input type="text" name="id" value="<?php echo $lugar->getId(); ?>">
				<p class="alert alert-error">Estas seguro de Eliminar es lugar turistico 
						<?php
							echo $lugar->getLugar();
						?>
				</p>

				<div class="form-actions">
					<button type="submit" class="btn btn-danger">Si</button>
					<a class="btn btn-default" href="http://localhost/CityTours-Project/index.php">No</a>
				</div>
			</form>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
		crossorigin="anonymous" defer></script>
</body>
</html>
