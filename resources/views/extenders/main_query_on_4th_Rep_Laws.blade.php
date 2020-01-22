<div class="only_4th_republic">
    @foreach ($posts as $post)
        <div class="search-well">
        <h5 class="all_specific"><b>Acts of Parliament</b></h5>
        <h5 style="color:blue;"><b>{!! $post->post_act !!}</b></h5>
        <a href="/post_1992_legislation/content/{{$post->id}}" target="_blank"><b>{!! $post->section !!}</b></a>
        <br><br>
            {!! $post->content !!}
        </div>
        <br>
        @endforeach

        @foreach ($regulations as $regulation)
        <div class="search-well">
            <h5 class="all_specific"><b>Legislative Instrument</b></h5>
            <h5 style="color:blue;"><b>{!! $regulation->regulation_title !!}</b></h5>
            <a href="/post_1992_legislation/content/{{$regulation->id}}" target="_blank"><b>{!! $regulation->section !!}</b></a>
            <br><br>
            {!! $regulation->content !!}
        </div>
        <br>
        @endforeach

        @foreach ($amends as $amend)
        <div class="search-well">
        <h5 class="all_specific"><b>Amendments on Acts</b></h5>
        <h5 style="color:blue;"><b>{{ $amend->act_title }}</b></h5>
        <a href="/post_1992_legislation/amended_acts/content/{{$amend->id}}" target="_blank"><b>{!! $amend->section !!}</b></a>
        <br><br>
        {!! $amend->content !!}
        </div>
        <br>
        @endforeach

        @foreach ($amends_regs as $amends_reg)
        <div class="search-well">
        <h5 class="all_specific"><b>Amendments on Legislative Instrument</b></h5>
        <h5 style="color:blue;"><b>{!! $amends_reg->title !!}</b></h5>
        <a href="/post_1992_legislation/amended_regulation_acts/content/{{$amends_reg->id}}" target="_blank"><b>{!! $amends_reg->section !!}</b></a>
        <br><br>
        {!! $amends_reg->content !!}
        </div>
        @endforeach
</div>      
        