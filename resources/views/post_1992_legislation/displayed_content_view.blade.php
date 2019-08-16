
<div style="margin-top: 0.1em;">
    <div class="header" style="padding: 5px 1px 0.1px 1px;">
        {{--<p><b>{{$allPost1992Article['post_act']}}</b></p>--}}
        <p><b>{{ $allPost1992Article['section'] }}</b></p>
    </div>
    <!--<a class="btn btn-info btn-sm pull-right" href="/post_1992_legislation/content/{{ $allPost1992Article['id'] }}">Plain View</a>-->
    
    <a class="btn btn-info btn-sm pull-right" href="/post_1992_legislation/plain_content/{{ $allPost1992Article['id'] }}">Plain View</a>
    
    <div class="content">
        <p>{!! $allPost1992Article['content'] !!}</p>
    </div>
</div>


   


