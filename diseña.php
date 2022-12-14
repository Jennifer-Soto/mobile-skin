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

        <!-- Barra de navegación -->
        <header class="header header_style_01">
            <nav class="navbar header-nav navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href=#home><img src="images/logos/funda-mobile.svg" alt="" width="200px" height="100px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                            <ul class="navbar-nav">
                                <li><a class="nav-link active" href="#home">Home</a></li>
                                <li><a class="nav-link" href="#team">Nosotros</a></li>
                                <li><a class="nav-link" href="#screenshots">Portafolio</a></li>
                            </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div id="home" class="parallax first-section"  style="background-image:url('uploads/bg-img.jpg');  ">
            <div style="display:flex; justify-content: center;">
                <h1 style="color: white;  font-size:80px; " >ELIGE TU MARCA</h1>
            </div>
            
<!-- Select de los Apple -->
            <div class="container">
            <div class="row">

                <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images/marca/apple-logo.png" style = "object-fit:scale-down; " alt="200" width="200px" height = " 200px "> 
                    <div class="card-body">
                        <form name="apple" method="post" action="">
                            <select name="destino" onchange="location.href=apple.destino.value;" class="btn-primary">
                                <option value="value1">.....</option>        
                                <option value="dispo/apple/iphone12.php">Iphone 12 PRO MAX</option>
                                <option value="dispo/apple/iphone13.php">Iphone 13 PRO MAX</option>
                            </select>
                        </form>
                    </div>
                </div>
                </div>
<!-- Select de los Samsung -->
                <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="images/marca/Samsung-logo.webp" style = "object-fit:scale-down; " alt="200" width="200px" height = " 200px ">
                    <div class="card-body">
                        <form name="Samsung" method="post" action="">
                            <select name="destino" onchange="location.href=Samsung.destino.value;" class="btn-primary">
                                <option value="value1">.....</option> 
                                <option value="dispo/samsung/a20s.php">A20s</option>
                                <option value="dispo/samsung/a10s.php">A10s</option>
                            </select>
                        </form>    
                    </div>
                </div>
                </div>
            </div> 
            </div>
        </div>       
    
    </body>
</html>    

