@extends('extenders.main')
@section('title', 'NRC Decree')

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
                                            <th>NRC Decree</th>
                                            <th>Year</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                
                                    @foreach($nrcDecrees as $nrcDecree)
                                        <tr>
                                            <td>
                                                <a href="/pre_1992_legislation/{{$nrcDecree->pre_1992_group}}/{{ $nrcDecree->title }}/{{ $nrcDecree->id}}"><li style="list-style: none;">{{ $nrcDecree->title }}</li></a>
                                            </td> 
                                            <td>{{ $nrcDecree->year }}</td>
                                        </tr>
                                    @endforeach 
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @include('pre_1992_legislation.all_nrc_decree_container_main')
                </div>
                    </div>
                </div>
            </div>
            <!-- for the ads -->
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