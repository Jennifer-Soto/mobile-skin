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

    
</head>
<body>
    <!-- Barra de navegación -->
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
                            <li><a class="nav-link" href=""></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div id="home" class="parallax first-section"  style="background-image:url('uploads/bg-img.jpg');  ">
            <div style="display:flex; justify-content: center;">
                <h1 style="color: white;  font-size:80px; " >HAZ TU COMPRA AQUÍ</h1>
            </div>
            <!-- Formulario -->
            <form action="read.php" method ="post" class = " form-style "  >
                
                <label for="nombre" style="color: white">NOMBRE:</label><br>
                <input class="campo-input" id = "nombre" type="text" placeholder = "Escriba su nombre" name="nombre" ><br><br>
                
                <label for="apellido" style="color: white">APELLIDO:</label><br>
                <input class="campo-input" id = "apellido" type="text" placeholder = "Escriba su apellido" name="apellido" ><br><br>
                
                <label for="cedula" style="color: white">CÉDULA:</label><br>
                <input class="campo-input" id = "cedula" type="number" placeholder = "Escriba su cedula" name="cedula" ><br><br>
                
                <label for="telefono" style="color: white">TELÉFONO:</label><br>
                <input class="campo-input" id = "telefono" type="number" placeholder = "Escriba su telefono" name="telefono" ><br><br>
                
                <label for="direccion" style="color: white">DIRECCIÓN:</label><br>
                <input class="campo-input" id = "direccion" type="text" placeholder = "Escriba su direccion" name="direccion" ><br><br>
                
                <label for="correo" style="color: white">CORREO:</label><br>
                <input class="campo-input" id = "correo" type="text" placeholder = "Escriba su correo" name="correo" ><br><br>
                
                <button class="btn-primary"> Enviar </button>
                
            </form>
        </div>     
        </body>
        </html>