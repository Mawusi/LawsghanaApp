@extends('extenders.main')
@section('title', 'AFRC Decree')

@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('css/second_nav.css') }}">
    <style type="text/css">
    </style>
@endsection

@section('content')

{{--
@section('second_nav')
    @include('pre_1992_legislation.pre_1992_legislation_menu')
@endsection
--}}

    <div class="container-fluid content">
        <div class="row">
            <div class="col-md-9">
                <div class="shadow-background">
                    <div style="padding: 15px;">
            @include('pre_1992_legislation.pre_1992_legislation_menu')
                <div class="row">
                    <div class="col-md-9">
                        <div class="list-group">
                            <table class="table table-striped table-condensed" id="datatable">
                                <thead>
                                    <tr>
                                        <th>AFRC Decree</th>
                                        <th>Year</th>
                                    </tr>
                                </thead>
                                <tbody>
                            
                                @foreach($afrcDecrees as $afrcDecree)
                                    <tr>
                                        <td>
                                            <a href="/pre_1992_legislation/{{$afrcDecree->pre_1992_group}}/{{ $afrcDecree->title }}/{{ $afrcDecree->id}}"><li style="list-style: none;">{{ $afrcDecree->title }}</li></a>
                                        </td> 
                                        <td>{{ $afrcDecree->year }}</td>
                                    </tr>
                                @endforeach 
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @include('pre_1992_legislation.all_afrc_decree_container_main')
                </div>
                    </div>
                </div>
            </div>
            @include('extenders.ads')
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