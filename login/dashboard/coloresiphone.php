<?php
include '../conexion.php';
$sql=mysqli_query($mysqli, "SELECT id_funda, color, img, modelo FROM funda_celular");
$iphone=mysqli_fetch_assoc($sql);
if($iphone['modelo'] == "Iphone 12 PRO MAX" || $iphone['modelo'] == "Iphone 13 PRO MAX" || $iphone['modelo'] == "Iphone 14 PRO MAX"){
    while ($datos=mysqli_fetch_assoc($sql)){
        echo '<div class="card" style="width: 50%;">
        <img src="'.$datos['img'].'" class="card-ing-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">"'.$datos['modelo'].'"</h5>
        <a href="eliminar.php?id=delete&nik='.$datos['id_funda'].'" class="btn btn-danger"><img src="../../images/logos/basura.png" alt="" width="20px" height="20px"></a>
        <a href="actualizar.php?funda=&nikup='.$datos['id_funda'].'" class="btn btn-warning"><img src="../../images/logos/lapiz.png" alt="" width="20px" height="20px"></a>
        </div>
        </div>';
    }
}else{
    echo"No hay diseños para Iphone";
}
?>