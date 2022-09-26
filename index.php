<?php
  session_start();
   
  // Controlo si el usuario ya está logueado en el sistema.
  if(isset($_SESSION['email'])){
    // Le doy la bienvenida al usuario.
    echo 'Bienvenido <strong>' . $_SESSION['email'] . '</strong>, <a href="login/index.html">cerrar sesión</a>';
  }else{
    // Si no está logueado lo redireccion a la página de login.
    header("HTTP/1.1 302 Moved Temporarily"); 
    header("Location: login/cerrar-sesion.php"); 
  }
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->

    <title> Mobile-Skin</title>  

    <title>Mobile Skin</title>  

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="app_version" data-spy="scroll" data-target="#navbarApp" data-offset="98">

    <!-- LOADER -->
    <!-- <div id="preloader">
        <img class="preloader" src="images/loaders/loader-app.gif" alt="">
    </div> end loader -->
    <!-- END LOADER -->
	<!-- <div class="top-bar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="left-soi">
						<ul>
							<li class="social-links"><a href="#"><i class="fa fa-apple"></i></a></li>
							<li class="social-links"><a href="#"><i class="fa fa-android"></i></a></li>
							<li class="social-links"><a href="#"><i class="fa fa-windows"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="right-btn">
						<a href="#" class="btn-radius btn-brd">Get Support</a>
					</div>
				</div>
			</div>
		</div>
	</div>-->
    <header class="header header_style_01">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href=#home><img src="images/logos/funda-mobile.svg" alt="" width="200px" height="100px"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarApp" aria-controls="navbarApp" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarApp">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#team">Nosotros</a></li>
                        <li><a class="nav-link" href="#screenshots">Portafolio</a></li>
                        <li><a class="nav-link" href="diseña.php">Diseña aquí</a></li>
                        <li><a class="nav-link" href="formulario.php"><img src="images/carritoxd.png" alt="image" width="30px" height="30px"/></a></li>
                        <li><a class="nav-link active" href="login/index.html"> <button class="btn btn-primary ">Login</button>    </a></li>
						<!--<li><a class="nav-link" href="#support">Support</a></li>-->
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div id="home" class="parallax first-section" style="background-image:url('uploads/bg-img.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="big-tagline">
                        <h2>¡Crea tu funda a tu gusto!</h2>
                    </div>
                </div>
                <div data-wow-duration="1s" data-wow-delay="0.2s" class=" wow slideInUp hidden-xs hidden-sm">
                    <img src="uploads/Fundas-personalizadas.webp" alt="" class="img-fluid">
                </div>
                
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="features" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>The App Features</h3>
                <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum<br>auctor nisi elit consequat ipsum, nec sagittis sem!</p>
            </div><!-- end title -->

            <div id="default" class="row clearfix zenith_slider">
                  
				<!--The First row-->  
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 left-row">
					<ul class="features-left">
						<li class="highlight lhgh" data-index="0">
							<i class="flaticon-wordpress-logo effect-1" ></i>
							<div class="fl-inner">
								<h4>WordPress Installation</h4>
								<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet.</p>
							</div>
						</li><!-- .highlight .left-row -->

						<li class="highlight lhgh" data-index="1">
							<i class="flaticon-windows effect-1"></i>
							<div class="fl-inner">
								<h4>Browser Compatible</h4>
								<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet.</p>
							</div>
						</li><!-- .highlight .left-row -->

						<li class="highlight lhgh" data-index="2">
							<i class="flaticon-price-tag effect-1"></i>							
							<div class="fl-inner">
								<h4>eCommerce Ready</h4>
								<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet.</p>
							</div>
						</li><!-- .highlight .left-row -->
						
						<li class="highlight lhgh" data-index="3">
							<i class="flaticon-new-file effect-1"></i>						
							<div class="fl-inner">
								<h4>Easy to Customize</h4>
								<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet.</p>
							</div>
						</li><!-- .highlight .left-row -->
					</ul>
				</div><!-- .row .left-row -->
			  
				<div class="highlights-phone col-lg-4 col-md-4 col-sm-12 col-xs-12 wht">
				  
					<div class="phone-holder">
					   <div id="fon"></div>
					   <div class="hgh-linner hgi" data-index="0">
							<img width="190" height="320" src="uploads/carousel_01.jpg" class="attachment-highlight wp-post-image" alt="screen" />    
						</div>
						<div class="hgh-linner hgi" data-index="1">
							<img width="234" height="398" src="uploads/carousel_02.jpg" class="attachment-highlight wp-post-image" alt="screensdst" />    
						</div>
						<div class="hgh-linner hgi" data-index="2">
							<img width="234" height="398" src="uploads/carousel_03.jpg" class="attachment-highlight wp-post-image" alt="screen_09" />    
						</div>
						<div class="hgh-rinner hgi" data-index="3">
							<img width="234" height="398" src="uploads/carousel_04.jpg" class="attachment-highlight wp-post-image" alt="screen_07" />    
						</div>
						<div class="hgh-rinner hgi" data-index="4">
							<img width="234" height="398" src="uploads/carousel_01.jpg" class="attachment-highlight wp-post-image" alt="screen_08" />    
						</div>
						<div class="hgh-rinner hgi" data-index="5">
							<img width="234" height="398" src="uploads/carousel_01.jpg" class="attachment-highlight wp-post-image" alt="screen_06" />    
						</div>
						<div class="hgh-rinner hgi" data-index="6">
							<img width="234" height="398" src="uploads/carousel_02.jpg" class="attachment-highlight wp-post-image" alt="screen_06" />    
						</div>
						<div class="hgh-rinner hgi" data-index="7">
							<img width="234" height="398" src="uploads/carousel_03.jpg" class="attachment-highlight wp-post-image" alt="screen_06" />    
						</div>
					</div>
				</div>

				<!--The Second row-->
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 right-row">
					<ul class="features-right">
						<li class="highlight rhgh" data-index="4">
							<i class="flaticon-pantone effect-1"></i>							 
							<div class="fr-inner">
								<h4>Limitless Colors</h4>
								<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet.</p>
							</div>
						</li><!-- .highlight .left-row -->
						<li class="highlight rhgh" data-index="5">
							<i class="flaticon-cloud-computing effect-1"></i>
							<div class="fr-inner">
								<h4>Lifetime Update</h4>
								<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet.</p>
							</div>
						</li><!-- .highlight .left-row -->
						<li class="highlight rhgh" data-index="6">
							<i class="flaticon-line-graph effect-1"></i>
							<div class="fr-inner">
								<h4>SEO Friendly</h4>
								<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
							</div>
						</li><!-- .highlight .left-row -->
						<li class="highlight rhgh" data-index="7">
							<i class="flaticon-coding effect-1"></i>
							<div class="fr-inner">
								<h4>Simple Clean Code</h4>
								<p>Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. </p>
							</div>
						</li><!-- .highlight .left-row -->
					</ul>
				</div><!-- .row .left-row -->
			  
			</div><!--Highlights close-->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="how-its-work clearfix">
        <div class="hc colon1">
            <h2>1</h2>
            <h3>Go App Store</h3>
            <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit aliquet. Aenean sollicitudin, lorem quis bibendum..</p>
        </div><!-- end col -->

        <div class="hc colon2">
            <h2>2</h2>
            <h3>Create an Account</h3>
            <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit aliquet. Aenean sollicitudin, lorem quis bibendum..</p>
        </div><!-- end col -->

        <div class="hc colon3">
            <h2>3</h2>
            <h3>Download the App</h3>
            <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit aliquet. Aenean sollicitudin, lorem quis bibendum..</p>
        </div><!-- end col -->  

        <div class="hc colon4">
            <h2>4</h2>
            <h3>Enjoy & Rate us!</h3>
            <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit aliquet. Aenean sollicitudin, lorem quis bibendum..</p>
        </div><!-- end col -->  
    </div><!-- end how-its-work -->

    <div id="screenshots" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Nuestro Portafolio</h3>
            </div><!-- end title -->

            <div class="owl-screenshots owl-carousel owl-theme">
                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda2.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda2.png" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda3.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda3.png" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda4.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda4.png" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda5" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda5" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda6.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda6.png" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda.png" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda2.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda2.png" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda3.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda3.png" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda4.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda4.png" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda5" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda5" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda6.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda6.png" alt="" class="img-fluid img-rounded">
                            <div class="magnifier"></div>
                        </div>
                    </div><!-- end service -->
                </div><!-- end col -->

                <div class="owl-screen">
                    <div class="service-widget">
                        <div class="post-media entry wow fadeIn">
                            <a href="uploads/funda.png" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                            <img src="uploads/funda.png" alt="" class="img-fluid img-rounded">
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
                <h3>Nosotros</h3>
                <p class="lead">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, true generator<br> on the Internet. It uses a dictionary of over..</p>
            </div><!-- end title -->

            <div class="row dev-list text-center">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="widget clearfix">
                        <img src="uploads/jenni.jpg" alt="" class="img-fluid rounded-circle">
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
                        <img src="uploads/Michael.jpg" alt="" class="img-fluid rounded-circle">
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

    <div class="parallax section" style="background-image:url('uploads/ben_img_2.jpg');">
        <div class="container">
            <div class="row text-left stat-wrap">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-apple"></i></span>
                    <p class="stat_count_download">12500</p>
                    <h3>App Store</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-amazon-logo"></i></span>
                    <p class="stat_count_download">31000</p>
                    <h3>Amazon</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-android"></i></span>
                    <p class="stat_count_download">15788</p>
                    <h3>Google Play</h3>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft"><i class="flaticon-windows"></i></span>
                    <p class="stat_count_download">21000</p>
                    <h3>Windows App</h3>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <!--<div id="pricing" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Ready to get started?</h3>
                <p class="lead">Get the red carpet treatment <strong>just $39 per month!</strong> It is estimated that 3.5 million established by personal blogs.<br> From each other, we share paid WordPress themes WP Service...</p>
            </div><!-- end title 

            <div class="row">
                <div class="col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane active fade show" id="tab1">
                            <div class="row text-center">
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Free Access</h2>
                                            <h3>$85/month</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="btn btn-dark btn-radius btn-brd grd1 effect-1">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>1 Year Membership</h2>
                                            <h3>$59/year</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-text">
                                            <p>This is a perfect choice for small businesses and startups.</p>
                                        </div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>150</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>65GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>60</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>30</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="btn btn-dark btn-radius btn-brd grd1 effect-1">Learn More</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="pricing-table pricing-table-highlighted">
                                        <div class="pricing-table-header grd1">
                                            <h2>Lifetime Update</h2>
                                            <h3>$85/one-time</h3>
                                        </div>
                                        <div class="pricing-table-space"></div>
                                        <div class="pricing-table-features">
                                            <p><i class="fa fa-envelope-o"></i> <strong>250</strong> Email Addresses</p>
                                            <p><i class="fa fa-rocket"></i> <strong>125GB</strong> of Storage</p>
                                            <p><i class="fa fa-database"></i> <strong>140</strong> Databases</p>
                                            <p><i class="fa fa-link"></i> <strong>60</strong> Domains</p>
                                            <p><i class="fa fa-life-ring"></i> <strong>24/7 Unlimited</strong> Support</p>
                                        </div>
                                        <div class="pricing-table-sign-up">
                                            <a href="#" class="btn btn-dark btn-radius btn-brd grd1 effect-1">Order Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end row 
                        </div><!-- end pane 
                    </div><!-- end content 
                </div><!-- end col 
            </div><!-- end row 
        </div><!-- end container 
    </div><!-- end section -->

    <div id="testimonials" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Happy Clients</h3>
                <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers! <br>Let's see what others say about Appfast website template!</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-fluid alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-fluid alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-fluid alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_01.png" alt="" class="img-fluid alignleft">
                                <h4>James Fernando <small>- Manager of Racer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">Explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you completed.</p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_02.png" alt="" class="img-fluid alignleft">
                                <h4>Jacques Philips <small>- Designer</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial clearfix">
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">The master-builder of human happines no one rejects, dislikes avoids pleasure itself, because it is very pursue pleasure. </p>
                            </div>
                            <div class="testi-meta">
                                <img src="uploads/testi_03.png" alt="" class="img-fluid alignleft">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div id="purchase" class="parallax section db" style="background-image:url('uploads/pr_bg.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h2>Started from $90.00</h2>
                <h3>Purchase Now!</h3>
                <p class="lead">We thanks for all our awesome testimonials! There are hundreds of our happy customers! <br>Let's see what others say about Appfast website template!</p>
            </div><!-- end title -->

            <div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="btn-buy apple-button">
                        <a href="#"><i class="flaticon-android alignleft"></i> Download on the <strong>Google Play</strong></a>
                    </div>
                </div><!-- end col --> 
				
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="btn-buy apple-button">
                        <a href="#"><i class="flaticon-apple alignleft"></i> Download on the <strong>App Store</strong></a>
                    </div>
                </div><!-- end col -->  

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="btn-buy apple-button">
                        <a href="#"><i class="flaticon-windows alignleft"></i> Download on the <strong>Windows</strong></a>
                    </div>
                </div><!-- end col -->  
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


    <div id="support" class="section" style="background-image:url('uploads/form_bg.jpg');">
        <div class="container">
            <div class="section-title text-center">
                <h3>Get in Touch</h3>
				<div class="info-box" data-toggle="tooltip" data-placement="right" title="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.">
					<i class="fa fa-question-circle" aria-hidden="true"></i>
				</div>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <fieldset class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get a Quote</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <section class="section nopad cac text-center">
        <a href="#"><h3>Interesting our awesome web design services? Just drop an email to us and get quote for free!</h3></a>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <img src="images/logos/logo-app.png" alt="">
                            <small>App Landing Template</small>                        </div>
                        <p> Integer rutrum ligula eu dignissim laoreet. Pellentesque venenatis nibh sed tellus faucibus bibendum. Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                        <p>Sed fermentum est vitae rhoncus molestie. Cum sociis natoque penatibus et magnis dis montes.</p>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Contact Details</h3>
                        </div>

                        <ul class="footer-links">
                            <li><a href="mailto:#">info@yoursite.com</a></li>
                            <li><a href="#">www.yoursite.com</a></li>
                            <li>91 Leeton Ridge Lane Bettendorf, IA 52722</li>
                            <li>+61 3 8376 6000</li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="footer-distributed widget clearfix">
                        <div class="widget-title">
                            <h3>Newsletter</h3>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form</p>
                        </div>
						<div class="footer-right">
							<form method="get" action="#">
								<input placeholder="Subscribe our newsletter.." name="search">
								<i class="fa fa-envelope-o"></i>
							</form>
						</div>
                    </div><!-- end clearfix -->
                </div><!-- end col -->

                <div class="col-lg-2 col-md-6 col-sm-12 col-xs-12">
                    <div class="widget clearfix">
                        <div class="widget-title">
                            <h3>Social</h3>
                        </div>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
                            <li><a href="#"><i class="fa fa-github"></i> Github</a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i> Dribbble</a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i> Pinterest</a></li>
                        </ul><!-- end links -->
                    </div><!-- end clearfix -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </footer><!-- end footer -->

    <div class="copyrights">
        <div class="container">
            <div class="footer-distributed">
                <div class="footer-left">                    
                    <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">Appfast</a> Design By : 
					<a href="https://html.design/">html design</a></p>
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