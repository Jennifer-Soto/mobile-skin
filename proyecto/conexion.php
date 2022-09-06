/* Aquí se conecta la base de datos */

<?php
$ mysqli = new mysqli(" localhost ", " root ", "", " mobile-skin ");
if ( $ mysqli -> connect_errno ) {
    echo " Fallo al conectar a MySQL: ( " . $ mysqli -> connect_errno . " ) " . $ mysqli -> conectar_error ;
}
?>