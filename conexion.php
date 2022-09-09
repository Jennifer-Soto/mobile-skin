<?php
/*conexion con la base de datos*/
$mysqli = new mysqli("localhost", "root", "", "mobile-skin");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}



?>