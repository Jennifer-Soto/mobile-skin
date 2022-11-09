<?php
$nombre="n";
$usuarios="u";
$contraseña="m";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate:</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../style.css">    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="../css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
</head>
<body>
<header class="header header_style_01" >
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href=../index.php><img src="../images/logos/funda-mobile.svg" alt="" width="200px" height="100px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
					
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <!--<li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#team">Nosotros</a></li>
                        <li><a class="nav-link" href="#screenshots">Portafolio</a></li>
                        <li><a class="nav-link" href=""></a></li>
                        <li><a class="nav-link" href="formulario.php"><img src="images/carritoxd.png" alt="image" width="30px" height="30px"/></a></li>-->
                        <li><a class="nav-link active" href="../index.php"> <button class="btn btn-primary ">Salir</button>    </a></li>
                        <li><a class="nav-link active" href="login.php"> <button class="btn btn-primary ">Iniciar</button>    </a></li>
						<!--<li><a class="nav-link" href="#support">Support</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="home" class="parallax first-section"  style="background-image:url('../uploads/bg-img.jpg');  ">
        <!--<div style="display:flex; justify-content: center;">
            <h1 style="color: white;  font-size:80px; " >Cree su cuenta:</h1>
        </div>-->
        <div class=container>      
            <div style="display:flex; justify-content: center;">
                <h1 style="color: white;  font-size:80px; " >Registrate</h1>
            </div>

            <form action="registro.php" method="post" class="form-style">
                <label for="nombre" style="color: white" class="col-sm-2 control-label">Nombre: </label>
                <input type="text" class="form-control" placeholder = "Escriba su nombre" name="nombre" ><br>
                <label for="usuario" style="color: white" class="col-sm-2 control-label">Usuario: </label>
                <input type="text" class="form-control" placeholder = "Escriba su usuario" name="usuarios" ><br>
                <label for="password" style="color: white" class="col-sm-2 control-label">Contraseña: </label>
                <input type="password" class="form-control" placeholder = "Escriba su contraseña" name="password" ><br>
                <div class="col-sm-offset-2 col-sm-2">
                    <button type="submit" class="btn btn-default">crear</button>
                </div>     

            <form action="" method="post" class="form-style">
                <label for="nombre" style="color: white" class="col-sm-2 control-label">Nombre: </label>
                <input type="text" class="form-control" placeholder = "Escriba su nombre" name="nombre" ><br>
                <label for="usuario" style="color: white" class="col-sm-2 control-label">Usuario: </label>
                <input type="text" class="form-control" placeholder = "Escriba su usuario" name="usuario" ><br>
                <label for="password" style="color: white" class="col-sm-2 control-label">Contraseña: </label>
                <input type="password" class="form-control" placeholder = "Escriba su contraseña" name="password" ><br>

                <button type="submit" class="btn btn-default">crear</button>
                

            </form>
        </div>
  </div>  
</body>
</html>
<?php
/*Aqui incluimos la conexion*/
    include("conexion.php");

    /*Aqui traemos los datos pedidos en el formulario html*/
        $nombre = $_POST['nombre'];
        $usuarios = $_POST['usuarios'];
        $contraseña = $_POST['password'];
        
    /*Insertamos los datos de las variables en el servidor*/
    if($contraseña == "m"){

    }else{
    $insertar= "INSERT INTO usuario(nombre, usuarios, contraseña, tipo_usuario) values ('$nombre', '$usuarios', '$contraseña', '2')";
    }
   if ($mysqli->query($insertar) === true){
        echo "Excelente";
    }
    else {
        echo "Pésimo trabajo";
    }
    echo "<br>"; 

?>
