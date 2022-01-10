<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->
    <title>..:: LIBRARIA ::..</title>

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="icon" type="image/x-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Mobile Menu -->
    <link href="css/mmenu.css" rel="stylesheet" type="text/css" />
    <link href="css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

    <!-- Stylesheet -->
    <link href="style.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

</head>

<body class="layout-v2">

    <!-- Start: Header Section -->
    <header id="header" class="navbar-wrapper">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="col-sm-12">
                        <!-- Header Topbar -->
                        <div class="header-topbar hidden-sm hidden-xs">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="topbar-info">
                                        <a href="tel:+61-3-8376-6284"><i class="fa fa-phone"></i>+61-3-8376-6284</a>
                                        <span>/</span>
                                        <a href="mailto:support@libraria.com"><i class="fa fa-envelope"></i>support@libraria.com</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="topbar-links">
                                        @guest
                                        <a href="{{route('auth.signin')}}"><i class="fa fa-lock"></i> @lang('site.login') / @lang('site.register')</a>
                                        @endguest
                                        @auth
                                        <a href="{{route('user.profile')}}"> {{Auth::user()->name}}</a>
                                        <span>|</span>
                                        <a href="{{route('auth.logout')}}"> @lang('site.logout')</a>
                                        <span>|</span>
                                       
                
                                                <a class="dropdown-item" href="{{route('lang.eng')}}">ENG/</a>
                                                <a class="dropdown-item" href="{{route('lang.ara')}}"> ARA</a>
                                            
                                          
                                                @endauth

                                                <span>|</span>
                                                <div class="header-cart dropdown">
                                                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                                        <i class="fa fa-shopping-cart"></i>
                                                        <small>0</small>
                                                    </a>
                                                    <div class="dropdown-menu cart-dropdown">
                                                        <ul>
                                                            <li class="clearfix">
                                                                <img src="images/header-cart-image-01.jpg" alt="cart item" />
                                                                <div class="item-info">
                                                                    <div class="name">
                                                                        <a href="#">The Great Gatsby</a>
                                                                    </div>
                                                                    <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                                    <div class="price">1 X $10.00</div>
                                                                </div>
                                                                <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                            </li>
                                                            <li class="clearfix">
                                                                <img src="images/header-cart-image-02.jpg" alt="cart item" />
                                                                <div class="item-info">
                                                                    <div class="name">
                                                                        <a href="#">The Great Gatsby</a>
                                                                    </div>
                                                                    <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                                    <div class="price">1 X $10.00</div>
                                                                </div>
                                                                <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                            </li>
                                                            <li class="clearfix">
                                                                <img src="images/header-cart-image-03.jpg" alt="cart item" />
                                                                <div class="item-info">
                                                                    <div class="name">
                                                                        <a href="#">The Great Gatsby</a>
                                                                    </div>
                                                                    <div class="author"><strong>Author:</strong> F. Scott Fitzgerald</div>
                                                                    <div class="price">1 X $10.00</div>
                                                                </div>
                                                                <a class="remove" href="#"><i class="fa fa-trash-o"></i></a>
                                                            </li>
                                                        </ul>
                                                        <div class="cart-total">
                                                            <div class="title">SubTotal</div>
                                                            <div class="price">$30.00</div>
                                                        </div>
                                                        <div class="cart-buttons">
                                                            <a href="cart.html" class="btn btn-dark-gray">View Cart</a>
                                                            <a href="checkout.html" class="btn btn-primary">Checkout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-light">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="navbar-header">
                                        <div class="navbar-brand">
                                            <h1>
                                                <a href="index-2.html">
                                                    <img src="images/libraria-logo-v2.png" alt="LIBRARIA" />
                                                </a>
                                            </h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="navbar-collapse hidden-sm hidden-xs">
                                        <ul class="nav navbar-nav">
                                            <li class="dropdown active">
                                                <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('home')}}">Home</a>
                                            </li>
                                            <li class="dropdown">
                                                <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('book.index')}}">Books &amp; Media</a>
                                            </li>
                                            <li class="dropdown">
                                                <a data-toggle="dropdown" class="dropdown-toggle disabled" href="{{route('category.index')}}">Categories</a>
                                               
                                            </li>
                                            <li class="dropdown">
                                                <a data-toggle="dropdown" class="dropdown-toggle disabled" href="#">Pages</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="cart.html">Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                    <li><a href="signin.html">Signin/Register</a></li>
                                                    <li><a href="404.html">404/Error</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a data-toggle="dropdown" class="dropdown-toggle disabled" href="blog.html">Blog</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog.html">Blog Grid View</a></li>
                                                    <li><a href="blog-detail.html">Blog Detail</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="services.html">Services</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu hidden-lg hidden-md">
                        <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                        <div id="mobile-menu">
                            <ul>
                                <li class="mobile-title">
                                    <h4>Navigation</h4>
                                    <a href="#" class="close"></a>
                                </li>
                                <li>
                                    <a href="index-2.html">Home</a>
                                    <ul>
                                        <li><a href="index-2.html">Home V1</a></li>
                                        <li><a href="home-v2.html">Home V2</a></li>
                                        <li><a href="home-v3.html">Home V3</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="books-media-list-view.html">Books &amp; Media</a>
                                    <ul>
                                        <li><a href="books-media-list-view.html">Books &amp; Media List View</a></li>
                                        <li><a href="books-media-gird-view-v1.html">Books &amp; Media Grid View V1</a></li>
                                        <li><a href="books-media-gird-view-v2.html">Books &amp; Media Grid View V2</a></li>
                                        <li><a href="books-media-detail-v1.html">Books &amp; Media Detail V1</a></li>
                                        <li><a href="books-media-detail-v2.html">Books &amp; Media Detail V2</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="news-events-list-view.html">News &amp; Events</a>
                                    <ul>
                                        <li><a href="news-events-list-view.html">News &amp; Events List View</a></li>
                                        <li><a href="news-events-detail.html">News &amp; Events Detail</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Pages</a>
                                    <ul>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="signin.html">Signin/Register</a></li>
                                        <li><a href="404.html">404/Error</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Grid View</a></li>
                                        <li><a href="blog-detail.html">Blog Detail</a></li>
                                    </ul>
                                </li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- End: Header Section -->
    @include('layout.errors')
