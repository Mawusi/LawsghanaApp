@extends('extenders.main')

@section('title', 'Supreme Court')
@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('css/pre_second_nav.css') }}">
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
                                                    <th>Supreme Court</th>
                                                    <th>Year</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($supremeCourts as $supremeCourt)
                                                <tr>
                                                    <td>
                                                        <a href="/judgement/Ghana/{{ $supremeCourt->gh_law_judgment_group_name }}/{{ $supremeCourt->id}}"><li style="list-style: none;">{{ $supremeCourt->case_title }}</li></a>
                                                        {{-- <a href="/judgement/view/1/{{ $supremeCourt->gh_law_judgment_group_name }}/{{ $supremeCourt->id}}"><li style="list-style: none;">{{ $supremeCourt->case_title }}</li></a> --}}
                                                    </td> 
                                                    <td>{{ $supremeCourt->year }}</td>
                                                </tr>
                                            @endforeach 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                @include('law_judgment.ghana_judgment_supreme_court_container')
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