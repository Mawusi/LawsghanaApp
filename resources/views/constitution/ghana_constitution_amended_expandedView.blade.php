
<div>
    {{-- <div class="header_only" style="margin-bottom: 5px;">
        <p><b>{{ $ghana_act_amended['title'] }}</b></p>
    </div> --}}

    <div style="margin-bottom:5px;">
      <a class="pull-right" id="print_options" href="#">Print Options</a>
      <div class="menu_options pull-right" style="display: none;">
          <a href="/constitution_amended/Republic/pdf/expanded_content/{{$ghana_act_amended['gh_group']}}/{{$ghana_act_amended['title']}}/{{ $ghana_act_amended['id'] }}""><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
          {{-- <a href="/constitution_amended/Republic/plain/expanded_content/{{$ghana_act_amended['gh_group']}}/{{$ghana_act_amended['title']}}/{{ $ghana_act_amended['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp; --}}
          <a href="/constitution_amended/Republic/print/expanded_content/{{$ghana_act_amended['gh_group']}}/{{$ghana_act_amended['title']}}/{{ $ghana_act_amended['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
    </div>

    <div class="content">
    {!! $ghana_act_amended['preamble'] !!}
      <hr>	
    @foreach($ghanaArticlesAmendeds as $ghanaArticlesAmended)
      <h4><b>{!! $ghanaArticlesAmended->section !!}</b></h4>
        {!! $ghanaArticlesAmended->articles !!}
      <hr><br>
    @endforeach
    </div>
</div









