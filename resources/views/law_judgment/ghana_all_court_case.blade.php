@extends('extenders.main')

@section('title', $allGhanaLaw['case_title'])
@section('assets')

    <style type="text/css">

            .header_only {
            padding: 5px 1px 0.1px 1px;
            background: #555;
            color: #f1f1f1;
            text-align: center;
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            }
            ::-webkit-scrollbar {
            width: 7px;
            }
            div::-webkit-scrollbar-button {
            display: block;
            width: 17px;
            height: 17px;
            }
            div::-webkit-scrollbar-button:decrement:start {
            background-color:lightblue;
            border:1px solid #eee;
            }
            div::-webkit-scrollbar-button:increment:start {
            background-color:lightblue;
            border:1px solid #eee;
            }
            div::-webkit-scrollbar-button:decrement:end {
            background-color:lightblue;
            border:1px solid #eee;
            }
            div::-webkit-scrollbar-button:increment:end {
            background-color:lightblue;
            border:1px solid #eee;;
            }
            ::-webkit-scrollbar-thumb {
            background: #888; 
            }
            ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
            border-radius: 10px;
            } 
            ::-webkit-scrollbar-thumb:hover {
            background: #555; 
            }
            .content {
            padding: 0.1px;
            }

    </style>

@endsection


@section('content')

@section('second_nav')
    @include('law_judgment.ghana_judgement_menu_addon')
@endsection

    <div class="container-fluid"><span style="color:red;">{{ $allGhanaLaw['gh_law_judgment_group_name'] }} Case</div>
        <div class="container-fluid">
            <div class="row content">
                <div class="col-md-9 judgement_display" style="height: 600px;">
                    <div id="display_content">
                        <div class="header_only" style="margin-bottom: 5px;">
                            <p><b>{{ $allGhanaLaw['case_title'] }}</b></p>
                        </div>

                        <a id="print_options" href="#">Print & Download&raquo;</a>
                            <div class="menu_options pull-right" style="display: none;">
                                <a href="/judgement/pdf_view/{{ $allGhanaLaw['gh_law_judgment_group_name'] }}/{{$allGhanaLaw['id']}}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
                                <a href="/judgement/plain_view/{{$allGhanaLaw['id']}}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
                                <a href="/judgement/print_preview/{{$allGhanaLaw['id']}}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>

                        <div class="content">
                            <!-- Court Name -->
                            <center><h5><b>{!! $allGhanaLaw['court_name'] !!}</b></h5></center><br>

                            <!-- Case Title -->
                            <center>
                                <b>
                                    <h5 style="color:blue;"><b>{!! $allGhanaLaw['case_title_1'] !!}</b></h5>
                                    <label>vs.</label>
                                    <h5 style="color:blue;"><b>{!! $allGhanaLaw['case_title_2'] !!}</b></h5>
                                </b>
                            </center>
                            <br>
                            
                                <div class="row">
                                        <h5><b style="color:blue;">DATE:&nbsp;</b>
                                        <b style="color:black;">{{$allGhanaLaw['date']}}</b></h5>
                                </div>
                                <div class="row">
                                    <h5><b style="color:blue;">CASE NO:&nbsp;</b>
                                    <b style="color:black;">{{$allGhanaLaw['reference_number']}}</b></h5>
                                </div>
                                
                                <div class="row">
                                    <h5><b style="color:blue;">CORAM:&nbsp;</b>
                                    <b style="color:black;">{{$allGhanaLaw['coram']}}</b></h5>
                                </div>
                                
                                <div class="row">
                                    <h5><b style="color:blue;">COUNSELLORS:&nbsp;</b>
                                    <b style="color:black;">{{$allGhanaLaw['counsellors']}}</b></h5>
                                </div>
                            
                            
                            <hr>
                            
                            {{--Body--}}   
                            <p>{!! $allGhanaLaw['content'] !!}</p>
                        </div>
                    </div> 
                    <div id="display_view_all_section"></div>   
                </div>
                    {{--@include('law_judgment.ghana_all_judgment_view')--}}

                    {{-- Advertisement --}}
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading"><center><p class="panel-title"><small>Quick Look on Case Laws</small></p></center></div>
                        <div class="panel-body">
                            <center>
                            <div class="btn-group" style="margin-bottom: 10px;">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <small>Preview Case Laws</small> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu scroll-view-judgement dropdown-menu-right" style="width: 600px;">
                                    @foreach($allGhanaLaws as $allGhanaLaw) 
                                    <!-- <li><a class="view_all_section_link" href="/judgement/all-cases/{{ $allGhanaLaw->id}}">{{$allGhanaLaw->case_title}}</a></li> -->
                                    <li><a class="view_all_section_link" href="/judgement/Ghana/Case-view/{{$allGhanaLaw->gh_law_judgment_group_name}}}/{{ $allGhanaLaw->id}}">{{$allGhanaLaw->case_title}}</a></li>
                                @endforeach
                                </ul>
                            </div>
                            </center>
                            @include('extenders.case_law_main_search')
                        </div>
                    </div>
                <br>    
                        {{-- Advertisement --}}
                        <div class="panel panel-default">
                        <div class="panel-heading">
                            <p class="panel-title"><small>Advertisement</small></p>
                        </div>
                        <div class="panel-body">
                            <div class="embed-responsive embed-responsive-4by3">
                            <iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>        
                            </div>		  
                        </div>
                        </div>
                </div>
            </div>
        </div>         
@endsection