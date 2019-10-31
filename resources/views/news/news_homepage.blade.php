@extends('extenders.main')

@section('title', 'All News')

@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
     <style type="text/css">
        .navbar {
          min-height: 10px;
        }
        .navbar-brand {
          padding-top: 10px;
          padding-top: 10px;
          line-height: 15px;
        }
        .navbar-toggle {
          /* (80px - button height 34px) / 2 = 23px */
          margin-top: 13px;
          padding: 9px 10px !important;
        }
        @media (min-width: 768px) {
          .navbar-nav > li > a {
            /* (80px - line-height of 27px) / 2 = 26.5px */
            padding-top: 10px;
            padding-bottom: 10px;
            line-height: 10px;
          }
        }
        .content {
            padding: 0.1px;
        }
        .gi-2x{font-size: 0.1em;}
    </style>
@endsection

@section('second_nav')
        @include('news.news_menu')
@endsection

@section('content')
    
    

@endsection

@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function(){
            $('#datatable').DataTable();
        });
    </script>
@endsection