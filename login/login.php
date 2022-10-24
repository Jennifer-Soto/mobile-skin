<?php
require"conexion.php";

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
        $pass_c= sha1($contraseña);

        if($contraseña_bd == $pass_c){
            $_SESSION['user_id']=$row['user_id'];
            $_SESSION['nombre']=$row['nombre'];
            $_SESSION['tipo_usuario']=$row['tipo_usuario'];
            
            header("LOCATION:index.php");

        }else{
            echo"la contraseña es incorrecta";
        }

    }else{
        echo"NO EXISTES, Y NADIE TE QUIERE";
    }
}
?>
<?php
  session_start();
 
  // Obtengo los datos cargados en el formulario de login.
  /*$usuario = $_POST['usuaro'];
  $password = $_POST['password'];
   
  // Esto se puede remplazar por un usuario real guardado en la base de datos.
  if($email == 'admin@xd.com' && $password == '1234'){
    // Guardo en la sesión el email del usuario.
    $_SESSION['email'] = $email;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: dashboard/index.html"); 
  }else{
    echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
  }*/
  session_destroy();
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
    </div>
  </body>
</html>