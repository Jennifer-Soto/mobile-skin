<?php
include"../conexion.php";
if(isset($_GET['funda']) == 'update'){
    $nik=mysqli_real_escape_string($mysqli, (strip_tags($_GET["nikup"],ENT_QUOTES)));
    $sql=mysqli_query ($mysqli, "SELECT id_funda, color, img, modelo FROM funda_celular WHERE id_funda= $nik");
    if(mysqli_num_rows($sql)==0){
        header ('location:apple.php');
    }else{
        $row=mysqli_fetch_assoc($sql);
    }   
}
echo $row['modelo']
?>