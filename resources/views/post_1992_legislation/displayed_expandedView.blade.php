
<div style="margin-top: 0.1em;">
    <div class="header" style="padding: 5px 1px 0.1px 1px;">
        <p><b>{{ $allPost1992Act['title'] }}</b></p>
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









