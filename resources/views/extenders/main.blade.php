<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('meta_description')"/>
        
        <title> 
            @hasSection('title')
                @yield('title')
            @else
                {{ setting('site.title') }}
            @endif
        </title>

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('logo/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('logo/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('logo/favicon/site.webmanifest') }}">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link rel="stylesheet" href="{{ asset('css/print.css') }}" type="text/css" media="print">
        <link rel="stylesheet" href="{{ asset('css/print-preview.css') }}" type="text/css" media="screen">

        <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        @yield('assets') 
        
        <style>
            html, body {
                background-color: #f8f8f8;
                color: black;
                font-family: Arial;
                font-size: 12px;
                padding-top: 40px;
                height: 80vh;
            }
           
            #footer_div {
                padding-top: 10px;
                text-align: center;
                font-size: 12px;
            }
            #footer_ul{
                display: inline-block; 
            }
            
            ul li {
                /* display: block; */
                /* position: relative;
                float: left;
                text-align: center; */
            }

            li ul {
                /* display: none; */
            }

            ul li a {
            /* display: block; */
            /* text-decoration: none;
            color: #ffffff;
            border-top: 1px solid #ffffff;
            padding: 5px 15px 5px 15px;
            background: #1e7c9a; a little blue
            margin-left: 1px;
            white-space: nowrap; */
            }

            ul li a:hover {
                /* background: #3b3b3b; for the footer*/
            }

            li:hover ul {
            display: block;
            position: absolute;
            }

            li:hover li {
            float: none;
            font-size: 12px;
            }

            li:hover a {
            /* background: #3b3b3b; for the main tab*/ 
            }

            li:hover li a:hover {
            background: #ddd;
            }
            .navbar-default{
                /* border-color: black; */
            }
            .navbar-default .navbar-nav>li>a{
                color: black;
                font-size: 13px;
            }
            .navbar-custom {
                background-color:white;
                color:black;
                border-radius:0;
                /* border-color: black; */
                box-shadow: 0 1px 5px #e0e0e0;
            }
            .navbar-custom .navbar-nav > li > a {
            color:black;
            font-size: 12px;
            }
        </style>
        
    </head>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5e398d16298c395d1ce62ab4/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
        </script>
        <!--End of Tawk.to Script-->


    <!-- <body style="background-color: #F8F8F8;"> -->
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        <div class="container-fluid">
            <div class="navbar navbar-custom navbar-fixed-top clearfix">
                <div class="container-fluid">
                     
                     <!--logo-->
                     <div class="navbar-header">
                         <a href="/">
                            <!-- <img alt="Brand" src="{{ asset('/logo/gh_flag.png') }}" class="img-responsive" style="width:3em; padding-top: 5px;"> -->
                            <img alt="Brand" src="{{ asset('/logo/lawsghlog.png') }}" class="img-responsive" style="width:20em; padding-top: 10px; padding-bottom:10px;padding-left:50px;">

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
                    
                    <div class="collapse navbar-collapse container-fluid pull-right" style="padding-top:10px;" id="bs-example-navbar-collapse-2">
                        {{ menu('main', 'bootstrap') }}
                    </div>
                </div>
                {{--@yield('second_nav')--}}
            </div>
            @yield('content')
        </div>

        <!-- ads and footer -->
        <div class="container-fluid"> 
        @yield('assets')
            @include('extenders.footer')
        </div>
            
        

        

        <!--scripts-->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
        <!--<script src="{{ asset('js/bootstrap.min.js') }}"></script>-->
        <script src="{{ asset('js/print-preview.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        <script src="{{ asset('js/myscript.js') }}"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                //Disable full page
                $('body').bind('cut copy paste', function (e) {
                    e.preventDefault();
                });
                
                //Disable part of page
                $('#id').bind('cut copy paste', function (e) {
                    e.preventDefault();
                });
            });
        </script>
        
        
        
        @yield('scripts')

    </body>
</html>
