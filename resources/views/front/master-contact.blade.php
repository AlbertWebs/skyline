<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>{{$title}} - Skyline PR</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png">

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


    <link rel="alternate stylesheet" type="text/css" title="yellow" href="{{asset('theme/css/skins/yellow.css')}}" />


    <!-- Template JS Files -->
    <script src="{{asset('theme/js/modernizr.js')}}"></script>

</head>

<body class="double-diagonal dark">
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="logopreloader">
            <img src="{{url('/')}}/uploads/logo/skylineLogo.png" alt="logo-black">
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
                        <a data-toggle="collapse" data-target=".navbar-collapse.show" class="navbar-brand" href="{{url('/')}}">
                            <!-- Logo White Starts -->
                            <img id="logo-light" class="logo-light" src="{{url('/')}}/uploads/logo/skylineLogo.png" alt="logo-light" />
                            <!-- Logo White Ends -->
                            <!-- Logo Black Starts -->
                            <img id="logo-dark" class="logo-dark" src="{{url('/')}}/uploads/logo/skylineLogo.png" alt="logo-dark" />
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
						@include('front.menu')
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
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/')}}/about-us">About Us</a></li>
                                <li><a href="{{url('/')}}/center-of-excellence">Center of Excellence</a></li>
								<li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-2">
                        <h4>Quick Links</h4>
                        <div class="menu">
                            <ul>
								<li><a href="{{url('/')}}/contact-us">Contact</a></li>
                                <li><a href="{{url('/')}}/privacy-policy">Privacy Policy</a></li>
                                <li><a href="{{url('/')}}/terms-and-conditions">Terms of Services</a></li>
                                <li><a href="{{url('/')}}/copyright">Copyright Statement</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-4 col-md-3">
                        <h4>Contact US</h4>
                        <div class="menu">
                            <ul>
                                <li><span><i class="fa fa-envelope-open"></i> <small>info@skylinepublicrelations.com</small></span></li>
                                <li><span><i class="fa fa-phone"></i> 0710760015,0710266638,</span></li>
                                <li><span><i class="fa fa-map-marker"></i> Kimathi St, Nairobi</span></li>
                                <li><span><i class="fa fa-clock-o"></i> mon-fri 08am &#x21FE; 05pm</span></li>

                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget Ends -->
                    <!-- Footer Widget Starts -->
                    <div class="col-xs-6 col-sm-12 col-md-4">
                        <!-- Facts Starts -->
                        <div class="facts-footer">
                            <p>
                                Skyline public relations agency is a top leading public relations and corporate branding consultancy firm that focuses on positioning organizations, individuals’ , brands and businesses in the corporate world. We believe in creating compelling stories that are impossible to forget. 
                            </p>
                        </div>
                        <!-- Facts Ends -->
                        <hr>
                        <!-- Social Media Links Starts -->
                        <div class="social-icons">
                            <ul class="social">
                                <li>
                                    <a class="twitter" href="https://twitter.com/pr_skyline" title="twitter"></a>
                                </li>
                                <li>
                                    <a class="facebook" href="https://www.facebook.com/skylinepragency/" title="facebook"></a>
                                </li>
                                <li>
                                    <a class="google" href="#" title="google"></a>
                                </li>
                                <li>
                                    <a class="instagram" href="https://www.instagram.com/skylinepublicrelations/" title="instagram"></a>
                                </li>
                                <li>
                                    <a class="linkedin" href="" title="linkedin"></a>
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
                            <p class="text-center">Copyright © {{date('Y')}} Skyline PR All Rights Reserved | Powered By <a href="https://designekta.com" target="_blank">Designekta Studios</a></p>
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
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAFnEvJfyoQ8unR5hK1u87h73EdYP46-hE"></script>


    <!-- Live Style Switcher JS File - only demo -->
    <script src="{{asset('theme/js/styleswitcher.js')}}"></script>

    <!-- Main JS Initialization File -->
    <script src="{{asset('theme/js/custom.js')}}"></script>

</body>

</html>
