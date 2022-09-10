<?php 

    include("conexion.php");

    /*Aqui traemos los datos pedidos en el formulario html*/
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $cedula = $_POST['cedula'];
      $telefono = $_POST['telefono'];
      $direccion = $_POST['direccion'];
      $correo = $_POST['correo'];

    /* insert dentro de una bd */

        $insertar = "INSERT INTO cliente(nombre, apellido, cedula, telefono, direccion, correo) values ('$nombre', '$apellido', '$cedula', '$telefono', '$direccion' ,'$correo')";
        if ($mysqli->query($insertar) === true) {
            echo "parce lo agregamos";
          } else {
            echo "Error:" . $sql . "<br>" . $mysqli->error;
          } 
?>