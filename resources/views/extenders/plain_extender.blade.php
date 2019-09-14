<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="google-site-verification" content="jas-VciTimEJrxn7M-3dFRyt1pNIDaMgvgrs8uEUXlU"/> -->
        <title> 
            @hasSection('title')
                @yield('title')
            @else
                {{ setting('site.title') }}
            @endif
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/print-only.css') }}">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        @yield('assets') 
        
        <style>
            html, body {
                background-color: #fff;
                color: black;
                font-family: Arial;
                font-size: 12px;
                padding-top: 30px;
                height: 100vh;
            }

            .search-form .form-group {
                float: right !important;
                transition: all 0.35s, border-radius 0s;
                width: 32px;
                height: 32px;
                background-color: #fff;
                box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
                border-radius: 25px;
                border: 1px solid #ccc;
            }
                .search-form .form-group input.form-control {
                padding-right: 20px;
                border: 0 none;
                background: transparent;
                box-shadow: none;
                display:block;
            }
                .search-form .form-group input.form-control::-webkit-input-placeholder {
                display: none;
            }
                .search-form .form-group input.form-control:-moz-placeholder {
                /* Firefox 18- */
                display: none;
            }
                .search-form .form-group input.form-control::-moz-placeholder {
                /* Firefox 19+ */
                display: none;
            }
                .search-form .form-group input.form-control:-ms-input-placeholder {
                display: none;
            }
                .search-form .form-group:hover,
                .search-form .form-group.hover {
                width: 100%;
                border-radius: 4px 25px 25px 4px;
            }
                .search-form .form-group span.form-control-feedback {
                position: absolute;
                top: -1px;
                right: -2px;
                z-index: 2;
                display: block;
                width: 34px;
                height: 34px;
                line-height: 34px;
                text-align: center;
                color: #3596e0;
                left: initial;
                font-size: 14px;
            }
            
        </style>
        
    </head>

    <!-- <body style="background-color: #F8F8F8;"> -->
    <body>
        <div class="container-fluid">
            <div class="navbar navbar-default navbar-fixed-top clearfix">
                <div class="container-fluid">
                     
                     <!--logo-->
                     <div class="navbar-header">
                         <a href="/">
                            <img alt="Brand" src="{{ asset('/logo/gh_flag.png') }}" class="img-responsive" style="width:3em; padding-top: 5px;">
                        </a>
                     </div>
                     
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <!--<a class="navbar-brand"><strong>Pre-1992-Legislation</strong></a>-->
                    </div>
                    
                    <div class="collapse navbar-collapse container-fluid pull-right" id="bs-example-navbar-collapse-2">
                        {{ menu('main', 'bootstrap') }}
                        <form action="" class="pull-right search-form" style="padding-top: 5px;">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
                                <input type="text" class="form-control" name="search" id="search" placeholder="keyword search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </form>
                    </div>
                </div>
                @yield('second_nav')
            </div>
            
           
            @yield('content')
        </div>

        <!--scripts-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!--<script src="{{ asset('js/bootstrap.min.js') }}"></script>-->
        <script src="{{ asset('js/printObject.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        <script src="{{ asset('js/myscript.js') }}"></script>
        
        @yield('scripts')

    </body>
</html>
