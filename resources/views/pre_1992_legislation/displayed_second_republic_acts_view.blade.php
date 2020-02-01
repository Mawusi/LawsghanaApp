@extends('extenders.main')
@section('title', 'Second Republic')

@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('css/pre_second_nav.css') }}">
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
                                        <th>Second Republic Legislation</th>
                                        <th>Year</th>
                                    </tr>
                                </thead>
                                <tbody>
                            
                                @foreach($secondRepublicActs as $secondRepublicAct)
                                    <tr>
                                        <td>
                                            <a href="/pre_1992_legislation/{{$secondRepublicAct->pre_1992_group}}/{{ $secondRepublicAct->title }}/{{ $secondRepublicAct->id}}"><li style="list-style: none;">{{ $secondRepublicAct->title }}</li></a>
                                        </td> 
                                        <td>{{ $secondRepublicAct->year }}</td>
                                    </tr>
                                @endforeach 
                                
                                </tbody>
                            </table>
                        </div>
                    </div>  
                    <!-- for the filter -->
                    @include('pre_1992_legislation.all_second_republic_legislation_container_main')
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