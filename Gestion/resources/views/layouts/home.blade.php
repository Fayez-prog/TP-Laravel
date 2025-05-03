<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Best Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <!-- js -->
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <!-- //js -->
    <!-- cart -->
    <script src="{{ asset('js/simpleCart.min.js')}}"></script>
    <!-- cart -->
    <!-- for bootstrap working -->
    <script type="text/javascript" src="{{ asset('js/bootstrap-3.1.1.min.js')}}"></script>
    <!-- //for bootstrap working -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- timer -->
    <link rel="stylesheet" href="{{ asset('css/jquery.countdown.css')}}" />
    <!-- //timer -->
    <!-- animation-effect -->
    <link href="{{ asset('css/animate.min.css')}}" rel="stylesheet"> 
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <script>
     new WOW().init();
    </script>
    <!-- //animation-effect -->    
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8fafc;
        }
        .sidebar {
            min-width: 250px;
        }
        .product-card {
            transition: transform 0.2s;
        }
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .product-image {
            height: 200px;
            object-fit: contain;
        }
        .nav-link {
            padding: 0.5rem 1rem;
        }
        
        /* Styles for the second navbar */
        .second-navbar {
            background-color: #3b5998 !important;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 0.5rem 0;
        }
        
        .second-navbar .navbar-brand {
            font-weight: 700;
            font-size: 1.25rem;
            color: white !important;
        }
        
        .second-navbar .nav-link {
            color: rgba(255,255,255,0.85) !important;
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            margin: 0 0.25rem;
            border-radius: 4px;
            transition: all 0.3s ease;
        }
        
        .second-navbar .nav-link:hover,
        .second-navbar .nav-link:focus {
            color: white !important;
            background-color: rgba(255,255,255,0.1);
            transform: translateY(-2px);
        }
        
        .second-navbar .nav-link i {
            margin-right: 5px;
        }
        
        .second-navbar .navbar-toggler {
            border-color: rgba(255,255,255,0.5);
        }
        
        .second-navbar .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.85%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
    </style>

    @yield('extra-head')
</head>
<body>
<!-- header -->
    <div class="header">
        <div class="container">
            <div class="header-grid">
                <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
                    <ul>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">@example.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
                        <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="{{ route('login')}}">Login</a></li>
                        <li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="{{ route('register')}}">Register</a></li>
                    </ul>
                </div>
                <div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
                    <ul class="social-icons">
                        <li><a href="#" class="facebook"></a></li>
                        <li><a href="#" class="twitter"></a></li>
                        <li><a href="#" class="g"></a></li>
                        <li><a href="#" class="instagram"></a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="logo-nav">
                <div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
                    <h1><a href="{{ route('index')}}">Best Store <span>Shop anywhere</span></a></h1>
                </div>
                <div class="logo-nav-left1">
                    <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div> 
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{ route('index')}}" class="act">Home</a></li>    
                            <!-- Mega Menu -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Men's Wear</h6>
                                                <li><a href="{{ route('products')}}">Clothing</a></li>
                                                <li><a href="{{ route('products')}}">Wallets</a></li>
                                                <li><a href="{{ route('products')}}">Shoes</a></li>
                                                <li><a href="{{ route('products')}}">Watches</a></li>
                                                <li><a href="{{ route('products')}}">Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Women's Wear</h6>
                                                <li><a href="{{ route('products')}}">Clothing</a></li>
                                                <li><a href="{{ route('products')}}">Wallets,Bags</a></li>
                                                <li><a href="{{ route('products')}}">Footwear</a></li>
                                                <li><a href="{{ route('products')}}">Watches</a></li>
                                                <li><a href="{{ route('products')}}">Accessories</a></li>
                                                <li><a href="{{ route('products')}}">Jewellery</a></li>
                                                <li><a href="{{ route('products')}}">Beauty & Grooming</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Kid's Wear</h6>
                                                <li><a href="{{ route('products')}}">Kids Home Fashion</a></li>
                                                <li><a href="{{ route('products')}}">Boy's Clothing</a></li>
                                                <li><a href="{{ route('products')}}">Girl's Clothing</a></li>
                                                <li><a href="{{ route('products')}}">Shoes</a></li>
                                                <li><a href="{{ route('products')}}">Brand Stores</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Furniture <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Home Collection</h6>
                                                <li><a href="{{ route('furniture')}}">Cookware</a></li>
                                                <li><a href="{{ route('furniture')}}">Sofas</a></li>
                                                <li><a href="{{ route('furniture')}}">Dining Tables</a></li>
                                                <li><a href="{{ route('furniture')}}">Shoe Racks</a></li>
                                                <li><a href="{{ route('furniture')}}">Home Decor</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Office Collection</h6>
                                                <li><a href="{{ route('furniture')}}">Carpets</a></li>
                                                <li><a href="{{ route('furniture')}}">Tables</a></li>
                                                <li><a href="{{ route('furniture')}}">Sofas</a></li>
                                                <li><a href="{{ route('furniture')}}">Shoe Racks</a></li>
                                                <li><a href="{{ route('furniture')}}">Sockets</a></li>
                                                <li><a href="{{ route('furniture')}}">Electrical Machines</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <ul class="multi-column-dropdown">
                                                <h6>Decorations</h6>
                                                <li><a href="{{ route('furniture')}}">Toys</a></li>
                                                <li><a href="{{ route('furniture')}}">Wall Clock</a></li>
                                                <li><a href="{{ route('furniture')}}">Lighting</a></li>
                                                <li><a href="{{ route('furniture')}}">Top Brands</a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="{{ route('short-codes')}}">Short Codes</a></li>
                            <li><a href="{{ route('mail')}}">Mail Us</a></li>
                        </ul>
                    </div>
                    </nav>
                </div>
                <div class="logo-nav-right">
                    <div class="search-box">
                        <div id="sb-search" class="sb-search">
                            <form>
                                <input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"> </span>
                            </form>
                        </div>
                    </div>
                        <!-- search-scripts -->
                        <script src="{{ asset('js/classie.js')}}"></script>
                        <script src="{{ asset('js/uisearch.js')}}"></script>
                            <script>
                                new UISearch( document.getElementById( 'sb-search' ) );
                            </script>
                        <!-- //search-scripts -->
                </div>
                <div class="header-right">
                    <div class="cart box_1">
                        <a href="checkout.html">
                            <h3> <div class="total">
                                <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                                <img src="images/bag.png" alt="" />
                            </h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                        <div class="clearfix"> </div>
                    </div>    
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!-- //header -->

<!-- Improved Second Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark second-navbar mb-4">
    <div class="container">
        <a class="navbar-brand" href="/">
            <i class="fas fa-box-open me-2"></i>Product Management
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a href="{{ url('/dashboard') }}" class="nav-link">
                                <i class="fas fa-tachometer-alt me-1"></i> Dashboard
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">
                                <i class="fas fa-sign-in-alt me-1"></i> Log in
                            </a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">
                                    <i class="fas fa-user-plus me-1"></i> Register
                                </a>
                            </li>
                        @endif
                    @endauth
                @endif
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category.new') }}">
                        <i class="fas fa-tags me-1"></i> New Category
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product.new') }}">
                        <i class="fas fa-cube me-1"></i> New Product
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @if(session('status'))
        <div class="alert alert-{{ session('status') }} alert-dismissible fade show">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
    @yield('content')
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@yield('scripts')
</body>
</html>