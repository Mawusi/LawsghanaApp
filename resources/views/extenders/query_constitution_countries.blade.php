<div class="only_africa">
    @foreach ($africa_countries_constitutions as $africa_countries_constitution)
    <div class="search-well">
    <a href="/constitution/2/{{$africa_countries_constitution->continent}}/{{$africa_countries_constitution->country}}/{{$africa_countries_constitution->id}}" target="_blank"><h5 style="color:blue;"><b>{!! $africa_countries_constitution->title !!}</b></h5></a>
        <b>{!! $africa_countries_constitution->country !!} - {!! $africa_countries_constitution->continent !!} | {!! $africa_countries_constitution->year !!}</b>
        <br>
        {!! str_limit(strip_tags(strstr($africa_countries_constitution->content,  $query, false)),450, '...' ) !!}
    </div>
    <br>
    @endforeach
</div>

<div class="only_asia">
    @foreach ($asia_countries_constitutions as $asia_countries_constitution)
    <div class="search-well">
    <a href="/constitution/1/{{$asia_countries_constitution->continent}}/{{$asia_countries_constitution->country}}/{{$asia_countries_constitution->id}}" target="_blank"><h5 style="color:blue;"><b>{!! $asia_countries_constitution->title !!}</b></h5></a>
        <b>{!! $asia_countries_constitution->country !!} - {!! $asia_countries_constitution->continent !!} | {!! $asia_countries_constitution->year !!}</b>
        <br>
        {!! str_limit(strip_tags(strstr($asia_countries_constitution->content,  $query, false)),450, '...' ) !!}
    </div>
    <br>
    @endforeach
</div>

<div class="only_europe">
    @foreach ($europe_countries_constitutions as $europe_countries_constitution)
    <div class="search-well">
    <a href="/constitution/1/{{$europe_countries_constitution->continent}}/{{$europe_countries_constitution->country}}/{{$europe_countries_constitution->id}}" target="_blank"><h5 style="color:blue;"><b>{!! $europe_countries_constitution->title !!}</b></h5></a>
        <b>{!! $europe_countries_constitution->country !!} - {!! $europe_countries_constitution->continent !!} | {!! $europe_countries_constitution->year !!}</b>
        <br>
        {!! str_limit(strip_tags(strstr($europe_countries_constitution->content,  $query, false)),450, '...' ) !!}
    </div>
    <br>
    @endforeach
</div>

<div class="only_n_america">
    @foreach ($north_america_countries_constitutions as $north_america_countries_constitution)
    <div class="search-well">
    <a href="/constitution/1/{{$north_america_countries_constitution->continent}}/{{$north_america_countries_constitution->country}}/{{$north_america_countries_constitution->id}}" target="_blank"><h5 style="color:blue;"><b>{!! $north_america_countries_constitution->title !!}</b></h5></a>
        <b>{!! $north_america_countries_constitution->country !!} - {!! $north_america_countries_constitution->continent !!} | {!! $north_america_countries_constitution->year !!}</b>
        <br>
        {!! str_limit(strip_tags(strstr($north_america_countries_constitution->content,  $query, false)),450, '...' ) !!}
    </div>
    <br>
    @endforeach
</div>

<div class="only_s_america">
    @foreach ($south_america_countries_constitutions as $south_america_countries_constitution)
    <div class="search-well">
    <a href="/constitution/1/{{$south_america_countries_constitution->continent}}/{{$south_america_countries_constitution->country}}/{{$south_america_countries_constitution->id}}" target="_blank"><h5 style="color:blue;"><b>{!! $south_america_countries_constitution->title !!}</b></h5></a>
        <b>{!! $south_america_countries_constitution->country !!} - {!! $south_america_countries_constitution->continent !!} | {!! $south_america_countries_constitution->year !!}</b>
        <br>
        {!! str_limit(strip_tags(strstr($south_america_countries_constitution->content,  $query, false)),450, '...' ) !!}
    </div>
    <br>
    @endforeach
</div>
    
