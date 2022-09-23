<?php
  session_start();
   
  // Elimina la variable email en sesión.
  unset($_SESSION['email']); 
 
  // Elimina la sesion.
  session_destroy();
   
  // Redirecciona a la página de login.
  header("HTTP/1.1 302 Moved Temporarily"); 
  header("Location: index.html");
?>
<?php
  session_start();
 
  // Obtengo los datos cargados en el formulario de login.
  $email = $_POST['email'];
  $password = $_POST['password'];
   
  // Esto se puede remplazar por un usuario real guardado en la base de datos.
  if($email == 'admin@xd.com' && $password == '1234'){
    // Guardo en la sesión el email del usuario.
    $_SESSION['email'] = $email;
     
    // Redirecciono al usuario a la página principal del sitio.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: ../index.php"); 
  }else{
    echo 'El email o password es incorrecto, <a href="index.html">vuelva a intenarlo</a>.<br/>';
  }
 
?>