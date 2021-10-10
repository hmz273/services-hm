<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CleanMe - Cleaning Company Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Cleaning Company Website Template" name="keywords">
        <meta content="Cleaning Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{asset('assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('assets/css/chblue.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('assets/css/theme-responsive.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('assets/css/dtb/jquery.dataTables.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('assets/css/select2.min.css')}}" rel="stylesheet" media="screen">
        <link href="{{asset('assets/css/toastr.min.css')}}" rel="stylesheet" media="screen">        
        <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/jquery-ui.1.10.4.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/toastr.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('assets/js/modernizr.js')}}"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{asset('assets/css/sstyle.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link href="/path/to/tailwind.css" rel="stylesheet">
        @livewireStyles
    </head>

    <body>
        <div class="wrapper">
            <!-- Header Start -->
            <div class="header home">
                <div class="container-fluid">
                    <div class="header-top row align-items-center">
                        <div class="col-lg-3">
                            <div class="brand">
                                <a href="index.html">
                                    CleanMe
                                    <!-- <img src="img/logo.png" alt="Logo"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="topbar">
                                <div class="topbar-col">
                                    <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i>+012 345 67890</a>
                                </div>
                                <div class="topbar-col">
                                    <a href="mailto:info@example.com"><i class="fa fa-envelope"></i>info@example.com</a>
                                </div>
                                <div class="topbar-col">
                                    <div class="topbar-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="navbar navbar-expand-lg bg-light navbar-light">
                                <a href="#" class="navbar-brand">MENU</a>
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                    <div class="navbar-nav ml-auto">
                                        <a href="/" class="nav-item nav-link active">Home</a>
                                        <a href="#about" class="nav-item nav-link">About</a>
                                        <a href="#service" class="nav-item nav-link">Service</a>
                                        <a href="portfolio.html" class="nav-item nav-link">Project</a>
                                        <a href="single.html" class="nav-item nav-link">Single</a>
                                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                                        @if (Route::has('login'))
                                        @auth
                                            @if (Auth::user()->utype==='ADM')<div class="nav-item dropdown">
                                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">My Account</a>
                                                <div class="dropdown-menu">
                                                    {{-- <a href="#" class="dropdown-item"></a> --}}
                                                    {{-- <a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard</a> --}}
                                                    <a class="dropdown-item" href="{{route('admin.Jobs')}}">JOBS</a>
                                                    {{-- <a class="dropdown-item" href="{{route('admin.service-categories')}}">Services Categories</a> --}}
                                                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                                                </div>
                                            </div>
                                            {{-- <li class="nav-item nav-link"><a href="#">My Account Adm</a>
                                                <ul class="drop-down one-column hover-fade">
                                                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                                    <li><a href="{{route('admin.Add-Prv')}}">PRV</a></li>
                                                    <li><a href="{{route('admin.service-categories')}}">Services Categories</a></li>
                                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                </ul>
                                            </li> --}}

                                            @elseif(Auth::user()->utype==='SVP')
                                            <div class="nav-item dropdown">
                                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item">My Account</a>
                                                    {{-- <a href="{{route('customer.dashboard')}}" class="dropdown-item">Dashboard</a> --}}
                                                    <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                                                </div>
                                            </div>
                                                {{-- <li class="nav-item nav-link"><a href="#">My Account PRV</a> --}}
                                                    {{-- <div class="nav-item dropdown">
                                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                                            <div class="dropdown-menu">
                                                                <a href="{{route('sprovider.dashboard')}}" class="dropdown-item">Dashboard</a>
                                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                                                            </div>
                                                        </div>
                                                    <ul class="drop-down one-column hover-fade">
                                                        <li><a href="{{route('sprovider.dashboard')}}">Dashboard</a></li>
                                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                    </ul> --}}
                                                {{-- </li> --}}
                                            @else
                                                {{-- <li class="nav-item nav-link"><a href="#"></a> --}}
                                                    <div class="nav-item dropdown">
                                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                                            <div class="dropdown-menu">
                                                                <a href="#" class="dropdown-item">My Account cst</a>
                                                                <a href="{{route('customer.dashboard')}}" class="dropdown-item">Dashboard</a>
                                                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                                                            </div>
                                                        </div>
                                                {{-- </li> --}}
                                            @endif
                                            <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none;">
                                            @csrf
                                            </form>
                                            @else
                                            {{-- <li class="nav-item nav-link"> <a href="{{route('register')}}" title="Register">Register</a></li> --}}
                                            <li class="nav-item nav-link"> <a href="{{route('login')}}" title="Login">Login</a></li>
                                        @endif
                                    @endif
                                        <a href="#" class="btn">Get A Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="hero row align-items-center">
                        <div class="col-md-7">
                            <h2>Best & Trusted</h2>
                            <h2><span>Cleaning</span> Service</h2>
                            <p>Lorem ipsum dolor sit amet elit pretium facilisis ornare</p>
                            <a class="btn" href="">Explore Now</a>
                        </div>
                        <div class="col-md-5">
                            <img src="{{asset('assets/img/ho.svg')}}">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header End -->
        {{$slot}}
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                            <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope"></i>info@example.com</p>
                            <div class="footer-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-link">
                            <h2>Useful Link</h2>
                            <a href="">About Us</a>
                            <a href="">Our Story</a>
                            <a href="">Our Services</a>
                            <a href="">Our Projects</a>
                            <a href="">Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-link">
                            <h2>Useful Link</h2>
                            <a href="">Our Clients</a>
                            <a href="">Clients Review</a>
                            <a href="">Ongoing Project</a>
                            <a href="">Customer Support</a>
                            <a href="">FAQs</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="footer-form">
                            <h2>Stay Updated</h2>
                            <p>
                                Lorem ipsum dolor sit amet, adipiscing elit. Etiam accumsan lacus eget velit
                            </p>
                            <input class="form-control" placeholder="Email here">
                            <button class="btn">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container footer-menu">
                <div class="f-menu">
                    <a href="">Terms of use</a>
                    <a href="">Privacy policy</a>
                    <a href="">Cookies</a>
                    <a href="">Help & FQAs</a>
                    <a href="">Contact us</a>
                </div>
            </div>
            {{-- <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="https://htmlcodex.com">HTML Codex</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- Footer End -->
        
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/nav/jquery.sticky.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/totop/jquery.ui.totop.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/accordion/accordion.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/maps/gmap3.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/fancybox/jquery.fancybox.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/carousel/carousel.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/filters/jquery.isotope.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/twitter/jquery.tweet.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/flickr/jflickrfeed.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/theme-options/theme-options.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/theme-options/jquery.cookies.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap/bootstrap-slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/dtb/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/dtb/jquery.table2excel.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/dtb/script.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/select2.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/validation-rule.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/bootstrap3-typeahead.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/main.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('js/mainn.js')}}"></script>
    @livewireScripts
</body>
</html>
