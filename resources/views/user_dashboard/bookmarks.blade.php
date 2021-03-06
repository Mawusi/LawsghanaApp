<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    
    <style type="text/css">
    .mt-0 {
        margin-top: 90px !important;
    }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174662621-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-174662621-1');
    </script>

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
  <body>
    {{-- <div id="app"> --}}
    <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top shadow-sm">
        <div class="container">
            <a href="/" class="">
                <img src="{{ asset('/logo/lawsghlog.png') }}" class="img-responsive" style="width:12em; padding-top: 1px; padding-bottom:1px;padding-left:1px;"> 
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <p class="pt-0 my-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A new experience,&nbsp;<span style="color:blue;" id="target"><b>clould-based platform...</b></span></p>&nbsp;&nbsp;&nbsp;&nbsp;

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    &nbsp;<a class="btn btn-sm btn-primary" href="{{ route('login') }}">Login</a>&nbsp;

                        @if (Route::has('register'))
                            <a class="btn btn-sm btn-primary" href="{{ route('register') }}">Sign Up</a>
                        @endif
                        
                    @else
                        <li class="nav-item dropdown">
                            <a style="color: blue;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Hi, {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-0">
            <div class="container mt-0">
                @include('user_dashboard.accounts_dropdown')
                        
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Bookmarks: Delete Article</b></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="/bookmarks" method="POST" id="deleteForm">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <div class="modal-body">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <p>Are you sure!</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <h2>My Bookmarks</h2>
                        </div>
                        
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%" id="datatable" class="table table-bordered table-sm">
                                    <col style="width:1%">
                                    <col style="width:70%">
                                    <col style="width:19%">
                                    <col style="width:10%">
                                    
                                    <thead class="text-primary thead-light">
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Article</th>
                                            <th scope="col">Date Added</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order_by_dates as $order_by_date)
                                        <tr>
                                            <th style="visibility: hidden">{{$order_by_date->id}}</th>
                                            <td>
                                                @if($order_by_date->act_group == 'Judiciary')
                                                    <a href="/post-1992-legislation/constitutional-acts-table-of-content/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                    <br>{{$order_by_date->act_title}}



                                                    @elseif($order_by_date->act_group == 'Acts of Parliament')
                                                        <a href="/post-1992-legislation/table-of-content/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                        <br>{{$order_by_date->act_title}}



                                                    @elseif($order_by_date->act_group == 'Legislative Instruments')
                                                        <a href="/post_1992_legislation/regulation_acts_table_of_content/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                        <br>{{$order_by_date->act_title}}



                                                    @elseif($order_by_date->act_group == 'First Republic')
                                                        <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                        <br>{{$order_by_date->act_title}}

                                                    @elseif($order_by_date->act_group == 'Second Republic')
                                                        <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                        <br>{{$order_by_date->act_title}}

                                                    @elseif($order_by_date->act_group == 'Third Republic')
                                                        <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                        <br>{{$order_by_date->act_title}}

                                                    @elseif($order_by_date->act_group == 'NLC Decree')
                                                        <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                        <br>{{$order_by_date->act_title}}

                                                    @elseif($order_by_date->act_group == 'NRC Decree')
                                                        <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                        <br>{{$order_by_date->act_title}}

                                                    @elseif($order_by_date->act_group == 'SMC Decree')
                                                        <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                        <br>{{$order_by_date->act_title}}

                                                    @elseif($order_by_date->act_group == 'AFRC Decree')
                                                        <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                        <br>{{$order_by_date->act_title}}

                                                    
                                                    
                                                    @else
                                                        <a href="/post-1992-legislation/executive-acts-table-of-content/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                        <br>{{$order_by_date->act_title}}

                                                @endif
                                            </td>
                                            <td>{{ date("F j, Y, g:i a", strtotime($order_by_date->created_at)) }}</td>
                                            <td>
                                                
                                                @if($order_by_date->act_group == 'Judiciary')
                                                    <a href="/post-1992-legislation/constitutional-acts-table-of-content/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>

                                                    @elseif($order_by_date->act_group == 'Acts of Parliament')
                                                        <a href="/post-1992-legislation/table-of-content/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_date->act_group == 'Legislative Instruments')
                                                        <a href="/post_1992_legislation/regulation_acts_table_of_content/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_date->act_group == 'First Republic')
                                                        <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_date->act_group == 'Second Republic')
                                                        <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_date->act_group == 'Third Republic')
                                                        <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_date->act_group == 'NLC Decree')
                                                        <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_date->act_group == 'NRC Decree')
                                                        <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_date->act_group == 'SMC Decree')
                                                        <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_date->act_group == 'AFRC Decree')
                                                        <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @else
                                                        <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                @endif

                                                <a href="#" class="btn btn-sm btn-outline-danger delete">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                </tbody>
                                </table>
                            </div>
                        </div>
                    {{-- </div> --}}
                {{-- </div> --}}

            </div>
    </main>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">

    $(document).ready(function(){

        var table = $('#datatable').DataTable();

        table.on('click', '.delete', function(){
            $tr = $(this).closest('tr');
            if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);

            $('#deleteForm').attr('action', '/bookmarks/'+data[0]);
            $('#deleteModal').modal('show');

        });

    });
    </script>

</body>
</html>