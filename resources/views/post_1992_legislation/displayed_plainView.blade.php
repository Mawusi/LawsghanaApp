@extends('extenders.plain_extender')

@section('content')

    <div class="container">
        <a class="btn btn-info btn-sm pull-right" href="javascript:history.back()">Back to Full View</a><br>
    </div>
    
    <br>
    
    <div class="container">	
        <h4><b>Preamble</b></h4><p>{!! $allPost1992Act['preamble'] !!}</p>
        <hr>
        @foreach($allPost1992Articles as $allPost1992Article)
            
                <h4><b>{{$allPost1992Article->section }}</b></h4>
                {!! $allPost1992Article->content !!}
                <hr><br>

        @endforeach
    </div>
    
    <div class="container">
        <a class="btn btn-info btn-sm" href="javascript:history.back()">Back to Full View</a>
    </div>
    
@endsection    