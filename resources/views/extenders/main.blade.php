<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <meta name="google-site-verification" content="jas-VciTimEJrxn7M-3dFRyt1pNIDaMgvgrs8uEUXlU"/> -->
        <title>{{ setting('site.title') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/print-only.css') }}">
        <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
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
                padding-top: 62px;
                height: 100vh;
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
                            <img alt="Brand" src="{{ asset('/logo/gh_flag.png') }}" class="img-responsive" style="width:3em;">
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
                        <form class="navbar-form navbar-right">
                            <i class="fas fa-search" aria-hidden="true"></i>
                            <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
                        </form>
                    </div>
                </div>
                @yield('second_nav')
            </div>
            
            {{--
            <header class="navbar navbar-inverse clearfix navbar-fixed-top" style="line-height: 2cm;">
                <div class="container-fluid pull-right">
                    {{ menu('main', 'bootstrap') }}
                </div>
                <div class="container-fluid">
                    @include('extenders.sitelogo')
                </div>   
            </header>
            --}}
            @yield('content')
        </div>

        <div class="container"> 
            @include('extenders.footer')
        </div>
            
        

        <!--scripts-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        <!--<script src="{{ asset('js/bootstrap.min.js') }}"></script>-->
        <script src="{{ asset('js/printObject.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        <script src="{{ asset('js/myscript.js') }}"></script>
 
        @yield('scripts')

    </body>
</html>
