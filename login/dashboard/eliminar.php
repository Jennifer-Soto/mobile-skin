<?php
include"../conexion.php";
if(isset($_GET['id'])=="delete"){
    $nik=mysqli_real_escape_string($mysqli, (strip_tags($_GET["nik"],ENT_QUOTES)));
    $eliminar=mysqli_query ($mysqli, "DELETE FROM funda_celular WHERE id_funda= $nik");
    if($eliminar){
        echo"producto elimunado";
    }else{
        echo"error al eliminar el producto";
    }
}
?>