@extends('extenders.plain_extender')

@section('title', 'Plain View Mode')
@section('content')

    <div class="container">
        <!-- <a class="btn btn-info btn-sm pull-right" href="javascript:history.back()">Back to Table of Contents</a><br> -->
    </div>

    <div class="container">
        <center><h3><b>{{ $ghana_act_amended['title'] }}</b></h3></center>
    </div>
    
    <br>
    
    <div class="container">	
        <h4><b>Preamble</b></h4><p>{!! $ghana_act_amended['preamble'] !!}</p>
        <hr>
        @foreach($ghana_act_amendeds as $ghana_act_amended)
            
                <center><h4><b>{{$ghana_act_amended->chapter }}</b></h4></center><br>
                <h4><b>{{$ghana_act_amended->section }}</b></h4>
                {!! $ghana_act_amended->articles !!}
                <hr><br>

        @endforeach
    </div>
    
    <div class="container">
        <!-- <a class="btn btn-info btn-sm" href="javascript:history.back()">Back to Table of Contents</a> -->
    </div>
    
@endsection    