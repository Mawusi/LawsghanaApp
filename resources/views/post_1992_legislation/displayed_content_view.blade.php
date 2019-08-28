
<div style="margin-top: 0.1em;">
    <div class="header" style="padding: 5px 1px 0.1px 1px; margin-bottom: 5px;">
        <p><b>{{ $allPost1992Article['section'] }}</b></p>
    </div>

    <div id="print_options"><a class="pull-right" href="">Print Options&raquo;</a></div>
    <div class="menu_options pull-right" style="display: none;">
        <a href="/post_1992_legislation/pdf_content/{{ $allPost1992Article['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
        <a href="/post_1992_legislation/pdf_content/{{ $allPost1992Article['id'] }}"><img alt="Brand" src="{{ asset('/logo/word.png') }}" style="width:1.5em;">&nbsp;WORD</a>&nbsp;&nbsp;||&nbsp;
        <a class="" href="#"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

    <div class="content">
    <a class="hidden btn btn-sm btn-primary pull-right display_plain" href="/post_1992_legislation/plain_content/{{ $allPost1992Article['id'] }}"><b></b></a>
        <p>{!! $allPost1992Article['content'] !!}</p>
        {{--<p><b>{{$allPost1992Article['post_act']}}</b></p>--}}
    </div>

</div>





   


