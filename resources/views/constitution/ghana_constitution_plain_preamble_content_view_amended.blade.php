@extends('extenders.plain_extender')

@section('title', 'Plain Preview Mode')
@section('content')
        <div class="container">
            <center>
            <h4>
                <b>{{ $ghana_act_amended['title'] }}</b>
            </h4>
            <h4>
                <b>Introductory Text</b>
            </h4>
            </center>
            <br>
            
            <div class="content">
                <p>{!! $ghana_act_amended['preamble'] !!}</p>
            </div> 
        </div>    

@endsection