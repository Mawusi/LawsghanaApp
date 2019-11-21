@extends('extenders.main')

@section('meta_description', 'The authority arbiter of any country')
@section('title', 'All Constitution')

@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('css/second_nav.css') }}">
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
                            
                                @foreach($allCountriesConstitutions as $allCountriesConstitution)
                                    <tr>
                                        <td>{{ $allCountriesConstitution->country }}</td>
                                        <td>
                                            <a href="/constitution/{{ $allCountriesConstitution->country }}/{{ $allCountriesConstitution->id}}"><li style="list-style: none;">{{ $allCountriesConstitution->title }}</li></a>
                                        </td> 
                                        <td>{{ $allCountriesConstitution->year }}</td>  
                                    </tr>
                                @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- for the filter -->
                    @include('constitution.all_countries_container_main')
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