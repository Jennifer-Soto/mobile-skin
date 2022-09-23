<?php 

  include("conexion.php");

    /*Aqui traemos los datos pedidos en el formulario html*/
<<<<<<< HEAD
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $cedula = $_POST['cedula'];
  $telefono = $_POST['telefono'];
  $direccion = $_POST['direccion'];
  $correo = $_POST['correo'];
=======
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $cedula = $_POST['cedula'];
      $telefono = $_POST['telefono'];
      $direccion = $_POST['direccion'];
      $correo = $_POST['correo'];
>>>>>>> b22e24c8895855a2637ea758efd3502f4070bfc4

    /* insert dentro de una bd */

<<<<<<< HEAD
  $insertar = "INSERT INTO cliente(nombre, apellido, cedula, telefono, direccion, correo) values ('$nombre', '$apellido', '$cedula', '$telefono', '$direccion' ,'$correo')";
  if ($mysqli->query($insertar) === true) {
      echo "parce lo agregamos";
  } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
      } 
=======
        $insertar = "INSERT INTO cliente(nombre, apellido, cedula, telefono, direccion, correo) values ('$nombre', '$apellido', '$cedula', '$telefono', '$direccion' ,'$correo')";
        if ($mysqli->query($insertar) === true) {
            echo "parce lo agregamos";
          } else {
            echo "Error:" . $sql . "<br>" . $mysqli->error;
          } 
>>>>>>> b22e24c8895855a2637ea758efd3502f4070bfc4
?>