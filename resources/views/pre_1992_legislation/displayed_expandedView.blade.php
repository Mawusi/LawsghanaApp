
<div style="margin-top: 0.1em;">
    <div class="header" style="padding: 5px 1px 0.1px 1px;">
        <p><b>{{ $allPre1992Act['title'] }}</b></p>
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









