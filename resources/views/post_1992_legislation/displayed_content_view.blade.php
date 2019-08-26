
<div style="margin-top: 0.1em;">
    <div class="header" style="padding: 5px 1px 0.1px 1px;">

        {{--<p><b>{{$allPost1992Article['post_act']}}</b></p>--}}
        

        <p>
            <b>{{ $allPost1992Article['section'] }}</b>

            <!-- For the plain View -->
            <!-- <a class="btn btn-sm btn-primary display_plain_view" href="/post_1992_legislation/plain_content/{{ $allPost1992Article['id'] }}"><b>Plain View</b></a> -->
           


            <!-- For the pdf download -->
            <a class="hidden btn btn-sm btn-primary display_pdf" href="/post_1992_legislation/act_pdf/{{ $allPost1992Article['id'] }}"></a>
        </p>
    </div>
    <!--<a class="btn btn-info btn-sm pull-right" href="/post_1992_legislation/content/{{ $allPost1992Article['id'] }}">Plain View</a>-->
    
    <!-- <a class="btn btn-info btn-sm pull-right" href="/post_1992_legislation/plain_content/{{ $allPost1992Article['id'] }}">Plain View</a> -->
    
    
    <div class="content">
        <!-- For the plain view -->
    <a class="hidden btn btn-sm btn-primary pull-right display_plain" href="/post_1992_legislation/plain_content/{{ $allPost1992Article['id'] }}"><b></b></a>
        <p>{!! $allPost1992Article['content'] !!}</p>
    </div>
</div>




   


