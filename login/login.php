<?php
require"conexion.php";
session_start();
if($_POST){
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['password'];
    $sql = "SELECT user_id, contraseña, usuarios, nombre, tipo_usuario FROM usuario WHERE usuarios='$usuario'";

    $resultado = $mysqli->query($sql);
    //echo $sql;
    $num=$resultado->num_rows;

    if($num>0){
        $row = $resultado ->fetch_assoc();
        $contraseña_bd = $row['contraseña'];
        $pass_c= $contraseña;

        if($contraseña_bd == $pass_c){
            $_SESSION['user_id']=$row['user_id'];
            $_SESSION['nombre']=$row['nombre'];
            $_SESSION['tipo_usuario']=$row['tipo_usuario'];
            if($_SESSION['tipo_usuario']==1){
              header("LOCATION:dashboard/index.php");
            }else{
              header("LOCATION: ../inicio/index.php");
            }
        }else{
            echo"la contraseña es incorrecta";
        }

    }else{
        echo"NO EXISTES, Y NADIE TE QUIERE";
    }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login en PHP</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../style.css">    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="../css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!--<style>
      .container{margin-top:100px}
    </style>-->
  </head>
  <body>
  <header class="header header_style_01">
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
						<!--<li><a class="nav-link" href="#support">Support</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="home" class="parallax first-section"  style="background-image:url('../uploads/bg-img.jpg');  ">
            <div style="display:flex; justify-content: center;">
                <h1 style="color: white;  font-size:80px; " >Inicio de seccion</h1>
            </div>
    <div class="container">
      <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="usuario" id="inputName" placeholder="Email" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="inputPassword3" placeholder="Password" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Sign in</button>
          </div>
        </div>
      </form>
      <a href="registro.php"><h5>Cree su cuenta aqui</h5></a>
    </div>
  </body>
</html>