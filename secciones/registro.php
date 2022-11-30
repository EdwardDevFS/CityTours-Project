<?php
	require_once "../php/sitios.php";
	$lug_t = new Sitios();

	if(!empty($_GET)){
		$lug_t->load($_GET['id']);
	}else{
		$lug_t->poblarPropiedades(array());
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
		rel="stylesheet" 
		integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
		crossorigin="anonymous">
    <!-- Link to css citytours -->
    <link rel="stylesheet" href="../Sass/registro.scss">
    <title>Registro</title>
</head>
<body>
    
    <header class="contenedor-header">
        <nav class="navBar">
            <h1 class="title-form-login text-center">City<span style="color: rgb(255,172,0);">Tours</span></h1>
            <small class="text-center">A disposición de las <span style="color: rgb(255,172,0);">necesidades del cliente.</span></small>
        </nav>
    </header>
    <main class="w-100 main-form">
        <div class="content-form">
            <div class="left-f">
                <div class="cuadro-form">
                    <div class="form-login">
                        <form class="needs-validation"  action="../php/procesar_sitio.php" data-toggle="validator" method="POST" novalidate>
                            <div class="intro-form m-2 px-4">
                                <h2 class="title-form-login text-center">Regi<span style="color: rgb(255,172,0);">stro</span></h2>
                                <br>
                                <div class="form-input mb-2">
                                    <label for="floatingInput">Lugar Turístico</label>
                                    <input type="text" class="form-control text-bg-dark input-form" value="<?php echo $lug_t->getLugar(); ?>" name="lugar" id="validationCustom03" required>
                                </div>
                                <div class="form-input mb-2">
                                    <label for="floatingPassword ">Descripción</label>
                                    <input type="text" class="form-control text-bg-dark input-form" value="<?php echo $lug_t->getDescripcion(); ?>" name="descripcion" id="validationCustom05" required>
                                </div>
                                <div class="form-input mb-2">
                                    <label for="floatingPassword">Ciudad</label>
                                    <input type="text" class="form-control text-bg-dark input-form" value="<?php echo $lug_t->getCiudad(); ?>" name="ciudad" id="validationCustom05" required>
                                </div>
                                <div class="form-input mb-2">
                                    <label for="floatingPassword ">Teléfono</label>
                                    <input type="text" class="form-control text-bg-dark input-form" value="<?php echo $lug_t->getTelefono(); ?>" name="telefono" id="validationCustom05" required>
                                </div>
                                <div class="form-input mb-2">
                                    <label for="floatingPassword ">Horario de Atención</label>
                                    <input type="text" class="form-control text-bg-dark input-form" value="<?php echo $lug_t->getHorario(); ?>" name="horario" id="validationCustom05" required>
                                </div>
                                <div class="form-input mb-2">
                                    <label for="floatingPassword ">Imágenes</label>
                                    <input type="text" class="form-control text-bg-dark input-form" value="<?php echo $lug_t->getUrl(); ?>" name="url" id="validationCustom05" required>
                                </div>
                                <div class="mt-2 d-flex down-form">
                                    <a href="../index.php"><small>Volver Atras</small></a>
                                    <button id="btn-login" class="btn btn-dark boton-login" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="right-f">
                <div class="mark-2">
                    <h2>¡Inicia sesión para conectarte a un nuevo universo! <br> <span>楽しんでください！</span></h2>
                </div>
            </div>
        </div>
    </main>
    





    <script 
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" 
		integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" 
		crossorigin="anonymous" defer>
	</script>
</body>
</html>