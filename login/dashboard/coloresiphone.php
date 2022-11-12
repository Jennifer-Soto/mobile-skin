<?php
include '../conexion.php';
$sql=mysqli_query($mysqli, "SELECT color, img, modelo FROM funda_celular");

while ($datos=mysqli_fetch_assoc($sql)){
echo '<div class="card" style="width: 18rem;">
<img src="'.$datos['img'].'" class="card-ing-top" alt="...">
<div class="card-body">
<h5 class="card-title"'.$datos['modelo'].'</h5>
<a ref="#" class="btn btn-prinary">Go somewhere</a>
</div>
</div>';
}
?>