@extends('extenders.main')
@section('title', 'Third Republic')

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