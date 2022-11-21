<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("LOCATION: ../index.php");
}
$nombre = $_SESSION['nombre'];
include"../conexion.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mobile-Skin Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>.form-style{ display: flex; align-items: center; flex-direction: column;} </style>
    
    
    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                <img src="../../images/logos/funda-mobile.svg" alt="" width="70px" height="35px">
                </div>
                <div class="sidebar-brand-text mx-3">Mobile <sup>Skin</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <img src="../../images/logos/dashboard.png" alt="" width="18px" height="18px">
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Cambios
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="index.php" data-toggle="collapse" data-target="#collapse"
                    aria-expanded="true" aria-controls="collapsedos">
                    <img src="../../images/logos/mobil.png" alt="" width="18px" height="18px">
                    <span>regresar</span>
                </a>
                <!-- <div id="collapsedos" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Dispositivos:</h6>
                        <a class="collapse-item" href="apple.php">Apple</a>
                        <a class="collapse-item" href="huawei.php">Huawei</a>
                        <a class="collapse-item" href="samsung.php">Samsung</a>
                        <a class="collapse-item" href="xioami.php">Xiaomi</a>
                    </div>
                </div> -->
            </li>
           
            <!-- Nav Item - Utilities Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Funciones
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <!--<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Usuaro admin</span>
                </a>
                <!-- <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div> 
            </li>-->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="admin.php">
                    <img src="../../images/logos/admin.png" alt="" width="18px" height="18px">
                    <span>Usuarios Admin</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="usuarios.php">
                    <img src="../../images/logos/user.png" alt="" width="15px" height="15px">
                    <span>Usuarios</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            <li>
                <img src="../../images/logos/.png" alt="" width="15px" height="15px">  
            </li>
            <!-- Sidebar Message -->
            <!-- <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>
 -->
        </ul>
    
        <form action="" method="post" class="form-style">             
                <label for="usuario" style="color: white" class="col-sm-5 control-label">Usuario: </label>
                <input type="text" class="form-control" placeholder = "ingrese el color" name="color" ><br>
                <select name="modelo">
                    <option value="value 1">Seleccione el modelo</option>        
                    <option value="Huawei Mate 20 lite">Mate 20 lite</option>
                    <option value="Huawei Y9 2019">Y9 2019</option>
                    <option value="Huawei P30 Lite">P30 Lite</option>
                </select>
                <label for="password" style="color: white" class="col-sm-1 control-label">Contraseña: </label>
                <input type="text" class="form-control" placeholder = "ingrese la url" name="img" ><br>
                <div class="col-sm-offset-1 col-sm-1">
                    <button type="submit" class="btn btn-primary" name="guardar">crear</button>
                </div>     
            </form>
            <div class="col-md-6">
                <?php include"coloresiphone.php";?>
            </div> 
            
        </div>
        
</body>
<?php
/*Aqui traemos los datos pedidos en el formulario html*/
if(isset($_POST['guardar'])){
    $color = mysqli_real_escape_string($mysqli, (strip_tags($_POST["color"],ENT_QUOTES)));
    $modelo = mysqli_real_escape_string($mysqli, (strip_tags($_POST["modelo"],ENT_QUOTES)));
    $img = mysqli_real_escape_string($mysqli, (strip_tags($_POST["img"],ENT_QUOTES)));

    $insert=mysqli_query($mysqli, "INSERT INTO funda_celular(color, img, modelo) values ('$color', '$img', '$modelo')");
    if($insert){
        echo"dato guardado";
    }else{
        echo"error al guardar";
    }
}


/*Insertamos los datos de las variables en el servidor*/


?>