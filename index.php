<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->


    <title>Mobile Skin</title>  

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Enlace e imagen del logo -->
    <link rel="shortcut icon" href="images/logos/funda-mobile.svg" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">    
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

</head>
<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">

    <!-- Barra de navegación -->
    <header class="header header_style_01">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href=#home><img src="images/logos/funda-mobile.svg" alt="" width="200px" height="100px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation"></button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#team">Nosotros</a></li>
                        <li><a class="nav-link" href="#screenshots">Portafolio</a></li>
                        <li><a class="nav-link" href="#features">Móviles</a></li>
                        <li><a class="nav-link" href="login/login.php"><img src="images/carritoxd.png" alt="image" width="30px" height="30px"/></a></li>
                        <li><a class="nav-link active" href="login/login.php"> <button class="btn btn-primary" style=background-color:purple;>Login</button></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Pagina principal -->
    <div id="home" class="parallax first-section" style="background-image:url('uploads/bg-img.jpg');">
        <div class="container">
            <div class="row" style = "align-items:center;  ">
                <div class="col-md-6 col-sm-12">
                    <div class="big-tagline">
                        <h2>¡Crea tu funda a tu gusto!</h2>
                        <a href="diseña.php"><button class="btn btn-primary " style="width: 500px; background-color:purple;">Empieza</button></a>
                    </div>
                </div>
                <div data-wow-duration="1s" data-wow-delay="0.2s" class=" wow slideInUp hidden-xs hidden-sm">
                    <img src="uploads/Fundas-personalizadas.webp" alt="" class="img-fluid">
                </div>
                
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <!--  -->
    <div id="features" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3 style = "text-transform: uppercase; color: #AD1457;"> Móviles </h3>
            </div><!-- end title -->

            <div id="default" class="row clearfix zenith_slider">
                  
				<!--The First row-->  
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 left-row">
					<ul class="features-left"><br><br><br><br><br>
						<li class="highlight lhgh" data-index="0">
                            <i class="" ><img src="images/marca/apple-logo.png" alt="" width="50px" height="50px"></i>
							<div class="fl-inner">
								<h4> Apple </h4>
                                <p>Fundas desde $15.000</p>
							</div>
						</li><!-- .highlight .left-row -->

						<li class="highlight lhgh" data-index="1">
                            <i class=""><img src="images/marca/huawei.jpg" alt="" width="50px" height="50px"></i>
							<div class="fl-inner">
								<h4> Huawei </h4>
                                <p>Fundas desde $15.000</p>
							</div>
						</li><!-- .highlight .left-row -->

					</ul>
				</div><!-- .row .left-row -->
			  
				<div class="highlights-phone col-lg-4 col-md-4 col-sm-12 col-xs-12 wht">
				  
					<div class="phone-holder">
					   <div id="fon"></div>
					   <div class="hgh-linner hgi" data-index="0">
							<img width="100" height="200" src="images/marca/apple-logo.png" class="attachment-highlight wp-post-image" alt="Apple" />    
						</div>
						<div class="hgh-linner hgi" data-index="1">
							<img width="100" height="200" src="images/marca/HUAWEI-LOGO.webp" class="attachment-highlight wp-post-image" alt="Huawei" />    
						</div>
						<div class="hgh-linner hgi" data-index="2">
							<img width="100" height="200" src="images/marca/Samsung-Logo.webp" class="attachment-highlight wp-post-image" alt="Samsung" />    
						</div>
						<div class="hgh-rinner hgi" data-index="3">
							<img width="100" height="200" src="images/marca/Xiaomi_logo.png" class="attachment-highlight wp-post-image" alt="Xiaomi" />    
						</div>
					</div>
				</div>

				<!--The Second row-->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 right-row">
					<ul class="features-right"><br><br><br><br><br>
						<li class="highlight rhgh" data-index="2">		
                            <i class=""><img src="images/marca/samsung.jpg" alt="" width="70px" height="40px"></i>					 
							<div class="fr-inner">
								<h4> Samsung </h4>
                                <p>Fundas desde $15.000</p>
							</div>
						</li><!-- .highlight .left-row -->
						<li class="highlight rhgh" data-index="3">
                            <i class=""><img src="images/marca/xiaomi.png" alt="" width="50px" height="50px"></i>
							<div class="fr-inner">
								<h4> Xiaomi </h4>
                                <p>Fundas desde $15.000</p>
							</div>
					</ul>
				</div><!-- .row .left-row -->
			  
			</div><!--Highlights close-->
        </div><!-- end container -->
    </div><!-- end section -->



    <div id="screenshots" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3 style = "text-transform: uppercase; color: #AD1457;">Nuestro Portafolio</h3>
            </div><!-- end title -->

            <div class="owl-screenshots owl-carousel owl-theme">
                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda2.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda2.png" alt="" class="img-fluid img-rounded img-size">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/estuche.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/estuche.png" alt="" class="img-fluid img-rounded img-size">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda4.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda4.png" alt="" class="img-fluid img-rounded img-size">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda5" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda5" alt="" class="img-fluid img-rounded img-size">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/estuche2.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/estuche2.png" alt="" class="img-fluid img-rounded img-size">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda.png" alt="" class="img-fluid img-rounded img-size">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="parallax section noover" style="background-image:url('uploads/ben_img.jpg');">
        <div class="container">
            <div class="row text-center">
                <!--<div class="col-md-7 col-sm-12">
                    <div class="customwidget text-left">
                        <h1>Download our app</h1>
                        <p>Pellentesque imperdiet molestie erat ac placerat. Nulla consectetur posuere odio. Sed ac ultricies felis. Duis iaculis sem id ante semper posuere. Maecenas vitae mi blandit, tempor libero a, molestie dolor. Pellentesque rutrum sapien vitae ornare aliquet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id felis rhoncus, ultrices dolor quis, faucibus velit. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        <ul class="list-inline">
                            <li class="list-inline-item"><i class="flaticon-apple"></i> Available on Apple</li>
                            <li class="list-inline-item"><i class="flaticon-android"></i> Available on Android</li>
                            <li class="list-inline-item"><i class="flaticon-amazon-logo"></i> Available on Amazon</li>
                        </ul><!-- end list 
                        <a href="#features" data-scroll class="btn btn-light btn-radius btn-brd">Learn More</a>
                    </div>
                </div><!-- end col -->
                <div class="col-md-6 iphones hidden-sm">
                    <div class="text-center move image-center hidden-sm hidden-xs">
                        <img src="uploads/iphones.png" alt="" class="img-fluid wow fadeInUp">
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="team" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3 style = "text-transform: uppercase; color: #AD1457;">Nosotros</h3>
                
            </div><!-- end title -->

            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="widget clearfix">
                        <img src="uploads/jenni.jpg" alt="" class="img-fluid rounded-circle img-size-profile">
                        <div class="widget-title">
                            <h3>Jenni Soto</h3>
                            <small></small>
                        </div>
                        <!-- end title -->
                        <p></p>

                        <div class="footer-social">
                            <a href="https://www.facebook.com/profile.php?id=100008846716542" class="btn global-radius"><i class="fa fa-facebook"></i></a>
                            <a href="https://github.com/Jennifer-Soto" class="btn global-radius"><i class="fa fa-github"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                    <div class="widget clearfix">
                        <img src="uploads/Michael.jpg" alt="" class="img-fluid rounded-circle img-size-profile">
                        <div class="widget-title">
                            <h3>Michael Daza</h3>
                            <small></small>
                        </div>
                        <!-- end title -->
                        <p></p>

                        <div class="footer-social">
                            <a href="https://www.facebook.com/maicol.daza.904/" class="btn global-radius"><i class="fa fa-facebook"></i></a>
                            <a href="https://github.com/MichaelD002" class="btn global-radius"><i class="fa fa-github"></i></a>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->


      <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                    
                    <p class="footer-company-name">Mobile-Skin</p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->           
   

    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
	<script src="js/zenith.js"></script>
	<script>
		$('#default').zenith({
			layout: 'default' , 
			slideSpeed: 450, 
			autoplaySpeed: 2000
		});
	</script>

</body>
</html>