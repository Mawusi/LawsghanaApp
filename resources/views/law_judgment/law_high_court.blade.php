@extends('extenders.main')

@section('title', 'High Court')
@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('css/second_nav.css') }}">
    <style type="text/css">
    </style>
@endsection

@section('content')

{{--
@section('second_nav')
    @include('law_judgment.ghana_judgement_menu')
@endsection    
--}}
    <div class="container-fluid content">
        <div class="row">
            <div class="col-md-9">
                <div class="shadow-background">
                    <div style="padding: 15px;">
            @include('law_judgment.ghana_judgement_menu')
                        <div class="row">
                            <div class="col-md-9">
                                <div class="list-group">
                                    <table class="table table-striped table-condensed" id="datatable">
                                        <thead>
                                            <tr>
                                                <th>High Court</th>
                                                <th>Year</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($highCourts as $highCourt)
                                            <tr>
                                                <td>
                                                    <a href="/judgement/view/2/{{ $highCourt->gh_law_judgment_group_name }}/{{ $highCourt->id}}"><li style="list-style: none;">{{ $highCourt->case_title }}</li></a>
                                                </td> 
                                                <td>{{ $highCourt->year }}</td>
                                            </tr>
                                        @endforeach 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            @include('law_judgment.ghana_judgment_high_court_container')
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