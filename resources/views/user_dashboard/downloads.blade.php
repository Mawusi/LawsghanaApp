<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <style>
         /* body {
                background-color: white;
            } */
    </style>

    <title>LawsGhana</title>
  </head>
  <body>
    {{-- <div id="app"> --}}
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a href="/" class="">
                <img src="{{ asset('/logo/lawsghlog.png') }}" class="img-responsive" style="width:18em; padding-top: 5px; padding-bottom:5px;padding-left:5px;"> 
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
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

    

    <main class="py-4">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="/accounts/profile/{{ Auth::user()->id }}">Profile</a></li>
                      <li class="breadcrumb-item"><a href="/accounts/manage-password">Manage Accounts</a></li>
                      <li class="breadcrumb-item"><a href="/accounts/bookmarks/{{ Auth::user()->id }}">Bookmarks</a></li>
                      <li class="breadcrumb-item"><a href="/accounts/downloads/{{ Auth::user()->id }}">Downloads</a></li>
                      <li class="breadcrumb-item"><a href="#">Subscriptions</a></li>
                      {{-- <li class="breadcrumb-item active" aria-current="page">Data</li> --}}
                    </ol>
                </nav>
                
                {{-- <div class="row justify-content-center"> --}}
                    {{-- <div class="col-md-11"> --}}
                    <!-- Button trigger modal -->
                        
                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal_section" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><b>Dowloads: Delete Article</b></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="/downloads" method="POST" id="deleteForm_section">
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
                            <h2>My Downloads</h2>
                        </div>

                        <div class="col-md-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                  <li class="breadcrumb-item show_sections"><a href="javascript:;">Sections</a></li>
                                  <li class="breadcrumb-item show_full_acts"><a href="javascript:;">Full Acts</a></li>
                                  {{-- <li class="breadcrumb-item active" aria-current="page">Data</li> --}}
                                </ol>
                            </nav>
                        </div>
                        
                        {{-- FOR SECTIONS DOWNLOADS --}}
                        <div class="card-body single_section">
                            <div class="table-responsive">
                                <table width="100%" id="datatable_sections" class="table table-bordered table-sm">
                                    <col style="width:1%">
                                    <col style="width:68%">
                                    <col style="width:19%">
                                    <col style="width:12%">
                                    
                                    <thead class="text-primary thead-light">
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Sections</th>
                                            <th scope="col">Date Added</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order_by_sections as $order_by_section)
                                        <tr>
                                            <th style="visibility: hidden">{{$order_by_section->id}}</th>
                                            <td>
                                                @include('all_user_downloads.section_act_link')
                                            </td>
                                            <td>{{ date("F j, Y, g:i a", strtotime($order_by_section->created_at)) }}</td>
                                            <td>
                                                @include('all_user_downloads.section_act_download_link_icon')    
                                                @include('all_user_downloads.section_act_link_icon')
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

                        {{-- FOR FULL ACTS DOWNLOADS --}}
                        <div class="card-body full_acts">
                            <div class="table-responsive">
                                <table width="100%" id="datatable_full_acts" class="table table-bordered table-sm">
                                    <col style="width:1%">
                                    <col style="width:68%">
                                    <col style="width:19%">
                                    <col style="width:12%">
                                    
                                    <thead class="text-primary thead-light">
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Acts</th>
                                            <th scope="col">Date Added</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($order_by_acts as $order_by_act)
                                        <tr>
                                            <th style="visibility: hidden">{{$order_by_act->id}}</th>
                                            <td>
                                                @include('all_user_downloads.full_act_link')
                                            </td>
                                            <td>{{ date("F j, Y, g:i a", strtotime($order_by_act->created_at)) }}</td>
                                            <td>
                                                @include('all_user_downloads.full_act_download_link_icon')
                                                @include('all_user_downloads.full_act_link_icon')
                                                <a href="#" class="btn btn-sm btn-outline-danger delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
        var table = $('#datatable_sections').DataTable();

        table.on('click', '.delete', function(){
            $tr = $(this).closest('tr');
            if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);

            $('#deleteForm_section').attr('action', '/downloads/'+data[0]);
            $('#deleteModal_section').modal('show');

        });

    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
    
        var table = $('#datatable_full_acts').DataTable();

        table.on('click', '.delete', function(){
            $tr = $(this).closest('tr');
            if($($tr).hasClass('child')){
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            console.log(data);

            $('#deleteForm_section').attr('action', '/downloads/'+data[0]);
            $('#deleteModal_section').modal('show');

        });

    });
</script>

<script>
    $(document).ready(function(){
        $('.full_acts').hide();

        $('.show_full_acts').click(function(){
            $('.full_acts').show();
            $('.single_section').hide();  
        });

        $('.show_sections').click(function(){
            $('.single_section').show();
            $('.full_acts').hide();  
        });
    });
</script>

</body>
</html>