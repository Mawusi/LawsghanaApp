@extends('extenders.plain_extender')

@section('title', 'Plain View Mode')
@section('content')
        <div class="container">
            <center>
            <h4>
                <b>{{ $allregAmendment['title'] }}</b>
            </h4>
            <h4>
                <b>Introductory Text</b>
            </h4>
            </center>
            <br>
            
            <div class="content">
                <p>{!! $allregAmendment['preamble'] !!}</p>
            </div> 
        </div>    

@endsection