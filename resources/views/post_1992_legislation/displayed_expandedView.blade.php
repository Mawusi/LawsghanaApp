
<div style="margin-top: 0.1em;">
    <div class="header" style="padding: 5px 1px 0.1px 1px; margin-bottom: 5px;">
        <p><b>{{ $allPost1992Act['title'] }}</b></p>
    </div>

    <a id="print_options" href="#">Print & Download&raquo;</a>
    <div class="menu_options pull-right" style="display: none;">
        <a href="/post_1992_legislation/1/{{$allPost1992Act['post_group']}}/{{$allPost1992Act['title']}}/pdf_view/{{ $allPost1992Act['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
        <a href="/post_1992_legislation/1/{{$allPost1992Act['post_group']}}/{{$allPost1992Act['title']}}/plain_view/{{ $allPost1992Act['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
        <!-- <a href=""><img alt="Brand" src="{{ asset('/logo/word.png') }}" style="width:1.5em;">&nbsp;WORD</a>&nbsp;&nbsp;||&nbsp; -->
        <a href="/post_1992_legislation/1/{{$allPost1992Act['post_group']}}/{{$allPost1992Act['title']}}/print_view/{{ $allPost1992Act['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

    <div class="content">	
        <h4>Preamble</h4> <p>{!! $allPost1992Act['preamble'] !!}</p>
        <hr>
        @foreach($allPost1992Articles as $allPost1992Article)
            <!--<center>-->
            <!--    <h4>-->
            <!--        <b>{{ $allPost1992Article->part }}</b>-->
            <!--    </h4>-->
            <!--</center>-->
            
            <h4><b>{{$allPost1992Article->section }}</b></h4>
                {!! $allPost1992Article->content !!}
            <hr><br>
        @endforeach
    </div>
</div









