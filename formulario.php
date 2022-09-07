<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Compras</title>
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>
<header class="header header_style_01">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.php"><img src="images/logos/logo-app.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="index.php">Home</a></li>
                        <li><a class="nav-link" href="#features">Caracteristicas</a></li>
                        <li><a class="nav-link" href="#screenshots">Imagenes</a></li>
                        <li><a class="nav-link" href="#team">Nosotros</a></li>
                        <!--<li><a class="nav-link" href="#pricing">Pricing</a></li>
                        <li><a class="nav-link" href="#testimonials">Clients</a></li>
                        <li><a class="nav-link" href="#purchase">Purchase</a></li>
						<li><a class="nav-link" href="#support">Support</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        <h1>HAZ TU COMPRA AQUÍ</h1>
    <form action="" method = "post" >

        <label for="nombre">NOMBRE:</label>
        <input id = "nombre" type="text" placeholder = "Escriba su nombre" name="nombre" >.<br>

        <label for="apellido">APELLIDO:</label>
        <input id = "apellido" type="text" placeholder = "Escriba su apellido" name="apellido" >.<br>

        <label for="cedula">CÉDULA:</label>
        <input id = "cedula" type="number" placeholder = "Escriba su cedula" name="cedula" >.<br>

        <label for="telefono">TELÉFONO:</label>
        <input id = "telefono" type="number" placeholder = "Escriba su telefono" name="telefono" >.<br>

        <label for="direccion">DIRECCIÓN:</label>
        <input id = "direccion" type="text" placeholder = "Escriba su direccion" name="direccion" >.<br>

        <label for="correo">CORREO:</label>
        <input id = "correo" type="text" placeholder = "Escriba su correo" name="correo" >.<br>

    <button> Enviar </button>

    </form>
</body>
</html>