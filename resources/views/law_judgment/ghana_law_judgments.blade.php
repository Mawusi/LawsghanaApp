@extends('extenders.main')

@section('title', 'Ghana Case Laws')

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
                                                    <th>Case Laws Title</th>
                                                    <th>Ref No.</th>
                                                    <th>Year</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($ghlawjudgments as $ghlawjudgment)
                                                <tr>
                                                    <td>
                                                    <a href="/judgement/Ghana/{{ $ghlawjudgment->gh_law_judgment_group_name }}/{{ $ghlawjudgment->id}}"><li style="list-style: none;">{{ $ghlawjudgment->case_title }}</li></a>
                                                    </td>
                                                    <td>{{ $ghlawjudgment->reference_number }}</td>
                                                    <td>{{ $ghlawjudgment->year }}</td>
                                                </tr>
                                            @endforeach 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- for the filter -->
                                @include('law_judgment.ghana_all_judgment_container_main')
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