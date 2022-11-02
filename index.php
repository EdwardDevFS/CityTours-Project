<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	<title>City Tours App</title>
</head>
<body>
	
	<section>
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
		Launch demo modal
		</button>

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		
			<div class="modal-content">
			<div class="modal-header">
				<?php
					echo "<h1 class='modal-title fs-5' id='exampleModalLabel'>MACHU PICCHU</h1>";
					
				?>
				
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<?php
					$img = $row['URL'];
					echo "<img src='{$img}'>"
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
			</div>
		</div>
		
		</div>
	</section>
	<div class="m-5">
		<div class="row">
			<h1 class="title" style="color:blue;">CITY TOURS</h1>
			<h3>Visita nuestras oficinas a por un buen viaje de vacaciones</h3>
			<br>
			<h3>Aquí podras encontrar algunos lugares turisticos del Perú</h3>
			<br>
				<a href="editoriales.php">Editoriales</a>
				<br>
				<a href="libros.php">Libros</a>
			<br>
			<br>
			<br>
				<a class="btn btn-success" href="crear_usuario.php">Crear Usuario</a>
		</div>
		
		<div class="row">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Lugar Turistico</th>
						<th>Descripcion</th>
						<th>Ciudad</th>
						<th>Telefono</th>
						<th>Horario de Atencion</th>
						<th>imagenes</th>
					</tr>
				</thead>
				
				<tbody>
					<?php
						require_once "php/conexion.php";
						$pdo = conexion::connect();
						$sql = "SELECT * FROM lugares_turisticos ORDER BY id_lugar DESC";
						

						foreach($pdo->query($sql) as $row){
							$img = $row['URL'];
							echo "<tr>";
								echo "<td> {$row['nombre_lugar']} </td>";
								echo "<td> {$row['descripcion']} </td>";
								echo "<td> {$row['ciudad']} </td>";
								echo "<td> {$row['telefono']} </td>";
								echo "<td> {$row['hora_atencion']} </td>";
								echo "<td>
								
								<a href='#' data-bs-toggle='modal' data-bs-target='#exampleModal'><img src='{$img}'></a>
									
									</td>";
								// echo "<td> 
								// 	// <a class='btn btn-default' href='mostrar_usuario.php?id={$row['id']}'>Mostrar</a>
								// 	// <a class='btn btn-success' href='crear_usuario.php?id={$row['id']}'>Actualizar</a>
								// 	// <a class='btn btn-danger' href='eliminar_usuario.php?id={$row['id']}'>Eliminar</a>
								//  	</td>";
							echo "</tr>";
						}
					?>
				</tbody>
			</table>
		</div>
	</div>	
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>