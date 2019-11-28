
<div>
    <div class="header_only" style="border: .1px solid #ddd;">
        <p style="padding-top: 7px; padding-bottom: .1px; padding-left: 16px; padding-right: 16px;"><b>{{ $allPre1992Act['title'] }}</b></p>
    </div>

    <div style="margin-bottom: 5px;">
    <a class="puu-right" id="print_options" href="#">Print Options</a>
    <div class="menu_options pull-right" style="display: none;">
        <a href="/pre_1992_legislation/1/{{$allPre1992Act['pre_1992_group']}}/{{$allPre1992Act['title']}}/pdf_view/{{ $allPre1992Act['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
        <a href="/pre_1992_legislation/1/{{$allPre1992Act['pre_1992_group']}}/{{$allPre1992Act['title']}}/plain_view/{{ $allPre1992Act['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
        <a href="/pre_1992_legislation/1/{{$allPre1992Act['pre_1992_group']}}/{{$allPre1992Act['title']}}/print_view/{{ $allPre1992Act['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    </div>

    <div class="content">	
        <label>Preamble</label>: <p><b>{{ $allPre1992Act['preamble'] }}</b></p>
        <hr>
        @foreach($allPre1992Articles as $allPre1992Article)
            <h4><b>{!! $allPre1992Article->section !!}</b></h4>
                {!! $allPre1992Article->content !!}
            <hr><hr>
        @endforeach
    </div>
</div









