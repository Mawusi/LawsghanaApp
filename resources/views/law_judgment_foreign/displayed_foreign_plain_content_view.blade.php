@extends('extenders.plain_extender')

@section('title', 'Plain View Mode')
@section('content')
    <div class="container">

        <div class="content">
            <p>{!! $allForeignLawplain['content'] !!}</p>
        </div>
        
    </div>    

@endsection