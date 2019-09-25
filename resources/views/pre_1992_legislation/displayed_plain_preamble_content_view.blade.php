@extends('extenders.plain_extender')

@section('title', 'Plain Preview Mode')
@section('content')
        <div class="container">
            <center>
            <h4>
                <b>{{ $allPre1992Act['title'] }}</b>
            </h4>
            <h4>
                <b>Introductory Text</b>
            </h4>
            </center>
            <br>
            
            <div class="content">
                <p>{!! $allPre1992Act['preamble'] !!}</p>
            </div> 
        </div>    

@endsection