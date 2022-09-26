<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Compras</title>
    
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
<body background="bg-img.jpg">
     
<header class="header header_style_01">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.php"><img src="images/logos/funda-mobile.svg" alt="" width="150px" height="75px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="index.php">Inicio</a></li>
                        <li><a class="nav-link" href="#features">Nosotros</a></li>
                        <li><a class="nav-link" href="#screenshots">Portafolio</a></li>
                        <li><a class="nav-link" href="diseña.php">Diseña Aquí</a></li>
                        <!--<li><a class="nav-link" href="#pricing">Pricing</a></li>
                        <li><a class="nav-link" href="#testimonials">Clients</a></li>
                        <li><a class="nav-link" href="#purchase">Purchase</a></li>
						<li><a class="nav-link" href="#support">Support</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        <h1 style="color: white">HAZ TU COMPRA AQUÍ</h1>
    <form action="read.php" method ="post" >

        <label for="nombre" style="color: white">NOMBRE:</label><br>
        <input id = "nombre" type="text" placeholder = "Escriba su nombre" name="nombre" ><br><br>

        <label for="apellido" style="color: white">APELLIDO:</label><br>
        <input id = "apellido" type="text" placeholder = "Escriba su apellido" name="apellido" ><br><br>

        <label for="cedula" style="color: white">CÉDULA:</label><br>
        <input id = "cedula" type="number" placeholder = "Escriba su cedula" name="cedula" ><br><br>

        <label for="telefono" style="color: white">TELÉFONO:</label><br>
        <input id = "telefono" type="number" placeholder = "Escriba su telefono" name="telefono" ><br><br>

        <label for="direccion" style="color: white">DIRECCIÓN:</label><br>
        <input id = "direccion" type="text" placeholder = "Escriba su direccion" name="direccion" ><br><br>

        <label for="correo" style="color: white">CORREO:</label><br>
        <input id = "correo" type="text" placeholder = "Escriba su correo" name="correo" ><br><br>

    <button class="btn-primary"> Enviar </button>

    </form>
</body>
</html>