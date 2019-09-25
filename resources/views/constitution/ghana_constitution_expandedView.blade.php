
<div style="margin-top: 0.1em;">
    <div class="header_only" style="margin-bottom: 5px;">
        <p><b>{{ $ghana_act['title'] }}</b></p>
    </div>

    <a id="print_options" href="#">Print & Download&raquo;</a>
    <div class="menu_options pull-right" style="display: none;">
        <a href="/constitution/Republic/{{$ghana_act['gh_group']}}/{{$ghana_act['title']}}/pdf_view/{{ $ghana_act['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
        <a href="/constitution/Republic/{{$ghana_act['gh_group']}}/{{$ghana_act['title']}}/plain_view/{{ $ghana_act['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
        <a href="/constitution/Republic/{{$ghana_act['gh_group']}}/{{$ghana_act['title']}}/print_view/{{ $ghana_act['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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









