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
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <style>
      .container{margin-top:100px}
    </style>
  </head>
  <body>
    <h1 style="text-align:center;">Inicio de sesión</h1>
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
      <form action="../index.php" method="post">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Inicio</button>
        </div>
      </form>
    </div>
  </body>
</html>