<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseña</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS 
    <link rel="stylesheet" href="css/responsive.css">-->
    <!-- Custom CSS 
    <link rel="stylesheet" href="css/custom.css">-->

    <link rel="stylesheet" href="css/formulario.css">
</head>
<body>
    <header class="header header_style_01">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="index.php"><img src="images/logos/funda-mobile.svg" alt="" width="150px" height="75px"></a>
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
                        <li><a class="nav-link" href="#team">Diseña Aquí</a></li>
                        <li><a class="nav-link" href="formulario.php"><img src="images/carritoxd.png" alt="image" width="30px" height="30px"/></a></li>
                        <!--<li><a class="nav-link" href="#pricing">Pricing</a></li>
                        <li><a class="nav-link" href="#testimonials">Clients</a></li>
                        <li><a class="nav-link" href="#purchase">Purchase</a></li>
						<li><a class="nav-link" href="#support">Support</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div id="home" class="parallax first-section"  style="background-image:url('uploads/bg-img.jpg');  ">
            <div style="display:flex; justify-content: center;">
                <h1 style="color: white;  font-size:80px; " >ELIGE TU MARCA</h1>
            </div>
<div class="container">
    <div class="row">
    <div class="col-md-3">
<div class="card">
    <img class="card-img-top" src="images/marca/apple-logo.png" style = "object-fit:scale-down; " alt="200" width="200px" height = " 200px "> 
    <div class="card-body">
        <select name="select" class= "btn-primary">
  <option value="value1">Iphone 12 PRO</option>
  <option value="value2">iphone 13 PRO MAX</option>
  <option value="value3">Iphone 14 PRO MAX</option>
</select>
    </div>
</div>
</div>
<div class="col-md-3">
<div class="card">
    <img class="card-img-top" src="images/marca/HUAWEI-LOGO.webp" style = "object-fit:scale-down; " alt="200" width="200px" height = " 200px ">
    <div class="card-body">
    <select name="select" class= "btn-primary">
  <option value="value1">Mate 20 lite</option>
  <option value="value2">Y9 2019</option>
  <option value="value3">P30</option>
</select>   
    </div>
</div>
</div>
<div class="col-md-3">
<div class="card">
    <img class="card-img-top" src="images/marca/Samsung-logo.webp" style = "object-fit:scale-down; " alt="200" width="200px" height = " 200px ">
    <div class="card-body">
    <select name="select" class= "btn-primary">
  <option value="value1">A20s</option>
  <option value="value2">A10s</option>
  <option value="value3">S22</option>
</select>    
    </div>
</div>
</div>
<div class="col-md-3">
<div class="card">
    <img class="card-img-top" src="images/marca/Xiaomi_logo.png" style = "object-fit:scale-down; " alt="200" width="200px" height = " 200px ">
    <a href="index.php"></a>
    <div class="card-body">
    <select name="select" class= "btn-primary">
  <option value="value1">Redmi 8</option>
  <option value="value2">Redmi 10 PRO</option>
  <option value="value3">POCO X3 PRO</option>
</select>   
    </div>
</div>
</div>

    </div>
</div>
  

</body>
</html>
