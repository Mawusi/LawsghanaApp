<div>
    <div class="header_only" style="border: .1px solid #ddd;">
        <!--<p>{{$amendedRegulationContent['title']}}</p>-->
        <p style="padding-top: 7px; padding-bottom: .1px; padding-left: 16px; padding-right: 16px;"><b>{{ $amendedRegulationContent['section'] }}</b></p>
    </div>

    <div style="margin-bottom: 5px;">
        <a class="pull-right" id="print_options" href="#">Print Options</a>
        <div class="menu_options pull-right" style="display: none;">
            <a href="/post_1992_legislation/pdf/amended_regulation_act/content_section/{{$amendedRegulationContent['title']}}/{{ $amendedRegulationContent['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
            <a href="/post_1992_legislation/plain_amended_regulation_act/content_section/{{ $amendedRegulationContent['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
            <a href="/post_1992_legislation/print_amended_regulation_act/content_section/{{ $amendedRegulationContent['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>

    <div class="content">
        <p>{!! $amendedRegulationContent['content'] !!}</p>
    </div>
</div>





    


