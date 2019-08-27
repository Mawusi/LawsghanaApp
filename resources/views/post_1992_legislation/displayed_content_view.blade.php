
<div style="margin-top: 0.1em;">
    <div class="header" style="padding: 5px 1px 0.1px 1px; margin-bottom: 5px;">
        {{--<p><b>{{$allPost1992Article['post_act']}}</b></p>--}}
        <p>
            <b>{{ $allPost1992Article['section'] }}</b>
        </p>
    </div>

    <div>
        <a href="#" class="hide show_print_options pull-right" <label>View Print Options</label></a>
    </div>
    
    <div class="pull-right print_options_displayed">
    <a href="/post_1992_legislation/pdf_content/{{ $allPost1992Article['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;Download PDF Format</a>&nbsp;&nbsp;||&nbsp;
    <a href="/post_1992_legislation/pdf_content/{{ $allPost1992Article['id'] }}"><img alt="Brand" src="{{ asset('/logo/word.png') }}" style="width:1.5em;">&nbsp;Download WORD Format</a>&nbsp;&nbsp;||&nbsp;
    <a class="" href="#"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print</a>
    </div>

    <div class="content">
        <!-- For the plain view -->
    <a class="hidden btn btn-sm btn-primary pull-right display_plain" href="/post_1992_legislation/plain_content/{{ $allPost1992Article['id'] }}"><b></b></a>
        <p>{!! $allPost1992Article['content'] !!}</p>
    </div>
</div>




   


