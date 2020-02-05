
<div>
  <div style="margin-bottom: 5px;">
      {{-- <a class="pull-right" id="print_options" href="#">Print Options</a> --}}
      <div class="menu_options pull-right" style="display: none;">
          <a href="/post_1992_legislation/pdf/regulation/expanded/{{$regulationAct['act_category']}}/{{$regulationAct['title']}}/{{ $regulationAct['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
          <a href="/post_1992_legislation/plain/regulation/expanded/{{$regulationAct['act_category']}}/{{$regulationAct['title']}}/{{ $regulationAct['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
          <a href="/post_1992_legislation/print/regulation/expanded/{{$regulationAct['act_category']}}/{{$regulationAct['title']}}/{{ $regulationAct['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
  </div>

  <div class="content">	
      <h5><b>Introductory Text</b></h5>
      <p><b>{{ $regulationAct['preamble'] }}</b></p>
        <hr>
      @foreach($allRegulationArticles as $allRegulationArticle)
        <h5><b>{!! $allRegulationArticle->section !!}</b></h5>
          {!! $allRegulationArticle->content !!}
        <hr><br>
      @endforeach
  </div>
</div>









