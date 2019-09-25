@extends('extenders.plain_extender')

@section('title', 'Plain View Mode')
@section('content')

    <div class="container">
        <!-- <a class="btn btn-info btn-sm pull-right" href="javascript:history.back()">Back to Table of Contents</a><br> -->
    </div>

    <div class="container">
        <center><h3><b>{{ $allPre1992Act['title'] }}</b></h3></center>
    </div>
    
    <br>
    
    <div class="container">	
        <h4><b>Preamble</b></h4><p>{!! $allPre1992Act['preamble'] !!}</p>
        <hr>
        @foreach($allPre1992Articles as $allPre1992Article)
            
                <center><h4><b>{{$allPre1992Article->part }}</b></h4></center><br>
                <h4><b>{{$allPre1992Article->section }}</b></h4>
                {!! $allPre1992Article->content !!}
                <hr><br>

        @endforeach
    </div>
    
    <div class="container">
        <!-- <a class="btn btn-info btn-sm" href="javascript:history.back()">Back to Table of Contents</a> -->
    </div>
    
@endsection    