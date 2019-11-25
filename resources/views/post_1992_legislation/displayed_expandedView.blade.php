
<div>
{{--
    <div class="header_only" style="margin-bottom: 5px;">
        <p><b>{{ $allPost1992Act['title'] }}</b></p>
    </div>
    --}}
    <div class="content pull-right" style="padding-top:5px;" >
        <a id="print_options" href="#">Prints & Download&raquo;</a>
    </div>
    

    <div class="menu_options pull-right" style="display: none; padding-top:5px;">
        <a href="/post_1992_legislation/1/{{$allPost1992Act['post_group']}}/{{$allPost1992Act['title']}}/pdf_view/{{ $allPost1992Act['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
        <a href="/post_1992_legislation/1/{{$allPost1992Act['post_group']}}/{{$allPost1992Act['title']}}/plain_view/{{ $allPost1992Act['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
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
</div>









