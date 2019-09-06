@extends('extenders.plain_extender')

@section('content')
    <div class="container">
        <center><h4><b>{{ $allGhanaLawPlainView['gh_law_judgment_group_name'] }}</b></h4></center><br>
        <div class="content">
            <p>{!! $allGhanaLawPlainView['content'] !!}</p>
        </div>
        
    </div>    

@endsection