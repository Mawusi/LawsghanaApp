
<div style="margin-top: 0.1em;">

<div class="header_only" style="margin-bottom: 5px;">
    <p><b>{{ $regulationAct['title'] }}</b></p>
</div>

<a id="print_options" href="#">Print & Download&raquo;</a>
    <div class="menu_options pull-right" style="display: none;">
        <a href="/post_1992_legislation/pdf/regulation/expanded/{{$regulationAct['act_category']}}/{{$regulationAct['title']}}/{{ $regulationAct['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
        <a href="/post_1992_legislation/plain/regulation/expanded/{{$regulationAct['act_category']}}/{{$regulationAct['title']}}/{{ $regulationAct['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
        <a href="/post_1992_legislation/print/regulation/expanded/{{$regulationAct['act_category']}}/{{$regulationAct['title']}}/{{ $regulationAct['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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









