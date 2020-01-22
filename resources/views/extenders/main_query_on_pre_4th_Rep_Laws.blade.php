<div class="only_pre_4th_republic">
    @foreach ($first_republic_laws as $first_republic_law)
    <div class="search-well">
    <h5 class="all_specific"><b>{!! $first_republic_law->pre_1992_group !!}</b></h5>
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $first_republic_law->title !!}</b></h5></a>
        <b>{!! $first_republic_law->section !!}</b>
        <br><br>
        {!! $first_republic_law->content !!}
    </div>
    <br>
    @endforeach

    
    @foreach ($second_republic_laws as $second_republic_law)
    <div class="search-well">
    <h5 class="all_specific"><b>{!! $second_republic_law->pre_1992_group !!}</b></h5>
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $second_republic_law->title !!}</b></h5></a>
        <b>{!! $second_republic_law->section !!}</b>
        <br><br>
        {!! $second_republic_law->content !!}
    </div>
    <br>
    @endforeach


    @foreach ($third_republic_laws as $third_republic_law)
    <div class="search-well">
    <h5 class="all_specific"><b>{!! $third_republic_law->pre_1992_group !!}</b></h5>
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $third_republic_law->title !!}</b></h5></a>
        <b>{!! $third_republic_law->section !!}</b>
        <br><br>
        {!! $third_republic_law->content !!}
    </div>
    <br>
    @endforeach


    @foreach ($nlc_decree_laws as $nlc_decree_law)
    <div class="search-well">
    <h5 class="all_specific"><b>{!! $nlc_decree_law->pre_1992_group !!}</b></h5>
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $nlc_decree_law->title !!}</b></h5></a>
        <b>{!! $nlc_decree_law->section !!}</b>
        <br><br>
        {!! $nlc_decree_law->content !!}
    </div>
    <br>
    @endforeach

    @foreach ($nrc_decree_laws as $nrc_decree_law)
    <div class="search-well">
    <h5 class="all_specific"><b>{!! $nrc_decree_law->pre_1992_group !!}</b></h5>
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $nrc_decree_law->title !!}</b></h5></a>
        <b>{!! $nrc_decree_law->section !!}</b>
        <br><br>
        {!! $nrc_decree_law->content !!}
    </div>
    <br>
    @endforeach

    @foreach ($smc_decree_laws as $smc_decree_law)
    <div class="search-well">
    <h5 class="all_specific"><b>{!! $smc_decree_law->pre_1992_group !!}</b></h5>
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $smc_decree_law->title !!}</b></h5></a>
        <b>{!! $smc_decree_law->section !!}</b>
        <br><br>
        {!! $smc_decree_law->content !!}
    </div>
    <br>
    @endforeach

    @foreach ($afrc_decree_laws as $afrc_decree_law)
    <div class="search-well">
    <h5 class="all_specific"><b>{!! $afrc_decree_law->pre_1992_group !!}</b></h5>
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $afrc_decree_law->title !!}</b></h5></a>
        <b>{!! $afrc_decree_law->section !!}</b>
        <br><br>
        {!! $afrc_decree_law->content !!}
    </div>
    <br>
    @endforeach

    @foreach ($pndc_laws as $pndc_law)
    <div class="search-well">
    <h5 class="all_specific"><b>{!! $pndc_law->pre_1992_group !!}</b></h5>
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $pndc_law->title !!}</b></h5></a>
        <b>{!! $pndc_law->section !!}</b>
        <br><br>
        {!! $pndc_law->content !!}
    </div>
    <br>
    @endforeach
</div>

    

