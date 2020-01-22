<div class="only_country_constitution">
    @foreach ($africa_countries_constitutions as $africa_countries_constitution)
    <div class="search-well">
    <h5 class="all_specific"><b>{!! $africa_countries_constitution->country !!} Constitution | {!! $africa_countries_constitution->continent !!}</b></h5>
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $africa_countries_constitution->title !!}</b></h5></a>
        {{-- <b class="hidden">{!! $africa_countries_constitution->country !!} - {!! $africa_countries_constitution->continent !!} | {!! $africa_countries_constitution->year !!}</b> --}}
        <br>
        {!! str_limit(strip_tags(strstr($africa_countries_constitution->content,  $query, false)),450, '...' ) !!}
    </div>
    <br>
    @endforeach

    @foreach ($asia_countries_constitutions as $asia_countries_constitution)
    <div class="search-well">
    <h5 class="all_specific"><b>{!! $asia_countries_constitution->country !!} Constitution | {!! $asia_countries_constitution->continent !!}</b></h5>
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $asia_countries_constitution->title !!}</b></h5></a>
        {{-- <b class="hidden">{!! $asia_countries_constitution->country !!} - {!! $asia_countries_constitution->continent !!} | {!! $asia_countries_constitution->year !!}</b> --}}
        <br>
        {!! str_limit(strip_tags(strstr($asia_countries_constitution->content,  $query, false)),450, '...' ) !!}
    </div>
    <br>
    @endforeach

    @foreach ($europe_countries_constitutions as $europe_countries_constitution)
    <div class="search-well">
    <h5 class="all_specific"><b>{!! $europe_countries_constitution->country !!} Constitution | {!! $europe_countries_constitution->continent !!}</b></h5>
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $europe_countries_constitution->title !!}</b></h5></a>
        {{-- <b class="hidden">{!! $europe_countries_constitution->country !!} - {!! $europe_countries_constitution->continent !!} | {!! $europe_countries_constitution->year !!}</b> --}}
        <br>
        {!! str_limit(strip_tags(strstr($europe_countries_constitution->content,  $query, false)),450, '...' ) !!}
    </div>
    <br>
    @endforeach

    @foreach ($north_america_countries_constitutions as $north_america_countries_constitution)
    <div class="search-well">
    <h5 class="all_specific"><b>{!! $north_america_countries_constitution->country !!} Constitution | {!! $north_america_countries_constitution->continent !!}</b></h5>
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $north_america_countries_constitution->title !!}</b></h5></a>
        {{-- <b class="hidden">{!! $north_america_countries_constitution->country !!} - {!! $north_america_countries_constitution->continent !!} | {!! $north_america_countries_constitution->year !!}</b> --}}
        <br>
        {!! str_limit(strip_tags(strstr($north_america_countries_constitution->content,  $query, false)),450, '...' ) !!}
    </div>
    <br>
    @endforeach

    @foreach ($south_america_countries_constitutions as $south_america_countries_constitution)
    <div class="search-well">
    <h5 class="all_specific"><b>{!! $south_america_countries_constitution->country !!} Constitution | {!! $south_america_countries_constitution->continent !!}</b></h5>
    <a href="" target="_blank"><h5 style="color:blue;"><b>{!! $south_america_countries_constitution->title !!}</b></h5></a>
        {{-- <b class="hidden">{!! $south_america_countries_constitution->country !!} - {!! $south_america_countries_constitution->continent !!} | {!! $south_america_countries_constitution->year !!}</b> --}}
        <br>
        {!! str_limit(strip_tags(strstr($south_america_countries_constitution->content,  $query, false)),450, '...' ) !!}
    </div>
    <br>
    @endforeach
</div>
    
