
<div>
    <div class="header_only" style="border: .1px solid #ddd;">
        <p style="padding-top: 7px; padding-bottom: .1px; padding-left: 16px; padding-right: 16px;">
            <b>{{ $constitutionContent['section'] }}</b>
        </p>
    </div>

    <div style="margin-bottom: 5px;">
        <a class="pull-right" id="print_options" href="#">Print Options</a>
        <div class="menu_options pull-right" style="display: none;">
            <a href="/constitution/Republic/pdf_article_content/{{$constitutionContent['chapter']}}/{{ $constitutionContent['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
            {{-- <a href="/constitution/Republic/plain_article_content/{{ $constitutionContent['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp; --}}
            <!-- <a href="/post_1992_legislation/pdf_content/{{ $constitutionContent['id'] }}"><img alt="Brand" src="{{ asset('/logo/word.png') }}" style="width:1.5em;">&nbsp;WORD</a>&nbsp;&nbsp;||&nbsp; -->
            <a href="/constitution/Republic/print_article_content/{{ $constitutionContent['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
    </div>

    <div class="content">
        <p>{!! $constitutionContent['articles'] !!}</p>
    </div>
</div>
   


