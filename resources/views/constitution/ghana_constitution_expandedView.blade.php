
<div style="margin-top: 0.1em;">
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
</div









