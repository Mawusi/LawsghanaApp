<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="The HUB of all laws, and legislation, and amendments. This website is managed by a an elite of professionals."/>

        <title> 
            @hasSection('title')
                @yield('title') - {{ setting('site.title') }}
            @else
                {{ setting('site.title') }}
            @endif
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">        
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
                font-weight: 600;
            }

            .links > a {
                color: #636b6f;
                padding: 0 30px;
                font-size: 15px;
                font-weight: 800;
                letter-spacing: .2rem;
                text-decoration: none;
                line-height: 2em;
                
                <!--text-transform: uppercase;-->
            }

            .m-b-md {
                margin-bottom: 30px;
                margin-top: 200px;
            }
            
        </style>
    </head>
    <body>
        
        <!--<div id="mySidenav" class="sidenav">-->
        <!--    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>-->
        <!--    <center><h1>Menu List</h1></center><hr>-->
        <!--    <a href="/constitution/all_countries">Constitution</a><br>-->
        <!--    <a href="/pre_1992_legislation">Pre-1992 Legislation</a><br>-->
        <!--    <a href="/post_1992_legislation">Post-1992 Legislation</a><br>-->
        <!--    <a href="/judgement/Ghana">Law Judgement</a><br>-->
        <!--    <a href="">News</a>-->
        <!--    <hr>-->
        <!--    <br>-->
        <!--    <div class="col-md-10 col-md-offset-1">-->
        <!--        <input type="text" class="form-control" aria-describedby="helpBlock" placeholder="Search Law by Act Code">-->
        <!--    </div>-->
        <!--</div>-->
        
        <div class="container">
            <a href="/" class="">
                <img src="{{ asset('/logo/gh_flag.png') }}" class="img-responsive" style="width:3em; padding-top: 5px;">
            </a>
            <!--<h2>Animated Sidenav Example</h2>-->
            <!--<p>LawsGhana Tag.</p>-->
            <!--<span style="font-size:20px;cursor:pointer" onclick="openNav()">&#9776; Law by Categories</span>-->
        </div>
        
        <!-- <div class="container flex-center position-ref full-height"> -->
        <div class="container">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <div class="container content m-b-md">
                
                <div class="row">
                    <div class="title">
                        LawsGhana
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2" style="margin-bottom: 50px; margin-top: 50px;">
                        <div class="input-group">         
                                <input type="text" class="form-control" name="x" placeholder="Search any law or case in Ghana"">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                </span>
                        </div>       
                    </div>
                </div>
                    
                    
                <div class="row">
                    <div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0 links">
                        
                            <a href="/constitution/Republic/Ghana/1">Constitution</a>
                            <a href="/pre_1992_legislation">Pre 4th Republic Laws</a>
                            <a href="/post_1992_legislation">4th Republic Laws</a>
                            <a href="/judgement/Ghana">Case Laws</a>
                            <a href="/News/Ghana-News/1">News</a>
                            <!-- <a href="/news-testing">News-Testing</a> -->
                        
                    </div>
                </div>
                
            </div> <!--end of container-->
        
<!--        <script>-->
<!--function openNav() {-->
<!--  document.getElementById("mySidenav").style.width = "300px";-->
<!--}-->

<!--function closeNav() {-->
<!--  document.getElementById("mySidenav").style.width = "0";-->
<!--}-->
<!--</script>-->
        
    </body>
</html>
