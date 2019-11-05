@extends('extenders.main')

@section('title', 'Europe News')

@section('assets')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
     <style type="text/css">
        
    </style>
@endsection



@section('content')
    Ghana is the main home
    

@endsection

@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function(){
            $('#datatable').DataTable();
        });
    </script>
@endsection