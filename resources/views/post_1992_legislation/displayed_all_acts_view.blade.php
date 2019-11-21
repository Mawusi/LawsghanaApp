@extends('extenders.main')

@section('title', '4th Republic Laws')

@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('css/second_nav.css') }}">
    <style type="text/css">
    </style>
@endsection

@section('content')

{{--
@section('second_nav')
    @include('post_1992_legislation.post_1992_legislation_menu')
@endsection
--}}

    <div class="container-fluid content">
        <div class="row">
            <div class="col-md-9">
            @include('post_1992_legislation.post_1992_legislation_menu')                    
                    <div class="row">
                        <div class="col-md-9">
                            <div class="list-group">
                                <table class="table table-striped table-condensed" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>All Post-1992 Legislation</th>
                                            <th>Year</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <!-- Acts of Parliament -->
                                    @foreach($allPost1992Acts as $allPost1992Act)
                                        <tr>
                                            <td>
                                                <a href="/post_1992_legislation/acts_table_of_content/{{$allPost1992Act->post_group}}/{{ $allPost1992Act->title }}/{{ $allPost1992Act->id}}"><li style="list-style: none;">{{ $allPost1992Act->title }}</li></a>
                                            </td> 
                                            <td>{{ $allPost1992Act->year }}</td>
                                        </tr>
                                    @endforeach

                                    <!-- Regulations -->
                                    @foreach($allPostRegulations as $allPostRegulation)
                                        <tr>
                                            <td>
                                                <a href="/post_1992_legislation/regulation_acts_table_of_content/{{$allPostRegulation->act_category}}/{{ $allPostRegulation->title }}/{{ $allPostRegulation->id}}"><li style="list-style: none;">{{ $allPostRegulation->title }}</li></a>
                                            </td> 
                                            <td>{{ $allPostRegulation->year }}</td>
                                        </tr>
                                    @endforeach

                                    <!-- Amendments on Acts -->
                                    @foreach($allPostsAmends as $allPostsAmend)
                                        <tr>
                                            <td>
                                                <a href="/post_1992_legislation/amended_acts_table_of_content/{{$allPostsAmend->post_category}}/{{ $allPostsAmend->title }}/{{ $allPostsAmend->id}}"><li style="list-style: none;">{{ $allPostsAmend->title }}</li></a>
                                            </td> 
                                            <td>{{ $allPostsAmend->year }}</td>
                                        </tr>
                                    @endforeach

                                    <!-- Amendments on Regulations -->
                                    @foreach($allPostsAmendsOnRegulations as $allPostsAmendsOnRegulation)
                                        <tr>
                                            <td>
                                                <a href="/post_1992_legislation/amended_regulation_acts_table_of_content/{{$allPostsAmendsOnRegulation->act_category}}/{{ $allPostsAmendsOnRegulation->title }}/{{ $allPostsAmendsOnRegulation->id}}"><li style="list-style: none;">{{ $allPostsAmendsOnRegulation->title }}</li></a>
                                            </td> 
                                            <td>{{ $allPostsAmendsOnRegulation->year }}</td>
                                        </tr>
                                    @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                    </div>
                        <!-- for the filter -->
                        @include('post_1992_legislation.filter_post_home')
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