@extends('extenders.main')

@section('title', 'Pre 4th Republic Laws')

@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
     <style type="text/css">
        .navbar {
          min-height: 1px;
        }
        .navbar-brand {
          padding-top: 17px;
          padding-top: 17px;
          line-height: 15px;
        }
        .navbar-toggle {
          /* (80px - button height 34px) / 2 = 23px */
          margin-top: 23px;
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
    </style>
@endsection

{{--
@section('second_nav')
        @include('pre_1992_legislation.pre_1992_legislation_menu')
@endsection
--}}

@section('content')

    
    <div class="container-fluid content">
        <div class="row">
        
        @include('pre_1992_legislation.pre_1992_legislation_menu')
            <div class="col-md-7">
            
                <div class="list-group">
                    <table class="table table-striped table-condensed" id="datatable">
                        <thead>
                            <tr>
                                <th>All Pre-1992 Legislation</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($allPre1992Acts as $allPre1992Act)
                            <tr>
                                <td>
                                    <a href="/pre_1992_legislation/{{$allPre1992Act->pre_1992_group}}/{{ $allPre1992Act->title }}/{{ $allPre1992Act->id}}"><li style="list-style: none;">{{ $allPre1992Act->title }}</li></a>
                                </td> 
                                <td>{{ $allPre1992Act->year }}</td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
                        @include('pre_1992_legislation.all_pre_1992_legislation_container_main')
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