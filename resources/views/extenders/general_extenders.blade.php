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
                padding-top: 5px;
                height: 100vh;
            }

            
            
        </style>
        
    </head>

    <!-- <body style="background-color: #F8F8F8;"> -->
    <body>
        <div class="container-fluid">
            @yield('content')
        </div>

        <!-- <div class="container"> 
            @include('extenders.footer_caption')
        </div> -->
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
