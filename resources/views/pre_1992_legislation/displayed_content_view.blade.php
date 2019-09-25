
<div style="margin-top: 0.1em;">
    <div class="header_only" style="margin-bottom: 5px;">
        <!--<p><b>{{$allPre1992Article['pre_1992_act']}}</b></p>-->
        <p><b>{{ $allPre1992Article['section'] }}</b></p>
    </div>

    <a id="print_options" href="#">Print & Download&raquo;</a>
    <div class="menu_options pull-right" style="display: none;">
        <a href="/pre_1992_legislation/pdf/content/{{$allPre1992Article['pre_1992_act']}}/{{ $allPre1992Article['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
        <a href="/pre_1992_legislation/plain_content/{{ $allPre1992Article['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
        <a href="/pre_1992_legislation/print_section_content/{{ $allPre1992Article['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

    <div class="content">
        <p>{!! $allPre1992Article['content'] !!}</p>
    </div>
</div>


   


