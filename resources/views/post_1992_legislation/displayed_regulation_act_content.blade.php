
<div>

    <div class="header_only" style="border: .1px solid #ddd;">
        <p style="padding-top: 7px; padding-bottom: .1px; padding-left: 16px; padding-right: 16px;"><b>{{ $regulationAct['section'] }}</b></p>
    </div>
    
    <div style="margin-bottom: 5px;">
        <a class="pull-right" id="print_options" href="#">Print Options</a>
        <div class="menu_options pull-right" style="display: none;">
            <a href="/post_1992_legislation/pdf/regulation/content_section/{{$regulationAct['regulation_title']}}/{{ $regulationAct['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
            <a href="/post_1992_legislation/plain/regulation/content_section/{{ $regulationAct['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
            <a href="/post_1992_legislation/print/regulation/content_section/{{ $regulationAct['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>

    <div class="content">
        <p>{!! $regulationAct['content'] !!}</p>
    </div>
</div>


   


