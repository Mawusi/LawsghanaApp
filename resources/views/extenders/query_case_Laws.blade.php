<div class="only_supreme">
    @foreach ($supreme_court_cases as $supreme_court_case)
    <div class="search-well">
    <a href="/judgement/Ghana/{{$supreme_court_case->gh_law_judgment_group_name}}/{{$supreme_court_case->id}}" target="_blank"><h5 style="color:blue;"><b>{!! $supreme_court_case->case_title !!}</b></h5></a>
        <b>{!! $supreme_court_case->gh_law_judgment_group_name !!} | {!! $supreme_court_case->reference_number !!}</b>
        <br>
        {!! str_limit(strip_tags(strstr($supreme_court_case->content,  $query, false)),450, '...' ) !!}
        {{-- {!! $supreme_court_case->content !!} --}}
        {{-- {!! str_limit(strstr($supreme_court_case->content,  $query, false),450, '...' ) !!} --}}
    </div>
    <br>
    @endforeach
</div>
    
<div class="only_appeal">
    @foreach ($court_of_appeal_cases as $court_of_appeal_case)
        <div class="search-well">
        <a href="/judgement/Ghana/{{$court_of_appeal_case->gh_law_judgment_group_name}}/{{$court_of_appeal_case->id}}" target="_blank"><h5 style="color:blue;"><b>{!! $court_of_appeal_case->case_title !!}</b></h5></a> 
        <b>{!! $court_of_appeal_case->gh_law_judgment_group_name !!} | {!! $court_of_appeal_case->reference_number !!}</b>
            <br>
            {!! str_limit(strip_tags(strstr($court_of_appeal_case->content,  $query, false)),450, '...' ) !!}
            {{-- {!! $court_of_appeal_case->content !!} --}}
            {{-- {!! str_limit(strstr($court_of_appeal_case->content,  $query, false),450, '...' ) !!} --}}
        </div>
        <br>
    @endforeach
</div>
    
<div class="only_high">
    @foreach ($high_court_cases as $high_court_case)
        <div class="search-well">
        <a href="/judgement/Ghana/{{$high_court_case->gh_law_judgment_group_name}}/{{$high_court_case->id}}" target="_blank"><h5 style="color:blue;"><b>{!! $high_court_case->case_title !!}</b></h5></a>
        <b>{!! $high_court_case->gh_law_judgment_group_name !!} | {!! $high_court_case->reference_number !!}</b>
        <br>
            {!! str_limit(strip_tags(strstr($high_court_case->content,  $query, false)),450, '...' ) !!}
            {{-- {!! $court_of_appeal_case->content !!} --}}
            {{-- {!! str_limit(strstr($court_of_appeal_case->content,  $query, false),450, '...' ) !!} --}}
        </div>
        <br>
    @endforeach
</div>
    

