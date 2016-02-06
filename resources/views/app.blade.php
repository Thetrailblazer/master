<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>The Trailblazer</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/misc.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    
    

    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-4 col-sm-12">
                <div class="sidebar-menu">
                    
                    <div class="logo-wrapper">
                        <h1 class="logo">
                            <a class="" href="#"><img src="images/logo.png" alt="The Trailblazer">The Trailblazer
                            <span>It is not always a fish story</span></a>
                        </h1>
                    </div> <!-- /.logo-wrapper -->
                    
                    <div class="menu-wrapper">
                        <ul class="menu">
                            <li><a class="homebutton" href="#">Home</a></li>
                            <li><a class="show-1" href="#">Next trail</a></li>
                            <li><a class="show-2" href="#">Camp</a></li>
                            <li><a class="show-3" href="#">Guidelines</a></li>
                            <li><a class="show-4" href="#">Gallery</a></li>
                            <li><a class="show-5" href="#" onclick="affiliates_map();">Info</a></li>
                        </ul> <!-- /.menu -->
                        <a href="#" class="toggle-menu"><i class="fa fa-bars"></i></a>
                    </div> <!-- /.menu-wrapper -->

                    <!--Arrow Navigation-->
                    <a id="prevslide" class="load-item"><i class="fa fa-angle-left"></i></a>
                    <a id="nextslide" class="load-item"><i class="fa fa-angle-right"></i></a>

                </div> <!-- /.sidebar-menu -->
            </div> <!-- /.col-md-4 -->

            <div class="col-md-8 col-sm-12">
                <div id="menu-container">
                    <div id="menu-1" class="about1 content">
                        <div class="row">
                           @yield('nexttrail')
                        </div> <!-- /.row -->
                    </div> <!-- /.about -->

                    <div id="menu-2" class="camp1 content">
                        <div class="row">
                           @yield('camp')
                        </div>
                    </div>

                    <div id="menu-3" class="services1 content">
                        <div class="row">
                            @yield('guidelines')
                        </div>
                    </div>
                    
                    <div id="menu-4" class="gallery1 content">
                        <div class="row">
                            @yield('gallery')
                        </div>
                    </div>

                    <div id="menu-5" class="contact1 content">
                        <div class="row">
                           @yield('contact')
                        </div>
                    </div>
                </div> <!-- /#menu-container -->
            </div> <!-- /.col-md-8 -->
        </div> <!-- /.row -->
    </div> <!-- /.container-fluid -->
    
    <div class="container-fluid">   
        <div class="row">
            <div class="col-md-12 footer">
                <p id="footer-text">
                	Copyright &copy; 2016 <a href="#">The Trailblazer</a>
                </p>
            </div><!-- /.footer --> 
        </div>
    </div> <!-- /.container-fluid -->

    <script src="js/vendor/jquery-1.10.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    <script src="js/jquery.easing-1.3.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript">
			jQuery(function ($) {
                $.supersized({
                    slide_interval: 3000, // Length between transitions
                    transition: 1, // 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
                    transition_speed: 700, // Speed of transition

                    // Components                           
                    slide_links: 'blank', // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    slides: [ // Slideshow Images
                        { image: 'images/slides/1.jpg' },
                        { image: 'images/slides/2.jpg' },
                        { image: 'images/slides/3.jpg' },
                        { image: 'images/slides/4.jpg' },
                        { image: 'images/slides/5.jpg' },
                        { image: 'images/slides/6.jpg' },
                        { image: 'images/slides/7.jpg' },
                        { image: 'images/slides/8.jpg' },
                        { image: 'images/slides/9.jpg' },
                        { image: 'images/slides/10.jpg' }
                    ]

                });
            });
    </script>

    	<!-- Google Map -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>
        <!-- Google Map Init-->
        <script type="text/javascript">
        //OK NEED TO GET this working correctly with multi addresses and a click to open the site in a new window
           function affiliates_map() {
                $('.google-map').gmap3({
                    marker:{
                        values:[
                          {address: '2863 South Campbell Avenue, Springfield, MO 65807', data:"Plateau Fly Shop", url:"http://plateauflyshop.com/"},
                        ],
                    },
                        map:{
                        options:{
                        zoom: 15,
                        scrollwheel: false,
                        streetViewControl : true
                        }
                    }
                });
            }
        </script>
</body>
</html>