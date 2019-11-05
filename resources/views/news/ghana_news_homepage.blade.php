@extends('extenders.main')

@section('title', 'Ghana News')

@section('assets')
    <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/css-news/news-style.css') }}">

     <style type="text/css">
        
    </style>
@endsection



@section('content')
<div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

    <div class="container">
      <div class="d-flex align-items-center">
        
        <div class="mr-auto">
          <nav class="site-navigation position-relative text-right" role="navigation">
            <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
              <li class="active">
                <a href="/Ghana-News" class="nav-link text-left">Ghana News</a>
              </li>
              <li>
                <a href="Africa-News" class="nav-link text-left">Africa News</a>
              </li>
              <li>
                <a href="Europe-News" class="nav-link text-left">Europe News</a>
              </li>
              <li>
                <a href="America-News" class="nav-link text-left">America News</a>
              </li>
              <li>
                  <a href="/Asia-News" class="nav-link text-left">Asia News</a>
              </li>
              
            </ul>                                                                                                                                                                                                                                                                                         
          </nav>

        </div>
      
      </div>
    </div>

</div>
    

@endsection

@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function(){
            $('#datatable').DataTable();
        });
    </script>
@endsection