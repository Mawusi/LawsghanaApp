@extends('extenders.main')

@section('title', 'Pre 4th Republic Laws')

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
                    <!-- for the filter -->
                    @include('pre_1992_legislation.filter_pre_home')
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