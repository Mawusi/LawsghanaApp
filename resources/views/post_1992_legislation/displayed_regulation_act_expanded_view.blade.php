
<div style="margin-top: 0.1em;">

<div class="header" style="padding: 5px 1px 0.1px 1px;">
    <p><b>{{ $regulationAct['title'] }}</b></p>
</div>

<div class="content">	
    <label>Preamble</label>: <p><b>{{ $regulationAct['preamble'] }}</b></p>
      <hr>
    @foreach($allRegulationArticles as $allRegulationArticle)
      <h4><b>{!! $allRegulationArticle->section !!}</b></h4>
        {!! $allRegulationArticle->content !!}
      <hr><hr>
    @endforeach
</div>

</div









