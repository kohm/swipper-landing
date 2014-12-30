<OCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Swipper</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/style-custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <img class="logo-swipper" src="img/logo-img.png">
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#home">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#features">Features</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    <!-- Navigation -->
    <section id="home">        
        <!-- Intro Header -->
        <header class="intro">
            <div class="intro-body">
                <div class="container body-home" style="margin-top:20px;">
                    <div class="row">                                  

                      <div class="style-intro col-lg-6">
                           <h1 class="title"> Introducing <strong>Swipper</strong></h1> 
                           <p> <strong>Find merchants who accept AMEX credit card on the go!</strong> </p>
                           <ul class="details">
                             <li> > <span>Finds corporate credit card merchants near current location.</span></li>
                             <li> > <span>Distance between your chosen location and the AMEX enabled merchants.</span></li>
                             <li> > <span>Filter your search based on the type of merchants you need.</span></li>
                           </ul>

                        <div class="col-lg-12 padd">
                            <a href="https://play.google.com/store/apps/details?id=com.globant.labs.swipper2">
                                <img src="img/gplay.png">
                            </a>
                            <a href="#">
                                <img src="img/comming-soon.png">
                            </a>                 
                        </div> 
                        <div class="col-lg-12">
                            <img src="img/globant.png">  
                        </div>

                      </div>
                        <div class="style-hand col-lg-6 img-responsive center-block">
                          <img id="hand-img" src="img/hand.png">
                        </div>
                </div>
            </div>
        </header>
    </section>
    <!-- About Section -->
    <section id="features" class="container content-section text-center">
            <div class="row">
            <h1 class="title"><strong>FEATURES</strong></h1>
            <div class="col-lg-4 features-left" >
                <img src="img/find.png">
                <h4><strong>FIND</strong></h4>
                <p class="letter">Finds AMEX merchants near any address.</p>
                <img src="img/location.png">
                <h4><strong>LOCATION</strong></h4>
                <p class="letter">Finds AMEX merchants near your current location.</p>
                <img src="img/time.png">
                <h4><strong>SCHEDULES</strong></h4>
                <p class="letter">Check the merchants scheduele and other interesting information.</p>
            </div>
            <div class="col-lg-4">
                <img class= "image img-responsive center-block" src="img/whitephone.png">
            </div>
            <div class="col-lg-4 features-left" >
                <img src="img/distance.png">
                <h4><strong>DISTANCE</strong></h4>
                <p class="letter">Provides you witgh the distance between your choosen location and the AMEX enabled merchants.</p>
                <img src="img/plate.png">
                <h4><strong>FILTER</strong></h4>
                <p class="letter">Filters your AMEX search based on the type of merchants you need: covenience stores, fast-food restaurants, retail, transportation, auto-motive and many more.</p>
                <img src="img/camera.png">
                <h4><strong>PHOTOS</strong></h4>
                <p class="letter">Pictures of merchants are shown at the information section of every spot.</p>
            </div>
        </div>
    </section>
           
    <section class="content-section text-center features1">
        <h1 class="subtitle"><strong>Finds AMEX merchants near any address</strong></h1>
        <div>           
            <img class="image img-responsive center-block" src="img/features.png">
        </div>
    </section>
    
    <section class="content-section text-center features2">
          <h1 class="title"><strong>Merchants Information</strong></h1>
        <div>
            <img class="image img-responsive center-block" src="img/features2.png">
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <h1 class="title"><strong>CONTACT</strong></h1>       
            <div class="col-lg-4  col-lg-offset-1">
                <h2><strong>Say hello!</strong></h2>
                    <form class="form" id="form1">
                      <p class="name">
                        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name"/></p>
                      <p class="email">
                        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" /></p>
                      <p class="text">
                        <textarea name="text" class="validate[required,length[6,300]] feedback-input" id="comment" placeholder="Message"></textarea>
                      </p>
                        <div class="col-lg-12 mov">
                            <a href="#">
                                <img src="img/mail.png">
                            </a>
                        </div>
                    </form>                  
            </div>
            <div class="col-lg-4 col-lg-offset-3 ">
                <img class="image img-responsive hidden-xs center-block" src="img/footerphone.jpg">
            </div>        
    </section>  
        
    <footer class="border">
        <div class="row">            
            <div class="col-lg-4 col-lg-offset-8 made">
                <img src="img/made.png">
            </div>    
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>

</body>

</html>
