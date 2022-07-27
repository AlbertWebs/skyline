<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Skyline PR - Creative Multipurpose Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png')}}">

    <!-- Template CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/skins/yellow.css')}}" />

    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" type="text/css" href="js/plugins/revolution/css/settings.css')}}" />
    <link rel="stylesheet" type="text/css" href="js/plugins/revolution/css/layers.css')}}" />
    <link rel="stylesheet" type="text/css" href="js/plugins/revolution/css/navigation.css')}}" />

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="{{asset('theme/css/skins/blue.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="{{asset('theme/css/skins/blueviolet.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="{{asset('theme/css/skins/goldenrod.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="{{asset('theme/css/skins/green.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="{{asset('theme/css/skins/magenta.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="{{asset('theme/css/skins/orange.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="{{asset('theme/css/skins/purple.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="{{asset('theme/css/skins/red.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{asset('theme/css/skins/yellow.css')}}" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="{{asset('theme/css/skins/yellowgreen.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/styleswitcher.css')}}" />

    <!-- Template JS Files -->
    <script src="{{asset('theme/js/modernizr.js')}}"></script>

</head>

<body class="double-diagonal dark">
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="{{asset('theme/img/styleswitcher/logos/yellow.png')}}" alt="logo-black">
        </div>
        <div class="loader" id="loader"></div>
    </div>
    <!-- Preloader Ends -->
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Page Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        <header class="header">
            <div class="header-inner">
                <!-- Navbar Starts -->
                <nav class="navbar">
                    <!-- Logo Starts -->
                    <div class="logo">
                        <a data-toggle="collapse" data-target=".navbar-collapse.show" class="navbar-brand" href="index-kenburns.html">
                            <!-- Logo White Starts -->
                            <img id="logo-light" class="logo-light" src="{{asset('theme/img/styleswitcher/logos/yellow.png')}}" alt="logo-light" />
                            <!-- Logo White Ends -->
                            <!-- Logo Black Starts -->
                            <img id="logo-dark" class="logo-dark" src="{{asset('theme/img/styleswitcher/logos/logos-dark/yellow.png')}}" alt="logo-dark" />
                            <!-- Logo Black Ends -->
                        </a>
                    </div>
                    <!-- Logo Ends -->
					<!-- Toggle Icon for Mobile Starts -->
					<button class="navbar-toggle navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span id="icon-toggler">
						  <span></span>
						  <span></span>
						  <span></span>
						  <span></span>
						</span>
					</button>
					<!-- Toggle Icon for Mobile Ends -->
					<div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
						<!-- Main Menu Starts -->
						<ul class="nav navbar-nav" id="main-navigation">
							<li class="active"><a href="index-kenburns.html"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="about.html"><i class="fa fa-user"></i> About Us</a></li>
                            <li><a href="about.html"><i class="fa fa-user"></i> Center of Excellence</a></li>
                            <li><a href="about.html"><i class="fa fa-edit"></i> News</a></li>
							<li><a href="contact.html"><i class="fa fa-envelope"></i> Contact</a></li>
                            <li><a href="tel:"><i class="fa fa-map-marker"></i> Find Us</a></li>
                            <li><a href="tel:"><i class="fa fa-phone"></i> Call Us</a></li>
							<!-- Cart Icon Starts -->
							{{-- <li class="cart hidden-xs hidden-sm"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i></a></li> --}}
							<!-- Cart Icon Starts -->
							<!-- Search Icon Starts -->
							<li class="search hidden-xs hidden-sm"><button id="search-button" class="fa fa-search"></button></li>
							<!-- Search Icon Ends -->
						</ul>
						<!-- Main Menu Ends -->
					</div>
					<!-- Search Input Starts -->
					<div class="site-search hidden-xs">
						<div class="search-container">
							<input id="search-input" type="text" placeholder="type your keyword and hit enter ...">
							<span class="close">×</span>
						</div>
					</div>
					<!-- Search Input Ends -->
                    <!-- Navigation Menu Ends -->
                </nav>
                <!-- Navbar Ends -->
            </div>
        </header>
        <!-- Header Ends -->
        @yield('content')
        <!-- Footer Section Starts -->
        <footer class="footer top-logos">
            <!-- Footer Top Area Starts -->
            <div class="container top-footer">
                <div class="row">
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <h4>Skyline PR</h4>
                        <div class="menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="pricing.html">Center of Excellence</a></li>
								<li><a href="portfolio-3-columns.html">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <h4>Quick Links</h4>
                        <div class="menu">
                            <ul>
								<li><a href="contact.html">Contact</a></li>
                                <li><a href="faq.html">Privacy Policy</a></li>
                                <li><a href="terms-of-services.html">Terms of Services</a></li>
                                <li><a href="register.html">Copyright Statement</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <h4>Contact US</h4>
                        <div class="menu">
                            <ul>
                                <li><span><i class="fa fa-envelope-open"></i> <small>hello@skylinepublicrelations.com</small></span></li>
                                <li><span><i class="fa fa-phone"></i> 00216 21 184 010</span></li>
                                <li><span><i class="fa fa-map-marker"></i> Kimathi St, Nairobi</span></li>
                                <li><span><i class="fa fa-clock-o"></i> mon-sat 08am &#x21FE; 05pm</span></li>

                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <!-- Facts Starts -->
                        <div class="facts-footer">
                            <div>
                                <h5>77,991</h5>
                                <span>projects</span>
                            </div>
                            <div>
                                <h5>80,217</h5>
                                <span>hours work</span>
                            </div>
                            <div>
                                <h5>1,253</h5>
                                <span>offices</span>
                            </div>
                            <div>
                                <h5>17,361</h5>
                                <span>clients</span>
                            </div>
                        </div>
                        <!-- Facts Ends -->
                        <hr>
                        <!-- Social Media Links Starts -->
                        <div class="social-icons">
                            <ul class="social">
                                <li>
                                    <a class="twitter" href="#" title="twitter"></a>
                                </li>
                                <li>
                                    <a class="facebook" href="#" title="facebook"></a>
                                </li>
                                <li>
                                    <a class="google" href="#" title="google"></a>
                                </li>
                                <li>
                                    <a class="instagram" href="#" title="instagram"></a>
                                </li>
                                <li>
                                    <a class="linkedin" href="#" title="linkedin"></a>
                                </li>
                                <li>
                                    <a class="youtube" href="#" title="youtube"></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Social Media Links Ends -->
                    </div>
                    <!-- Footer Widget Ends -->
                </div>
                <!-- Footer Bottom Area Starts -->
                <div class="bottom-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Copyright Text Starts -->
                            <p class="text-center">Copyright © {{date('Y')}} Skyline PR All Rights Reserved | Powered By <a href="https://designekta.com" target="_blank">Designekta Studio</a></p>
                            <!-- Copyright Text Ends -->
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom Area Ends -->
            </div>
            <!-- Footer Top Area Ends -->

        </footer>
        <!-- Footer Section Ends -->
        <!-- Back To Top Starts -->
        <div id="back-top-wrapper">
            <p id="back-top">
                <a href="#top"><span></span></a>
            </p>
        </div>
        <!-- Back To Top Ends -->
    </div>
    <!-- Wrapper Ends -->

    <!-- Template JS Files -->
    <script src="{{asset('theme/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('theme/js/plugins/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/jquery.bxslider.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/jquery.filterizr.js')}}"></script>
    <script src="{{asset('theme/js/plugins/jquery.magnific-popup.min.js')}}"></script>

    <!-- Revolution Slider Main JS Files -->
    <script src="{{asset('theme/js/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- Revolution Slider Extensions -->

    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script src="{{asset('theme/js/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

    <!-- Live Style Switcher JS File - only demo -->
    <script src="{{asset('theme/js/styleswitcher.js')}}"></script>

    <!-- Main JS Initialization File -->
    <script src="{{asset('theme/js/custom.js')}}"></script>

</body>

</html>
