<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="@yield('meta_description')"/>
        
        <title> 
            @hasSection('title')
                @yield('title')
            @else
                {{ setting('site.title') }}
            @endif
        </title>

        <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/css-news/icomoon-style.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="{{ asset('css/css-news/bootstrap.min.css') }}"> -->
        <link rel="stylesheet" href="{{ asset('css/css-news/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('css/css-news/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/css-news/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/css-news/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/css-news/bootstrap-datepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('css/css-news/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('css/css-news/aos.css') }}">
        <link href="{{ asset('css/css-news/jquery.mb.YTPlayer.min.css') }}" media="all" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/css-news/news-style.css') }}">

        @yield('assets') 
        
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

        <div class="site-wrap">

            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div> 

            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6 d-flex">
                            <a href="index.html" class="site-logo">
                                LawsGhana News
                            </a>

                            <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a>
                        </div>
                        <div class="col-12 col-lg-6 ml-auto d-flex">
                        {{--
                            <div class="ml-md-auto top-social d-none d-lg-inline-block">
                                <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
                                <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
                                <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
                            </div>
                            
                            <form action="#" class="search-form d-inline-block">
                                <div class="d-flex">
                                    <input type="email" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn btn-secondary" ><span class="icon-search"></span></button>
                                </div>
                            </form>
                        --}}
                        </div>
                        <div class="col-6 d-block d-lg-none text-right"></div>
                    </div>
                </div>
    
                <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <div class="mr-auto">
                                <nav class="site-navigation position-relative text-right" role="navigation">
                                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                        <span class="lead" style="padding: 70px;">
                                            <a href="/" class="nav-link text-left">LawsGhana</a>
                                        </span>
                                        <li class="invisible">
                                            <a href="/Asia-News" class="nav-link text-left">Asia News</a>
                                        </li>
                                        @foreach($newsCategories as $newsCategory)
                                        <li class="active">
                                            <a href="/{{$newsCategory->name}}" class="nav-link text-left">{{ $newsCategory->name }}</li></a>
                                        </li>
                                        @endforeach 
                                    </ul> 
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end of news header -->  
            </div> 
            <!-- End of top header -->
            <div class="container-fluid">
                @yield('content')
            </div>

            <!-- Newsletter Subcribe -->
            <div class="site-section-bottom subscribe bg-light">
                <div class="container">
                    <form action="#" class="row align-items-center">
                    <div class="col-md-5 mr-auto">
                        <h2>Newsletter Subcribe</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis aspernatur ut at quae omnis pariatur obcaecati possimus nisi ea iste!</p>
                    </div>
                    <div class="col-md-6 ml-auto">
                        <div class="d-flex">
                        <input type="email" class="form-control" placeholder="Enter your email">
                        <button type="submit" class="btn btn-secondary" ><span class="icon-paper-plane"></span></button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>
        <!-- end of site site-wrap -->

        <!-- Footer -->
        <!-- <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright">
                            <p>
                                Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                All rights reserved 
                                | This template is made with
                                <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                                Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- loader -->
        <div id="loader" class="show fullscreen">
            <svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/>
            </svg>
        </div>

        <!--scripts-->
        <script src="{{ asset('js/js-news/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('js/js-news/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('js/js-news/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/js-news/popper.min.js') }}"></script>
        <script src="{{ asset('js/js-news/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/js-news/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/js-news/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('js/js-news/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('js/js-news/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('js/js-news/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('js/js-news/aos.js') }}"></script>
        <script src="{{ asset('js/js-news/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('js/js-news/jquery.sticky.js') }}"></script>
        <script src="{{ asset('js/js-news/jquery.mb.YTPlayer.min.js') }}"></script> 
        <script src="{{ asset('js/js-news/main.js') }}"></script>

        
        @yield('scripts')

    </body>
</html>
