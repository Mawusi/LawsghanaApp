
<div style="margin-top: 0.1em;">

<div class="header" style="padding: 5px 1px 0.1px 1px;">
    <p><b>{{ $amendedAct['title'] }}</b></p>
</div>

<div class="content">	
    <label>Preamble</label>: <p><b>{{ $amendedAct['preamble'] }}</b></p>
      <hr>
    @foreach($allAmendedArticles as $allAmendedArticle)
      <h4><b>{!! $allAmendedArticle->section !!}</b></h4>
        {!! $allAmendedArticle->content !!}
      <hr><hr>
    @endforeach
</div>

</div









