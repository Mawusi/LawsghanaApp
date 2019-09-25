@extends('extenders.plain_extender')

@section('title', 'Plain Preview Mode')
@section('content')


     <div class="container">    
        <center><h4><b>{{ $country_act['title'] }}</b></h4></center>
        <br>
        <div class="content">
            <p>{!! $country_act['content'] !!}</p>
        </div>
        
    </div>    

@endsection