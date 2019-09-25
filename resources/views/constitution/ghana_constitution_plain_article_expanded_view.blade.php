@extends('extenders.plain_extender')

@section('title', 'Plain View Mode')
@section('content')

    <div class="container">
        <!-- <a class="btn btn-info btn-sm pull-right" href="javascript:history.back()">Back to Table of Contents</a><br> -->
    </div>

    <div class="container">
        <center><h3><b>{{ $ghana_act['title'] }}</b></h3></center>
    </div>
    
    <br>
    
    <div class="container">	
        <h4><b>Preamble</b></h4><p>{!! $ghana_act['preamble'] !!}</p>
        <hr>
        @foreach($ghana_acts as $ghana_act)
            
                <center><h4><b>{{$ghana_act->chapter }}</b></h4></center><br>
                <h4><b>{{$ghana_act->section }}</b></h4>
                {!! $ghana_act->articles !!}
                <hr><br>

        @endforeach
    </div>
    
    <div class="container">
        <!-- <a class="btn btn-info btn-sm" href="javascript:history.back()">Back to Table of Contents</a> -->
    </div>
    
@endsection    