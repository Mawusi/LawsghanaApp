<div style="margin-top: 0.1em;">
    <div class="header_only" style="margin-bottom: 5px;">
        <p><b>Introductory Text</b></p>
    </div>

    <a id="print_options" href="#">Print & Download&raquo;</a>
    <div class="menu_options pull-right" style="display: none;">
        <a href="/constitution/Republic/pdf_preamble_content/{{$ghana_act['title']}}/{{ $ghana_act['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
        <a href="/constitution/Republic/plain_preamble_content/{{ $ghana_act['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
        <!-- <a href="/post_1992_legislation/pdf_content/{{ $ghana_act['id'] }}"><img alt="Brand" src="{{ asset('/logo/word.png') }}" style="width:1.5em;">&nbsp;WORD</a>&nbsp;&nbsp;||&nbsp; -->
        <a href="/constitution/Republic/print_preamble_content/{{ $ghana_act['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

    <div class="content">	
        <p>{!! $ghana_act['preamble'] !!}</p>  
    </div>
</div









