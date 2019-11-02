@extends('extenders.main')
@section('title', 'Third Republic')

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

@section('content')

@section('second_nav')
    @include('pre_1992_legislation.pre_1992_legislation_menu')
@endsection

    <div class="container-fluid content">
        <div class="row">
            <div class="col-md-7">
                <div class="list-group">
                    <table class="table table-striped table-condensed" id="datatable">
                        <thead>
                            <tr>
                                <th>Third Republic Legislation</th>
                                <th>Year</th>
                            </tr>
                        </thead>
                        <tbody>
                    
                        @foreach($thirdRepublicActs as $thirdRepublicAct)
                            <tr>
                                <td>
                                    <a href="/pre_1992_legislation/{{$thirdRepublicAct->pre_1992_group}}/{{ $thirdRepublicAct->title }}/{{ $thirdRepublicAct->id}}"><li style="list-style: none;">{{ $thirdRepublicAct->title }}</li></a>
                                </td> 
                                <td>{{ $thirdRepublicAct->year }}</td>
                            </tr>
                        @endforeach 
                        
                        </tbody>
                    </table>
                </div>
            </div>
                            @include('pre_1992_legislation.all_third_republic_legislation_container_main')
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