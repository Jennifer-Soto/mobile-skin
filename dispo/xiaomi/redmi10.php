<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>redmi 10</title>

    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../../style.css">    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="../../css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../css/custom.css">
    <link rel="stylesheet" href="../../css/formulario.css">

</head>
<body>
    <!-- Barra de navegación -->
    <header class="header header_style_01">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="../../images/logos/funda-mobile.svg" alt="" width="150px" height="75px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                        <ul class="navbar-nav">
                            <li><a class="nav-link active" href="index.php">Inicio</a></li>
                            <li><a class="nav-link" href="#features">Nosotros</a></li>
                            <li><a class="nav-link" href="#screenshots">Portafolio</a></li>
                        </ul>
                    </div>
            </div>
        </nav>
        <div class="container col-lg-12" style=" display:flex; ">

<div class="col-md-5 col-lg-6">
    <div>
    <br><h3>ESCOGE EL COLOR DE TU FUNDA </h3>
        
                <button class="btn btn-primary " style="height: 30px; background-color:#FF0000;"></button>
                <button class="btn btn-primary " style="height: 30px; background-color:;"></button><br>
                <button class="btn btn-primary " style="height: 30px; background-color:;"></button>
                <button class="btn btn-primary " style="height: 30px; background-color:;"></button>
        <form action="mate.php" method="post">
            <br><h3>AGREGAR UN TEXTO</h3>
       
            <input name="texto" type="text" placeholder="texto ">
            <input type="color" name="color"> 
            <button>Enviar</button>
        </form>
        <br><h3>HAZ TU COMPRA AQUI</h3>
        <a class="nav-link" href="login/login.php"><img src="../../images/carritoxd.png" alt="image" width="30px" height="30px"/></a>
       </div>  
   </div>
   <div class="col-md-5 col-lg-6">
       <div class="card">
           <img class="card-img-top" src="../../uploads/xiaomi-note-10-pro.png" style = "object-fit:scale-down; " alt="700px" width="700px" height = " 700px "> 
           <h1 style="position:absolute; top:450px; left: 300px; font-size:40px; "><?php echo  "<p style=' color: $color'> $texto</p>" ?></h1>
           </div>  
   </div>   
</div>
</body>
</html>