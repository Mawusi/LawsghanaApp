<div class="only_1st_rep">
    @foreach ($first_republic_laws as $first_republic_law)
    <div class="search-well">
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $first_republic_law->title !!}</b></h5></a>
        <b>{!! $first_republic_law->section !!}</b>
        <br><br>
        {{-- {!! str_limit(strip_tags(strstr($first_republic_law->content,  $query, false)),450, '...' ) !!} --}}
        {!! $first_republic_law->content !!}
        {{-- {!! str_limit(strstr($supreme_court_case->content,  $query, false),450, '...' ) !!} --}}
    </div>
    <br>
    @endforeach
</div>
    
<div class="only_2nd_rep">
    @foreach ($second_republic_laws as $second_republic_law)
    <div class="search-well">
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $second_republic_law->title !!}</b></h5></a>
        <b>{!! $second_republic_law->section !!}</b>
        <br><br>
        {{-- {!! str_limit(strip_tags(strstr($first_republic_law->content,  $query, false)),450, '...' ) !!} --}}
        {!! $second_republic_law->content !!}
        {{-- {!! str_limit(strstr($supreme_court_case->content,  $query, false),450, '...' ) !!} --}}
    </div>
    <br>
    @endforeach
</div>

<div class="only_3rd_rep">
    @foreach ($third_republic_laws as $third_republic_law)
    <div class="search-well">
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $third_republic_law->title !!}</b></h5></a>
        <b>{!! $third_republic_law->section !!}</b>
        <br><br>
        {{-- {!! str_limit(strip_tags(strstr($first_republic_law->content,  $query, false)),450, '...' ) !!} --}}
        {!! $third_republic_law->content !!}
        {{-- {!! str_limit(strstr($supreme_court_case->content,  $query, false),450, '...' ) !!} --}}
    </div>
    <br>
    @endforeach
</div>

<div class="only_nlcd">
    @foreach ($nlc_decree_laws as $nlc_decree_law)
    <div class="search-well">
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $nlc_decree_law->title !!}</b></h5></a>
        <b>{!! $nlc_decree_law->section !!}</b>
        <br><br>
        {{-- {!! str_limit(strip_tags(strstr($first_republic_law->content,  $query, false)),450, '...' ) !!} --}}
        {!! $nlc_decree_law->content !!}
        {{-- {!! str_limit(strstr($supreme_court_case->content,  $query, false),450, '...' ) !!} --}}
    </div>
    <br>
    @endforeach
</div>

<div class="only_nrcd">
    @foreach ($nrc_decree_laws as $nrc_decree_law)
    <div class="search-well">
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $nrc_decree_law->title !!}</b></h5></a>
        <b>{!! $nrc_decree_law->section !!}</b>
        <br><br>
        {{-- {!! str_limit(strip_tags(strstr($first_republic_law->content,  $query, false)),450, '...' ) !!} --}}
        {!! $nrc_decree_law->content !!}
        {{-- {!! str_limit(strstr($supreme_court_case->content,  $query, false),450, '...' ) !!} --}}
    </div>
    <br>
    @endforeach
</div>

<div class="only_smcd">
    @foreach ($smc_decree_laws as $smc_decree_law)
    <div class="search-well">
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $smc_decree_law->title !!}</b></h5></a>
        <b>{!! $smc_decree_law->section !!}</b>
        <br><br>
        {{-- {!! str_limit(strip_tags(strstr($first_republic_law->content,  $query, false)),450, '...' ) !!} --}}
        {!! $smc_decree_law->content !!}
        {{-- {!! str_limit(strstr($supreme_court_case->content,  $query, false),450, '...' ) !!} --}}
    </div>
    <br>
    @endforeach
</div>

<div class="only_afrcd">
    @foreach ($afrc_decree_laws as $afrc_decree_law)
    <div class="search-well">
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $afrc_decree_law->title !!}</b></h5></a>
        <b>{!! $afrc_decree_law->section !!}</b>
        <br><br>
        {{-- {!! str_limit(strip_tags(strstr($first_republic_law->content,  $query, false)),450, '...' ) !!} --}}
        {!! $afrc_decree_law->content !!}
        {{-- {!! str_limit(strstr($supreme_court_case->content,  $query, false),450, '...' ) !!} --}}
    </div>
    <br>
    @endforeach
</div>

<div class="only_pndc">
    @foreach ($pndc_laws as $pndc_law)
    <div class="search-well">
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $pndc_law->title !!}</b></h5></a>
        <b>{!! $pndc_law->section !!}</b>
        <br><br>
        {{-- {!! str_limit(strip_tags(strstr($first_republic_law->content,  $query, false)),450, '...' ) !!} --}}
        {!! $pndc_law->content !!}
        {{-- {!! str_limit(strstr($supreme_court_case->content,  $query, false),450, '...' ) !!} --}}
    </div>
    <br>
    @endforeach
</div>

    

