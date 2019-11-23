
<div>
    <div class="header_only" style="margin-bottom: 5px;">
        <p><b>{{ $allPost1992Article['section'] }}</b></p>
    </div>

    <a id="print_options" href="#">Prints & Download&raquo;</a>
    <div class="menu_options pull-right" style="display: none;">
        <a href="/post_1992_legislation/pdf_content/{{$allPost1992Article['post_act']}}/{{ $allPost1992Article['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
        <a href="/post_1992_legislation/plain-content/{{ $allPost1992Article['post_act'] }}/{{ $allPost1992Article['id'] }}" class="checking_link" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;

        <!-- <a href="/post_1992_legislation/pdf_content/{{ $allPost1992Article['id'] }}"><img alt="Brand" src="{{ asset('/logo/word.png') }}" style="width:1.5em;">&nbsp;WORD</a>&nbsp;&nbsp;||&nbsp; -->
        <a href="/post_1992_legislation/print_section_content/{{ $allPost1992Article['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

    <div class="content">
        <p>{!! $allPost1992Article['content'] !!}</p>
    </div>

</div>


@section('scripts')
<script type="text/javascript">
     
</script>

@endsection





   


