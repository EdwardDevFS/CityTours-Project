<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Sass/style.scss">
    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>City Tours App</title>
</head>
<body>
	<header class="w-100">
		<div class="p-4  ms-3 encabezado">
			<div class="izquierda">
				<h1 class="titulo">CITY <span style="color: rgb(255,172,0); font-size: 3.5rem; font-weight: bold">TOURS</span></h1>
				<h3>Visita nuestras oficinas a por<strong style="color: rgb(255,172,0);"> un buen viaje de vacaciones</strong></h3>
				<h3>Aquí podras encontrar algunos<strong style="color: rgb(255,172,0);"> lugares turisticos del Perú</strong></h3>
			</div>
			<div class="derecha">
				<h4>¿Tienes algúna sugerencia?</h4>
				<a class="btn btn-success" href="./secciones/registro.php">Añadir nuevo lugar turistico</a>
				
			</div>
		</div>
		
	</header>
	<section>
		<div class="every">

			<div class="row">
				<table class="table  table-simp">
					<thead>
						<tr>
							<th>Lugar Turístico</th>
							<th>Descripción</th>
							<th>Ciudad</th>
							<th>Teléfono</th>
							<th>Horario de Atención</th>
							<th>Imágenes</th>
							<th>Acciones</th>
						</tr>
					</thead>
					
					<tbody>
						<tr>
						<?php
							require_once "php/conexion.php";
							$pdo = conexion::connect();
							$sql = "SELECT * FROM lugares_turisticos ORDER BY ID DESC";
							

							foreach($pdo->query($sql) as $row){
								$img = $row['url'];
									echo "<td> {$row['lugar']} </td>";
									echo "<td> {$row['descripcion']} </td>";
									echo "<td> {$row['ciudad']} </td>";
									echo "<td> {$row['telefono']} </td>";
									echo "<td> {$row['horario']} </td>";
									echo "<td>
									
									<a href='#' data-bs-toggle='modal' data-bs-target='#exampleModal'><img src='{$img}'></a>";
									echo '
									';
							}
						?>
						<td class="actions">	
							<a href="./secciones/modificar.php">
								<button 
									class="edit" 
									data-bs-toggle="tooltip" 
									data-bs-placement="top"
									data-bs-custom-class="custom-tooltip"
									data-bs-title="Modificar">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-pencil-square" viewBox="0 0 16 16">
										<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
										<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
									</svg>
								</button>
							</a>
								<button 
									class="delete"
									id="deleted"
									data-bs-toggle="tooltip" 
									data-bs-placement="top"
									data-bs-custom-class="custom-tooltip"
									data-bs-title="Eliminar">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="white" class="bi bi-trash" viewBox="0 0 16 16">
											<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
											<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
									</svg>
								</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>	
	<!-- JavaScript Bundle with Popper -->
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
		crossorigin="anonymous" ></script>
	<script >
		const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
		const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
	</script>

	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script >
		let boton = document.getElementById('deleted');
		boton.addEventListener('click', function(){
			const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: 'btn btn-success',
				cancelButton: 'btn btn-danger'
			},
			buttonsStyling: false
			})

			swalWithBootstrapButtons.fire({
			title: '¿Estás seguro?',
			text: "Si acepta, se eliminará el archivo permanentemente",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonText: 'Sí, Elíminalo',
			cancelButtonText: 'No, Cancelar',
			reverseButtons: true
			}).then((result) => {
				if (result.isConfirmed) {
					swalWithBootstrapButtons.fire(
					'Afirmativo',
					'El archivo ha sido eliminado',
					'success'
					)
					console.log('a'+ <?php echo $img;?>);
					
				} 
			})
			})
	</script>
	<!--sweet alert -->
	
</body>
</html>