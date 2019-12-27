
<div>
    {{-- <div class="header_only" style="margin-bottom: 5px;">
        <p><b>{{ $ghana_act['title'] }}</b></p>
    </div> --}}

    <div style="margin-bottom:5px;">
      <a class="pull-right" id="print_options" href="#">Print Options</a>
      <div class="menu_options pull-right" style="display: none;">
          <a href="/constitution/Republic/{{$ghana_act['gh_group']}}/{{$ghana_act['title']}}/pdf_view/{{ $ghana_act['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
          {{-- <a href="/constitution/Republic/{{$ghana_act['gh_group']}}/{{$ghana_act['title']}}/plain_view/{{ $ghana_act['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp; --}}
          <a href="/constitution/Republic/{{$ghana_act['gh_group']}}/{{$ghana_act['title']}}/print_view/{{ $ghana_act['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
    </div>

    <div class="content">
    {!! $ghana_act['preamble'] !!}
      <hr>
    @foreach($ghanaArticles as $ghanaArticle)
      <h4><b>{!! $ghanaArticle->section !!}</b></h4>
        {!! $ghanaArticle->articles !!}
      <hr><br>
    @endforeach
    </div>
</div









