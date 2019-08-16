
<div style="margin-top: 0.1em;">

<div class="header" style="padding: 5px 1px 0.1px 1px;">
    <p><b>{{ $amendedRegulationAct['title'] }}</b></p>
</div>

<div class="content">	
    <label>Preamble</label>: <p><b>{{ $amendedRegulationAct['preamble'] }}</b></p>
      <hr>
    @foreach($allAmendedRegulationArticles as $allAmendedRegulationArticle)
      <h4><b>{!! $allAmendedRegulationArticle->section !!}</b></h4>
        {!! $allAmendedRegulationArticle->content !!}
      <hr><hr>
    @endforeach
</div>

</div









