@extends('extenders.main')

@section('title', 'Europe Constitution')

@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('css/pre_second_nav.css') }}">
    <style type="text/css">
    </style>
@endsection

@section('content')

{{--
@section('second_nav')
    @include('constitution.constitution_menu')
@endsection
--}}

    <div class="container-fluid content">
        <div class="row">
            <div class="col-md-9">
                <div class="shadow-background">
                    <div style="padding: 15px;">
            @include('constitution.constitution_menu')
                    <div class="row">
                        <div class="col-md-9">
                            <div class="list-group">
                                <table class="table table-striped table-condensed" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>Name of Country</th>
                                            <th>Constitution Title</th>
                                            <th>Year</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($europeConstitutions as $europeConstitution)
                                        <tr>
                                            <td>{{ $europeConstitution->country }}</td>
                                            <td>
                                                <a href="/constitution/1/{{ $europeConstitution->continent }}/{{ $europeConstitution->country }}/{{ $europeConstitution->id}}"><li style="list-style: none;">{{ $europeConstitution->title }}</li></a>
                                            </td> 
                                            <td>{{ $europeConstitution->year }}</td>  
                                        </tr>
                                    @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @include('constitution.europe_container_main')
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