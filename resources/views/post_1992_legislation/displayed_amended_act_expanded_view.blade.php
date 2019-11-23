
<div style="margin-top: 0.1em;">
{{--
<div class="header_only" style="margin-bottom: 5px;">
    <p><b>{{ $amendedAct['title'] }}</b></p>
</div>
--}}
<a id="print_options" href="#">Print & Download&raquo;</a>
    <div class="menu_options pull-right" style="display: none;">
        <a href="/post_1992_legislation/pdf_expanded_amended_act/content/{{$amendedAct['post_category']}}/{{$amendedAct['title']}}/{{ $amendedAct['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
        <a href="/post_1992_legislation/plain_expanded_amended_act/content/{{$amendedAct['post_category']}}/{{$amendedAct['title']}}/{{ $amendedAct['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
        <a href="/post_1992_legislation/print_expanded_amended_act/content/{{$amendedAct['post_category']}}/{{$amendedAct['title']}}/{{ $amendedAct['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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









