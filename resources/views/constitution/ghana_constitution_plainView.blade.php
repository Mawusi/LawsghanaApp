@extends('extenders.plain_extender')
<!-- <div style="margin-top: 0.1em;">
    <div class="header" style="padding: 5px 1px 0.1px 1px;">
        <p><b>{{ $ghana_act['title'] }}</b></p>
    </div>

    <div class="content">
    {!! $ghana_act['preamble'] !!}
      <hr>	
    @foreach($ghanaArticles as $ghanaArticle)
      <h4><b>{!! $ghanaArticle->section !!}</b></h4>
        {!! $ghanaArticle->articles !!}
      <hr><hr>
    @endforeach
    </div>
</div -->

@section('content')

    <div class="container">
        <a class="btn btn-info btn-sm pull-right" href="javascript:history.back()">Back to Full View</a><br>
    </div>
    <br>
    <div class="container">
        <center><h3><b>{{ $ghana_act['title'] }}</b></h3></center>
    </div>
    <br>
    <div class="container">	
        {!! $ghana_act['preamble'] !!}
        <hr>
       @foreach($ghanaArticles as $ghanaArticle)
        <h4><b>{!! $ghanaArticle->section !!}</b></h4>
            {!! $ghanaArticle->articles !!}
        <hr><hr>
       @endforeach
    </div>
    
    
    <div class="container">
        <a class="btn btn-info btn-sm" href="javascript:history.back()">Back to Full View</a>
    </div>
    
@endsection









