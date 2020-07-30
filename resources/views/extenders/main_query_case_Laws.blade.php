<div class="only_cases">
    
    @include('layouts.plain_view_no_subscription')
    @include('layouts.plain_view_subscription_expiry')
    @include('layouts.plain_view_downloaded_exceeded')
    @include('layouts.plain_create_account')

    @foreach ($supreme_court_cases as $supreme_court_case)
    <div class="search-well">
    <h5 class="all_specific"><b>Case Laws</b></h5>
        @if (Route::has('login'))
            @auth  
                    {{-- No Subscription --}}
                    @if(auth()->user()->check_subscription == 0)
                        <a href="" data-toggle="modal" data-target="#myModalplainSubscribe"><h5 style="color:blue;"><b>{!! $supreme_court_case->case_title !!}</b></h5></a>
                        {{-- Subscription has expired --}}
                        @elseif(auth()->user()->subscription_expiry < today())
                        <a href="" data-toggle="modal" data-target="#myModalplainExpiry"><h5 style="color:blue;"><b>{!! $supreme_court_case->case_title !!}</b></h5></a>                                          
                        {{-- Subscription download limit reached --}}
                        @elseif(auth()->user()->subscription_downloads <= auth()->user()->downloads_counts)
                        <a href="" data-toggle="modal" data-target="#maximumDownloadReachedplain"><h5 style="color:blue;"><b>{!! $supreme_court_case->case_title !!}</b></h5></a>
    
                        @else
                        {{-- View Plain View --}}
                            <a href="/judgement/Ghana/{{$supreme_court_case->gh_law_judgment_group_name}}/{{$supreme_court_case->id}}" target="_blank"><h5 style="color:blue;"><b>{!! $supreme_court_case->case_title !!}</b></h5></a>
                    @endif
                @else
                {{-- Create Account --}}
                <a href="" data-toggle="modal" data-target="#myModalplainAccount"><h5 style="color:blue;"><b>{!! $supreme_court_case->case_title !!}</b></h5></a>
            @endauth
        @endif
    <b>{!! $supreme_court_case->gh_law_judgment_group_name !!} | {!! $supreme_court_case->reference_number !!}</b>
        <br><br>
        {!! str_limit(strip_tags(strstr($supreme_court_case->content,  $query, false)),450, '...' ) !!}
        {{-- {!! $supreme_court_case->content !!} --}}
        {{-- {!! str_limit(strstr($supreme_court_case->content,  $query, false),450, '...' ) !!} --}}
    </div>
    <br>
    @endforeach

    

    {{-- BREAK FOR COURT OF APPEAL --}}

    @foreach ($court_of_appeal_cases as $court_of_appeal_case)
        <div class="search-well">
            <h5 class="all_specific"><b>Case Laws</b></h5>
                @if (Route::has('login'))
                    @auth
                            {{-- No Subscription --}}
                            @if(auth()->user()->check_subscription == 0)
                                <a href="" data-toggle="modal" data-target="#myModalplainSubscribe"><h5 style="color:blue;"><b>{!! $court_of_appeal_case->case_title !!}</b></h5></a>
                                {{-- Subscription has expired --}}
                                @elseif(auth()->user()->subscription_expiry < today())
                                <a href="" data-toggle="modal" data-target="#myModalplainExpiry"><h5 style="color:blue;"><b>{!! $court_of_appeal_case->case_title !!}</b></h5></a>                                          
                                {{-- Subscription download limit reached --}}
                                @elseif(auth()->user()->subscription_downloads <= auth()->user()->downloads_counts)
                                <a href="" data-toggle="modal" data-target="#maximumDownloadReachedplain"><h5 style="color:blue;"><b>{!! $court_of_appeal_case->case_title !!}</b></h5></a>

                                @else
                                {{-- View Plain View --}}
                                    <a href="/judgement/plain_view/{{$court_of_appeal_case->id}}" target="_blank"><h5 style="color:blue;"><b>{!! $court_of_appeal_case->case_title !!}</b></h5></a>
                            @endif
                        @else
                        {{-- Create Account --}}
                        <a href="" data-toggle="modal" data-target="#myModalplainAccount"><h5 style="color:blue;"><b>{!! $court_of_appeal_case->case_title !!}</b></h5></a>
                    @endauth
                @endif 
            <b>{!! $court_of_appeal_case->gh_law_judgment_group_name !!} | {!! $court_of_appeal_case->reference_number !!}</b>
            <br><br>
            {!! str_limit(strip_tags(strstr($court_of_appeal_case->content,  $query, false)),450, '...' ) !!}
            {{-- {!! $court_of_appeal_case->content !!} --}}
            {{-- {!! str_limit(strstr($court_of_appeal_case->content,  $query, false),450, '...' ) !!} --}}
        </div>
        <br>
    @endforeach

    {{-- BREAK FOR HIGH COURT --}}
    @foreach ($high_court_cases as $high_court_case)
        <div class="search-well">
            <h5 class="all_specific"><b>Case Laws</b></h5>
                @if (Route::has('login'))
                    @auth
                            {{-- No Subscription --}}
                            @if(auth()->user()->check_subscription == 0)
                                <a href="" data-toggle="modal" data-target="#myModalplainSubscribe"><h5 style="color:blue;"><b>{!! $high_court_case->case_title !!}</b></h5></a>
                                {{-- Subscription has expired --}}
                                @elseif(auth()->user()->subscription_expiry < today())
                                <a href="" data-toggle="modal" data-target="#myModalplainExpiry"><h5 style="color:blue;"><b>{!! $high_court_case->case_title !!}</b></h5></a>                                          
                                {{-- Subscription download limit reached --}}
                                @elseif(auth()->user()->subscription_downloads <= auth()->user()->downloads_counts)
                                <a href="" data-toggle="modal" data-target="#maximumDownloadReachedplain"><h5 style="color:blue;"><b>{!! $high_court_case->case_title !!}</b></h5></a>

                                @else
                                {{-- View Plain View --}}
                                <a href="/judgement/plain_view/{{$high_court_case->id}}" target="_blank"><h5 style="color:blue;"><b>{!! $high_court_case->case_title !!}</b></h5></a>
                            @endif
                        @else
                        {{-- Create Account --}}
                        <a href="" data-toggle="modal" data-target="#myModalplainAccount"><h5 style="color:blue;"><b>{!! $high_court_case->case_title !!}</b></h5></a>
                    @endauth
                @endif
            <b>{!! $high_court_case->gh_law_judgment_group_name !!} | {!! $high_court_case->reference_number !!}</b>
            <br><br>
            {!! str_limit(strip_tags(strstr($high_court_case->content,  $query, false)),450, '...' ) !!}
            {{-- {!! $court_of_appeal_case->content !!} --}}
            {{-- {!! str_limit(strstr($court_of_appeal_case->content,  $query, false),450, '...' ) !!} --}}
        </div>
        <br>
    @endforeach
</div>
