@extends('extenders.main')

@section('title', $highCourt['case_title'])
@section('assets')

    <style type="text/css">

        .navbar {
          min-height: 1px;
        }
        .navbar-brand {
          padding-top: 17px;
          padding-top: 17px;
          line-height: 15px;
        }
        .navbar-toggle {
          /* (80px - button height 34px) / 2 = 23px */
          margin-top: 23px;
          padding: 9px 10px !important;
        }
        @media (min-width: 768px) {
          .navbar-nav > li > a {
            /* (80px - line-height of 27px) / 2 = 26.5px */
            padding-top: 10px;
            padding-bottom: 10px;
            line-height: 10px;
          }
        }

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

    {{-- <div class="container-fluid"><span style="color:red;">{{ $highCourt['gh_law_judgment_group_name'] }} Case </span><b>{{ $highCourt['case_title'] }}</b></div> --}}
    <div class="container-fluid"><span style="color:red;">{{ $highCourt['gh_law_judgment_group_name'] }} Case </span></div>
        <div class="container-fluid">
            <div class="row content">
                <div class="col-md-9 judgement_display" style="height: 600px;">
                    <div id="display_content">
                        <div class="header_only" style="margin-bottom: 5px;">
                            <p><b>{{ $highCourt['case_title'] }}</b></p>
                        </div>

                        <a id="print_options" href="#">Print & Download&raquo;</a>
                            <div class="menu_options pull-right" style="display: none;">
                                <a href="/judgement/pdf_view/{{ $highCourt['gh_law_judgment_group_name'] }}/{{$highCourt['id']}}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
                                <a href="/judgement/plain_view/{{$highCourt['id']}}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
                                <a href="/judgement/print_preview/{{$highCourt['id']}}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>

                        <div class="content">
                            <!-- Court Name -->
                                <center>
                                    <ul>
                                        <li style="list-style: none;">
                                        <h4><b>{!! $highCourt['court_name'] !!}</b></h4><br>
                                        </li>
                                    </ul>
                                </center>
                                
                                <!-- Case Title -->
                                <center>
                                    <b>
                                        <h5 style="color:blue;"><b>{!! $highCourt['case_title_1'] !!}</b></h5>
                                        <label>vs.</label>
                                        <h5 style="color:blue;"><b>{!! $highCourt['case_title_2'] !!}</b></h5>
                                    </b>
                                </center>
                                <br>
    
                                <div style="padding: 15px;">
                                    <div class="row">
                                            <h5><b style="color:blue;">DATE:&nbsp;</b>
                                            <b style="color:black;">{{$highCourt['date']}}</b></h5>
                                    </div>
                                    <div class="row">
                                        <h5><b style="color:blue;">CASE NO:&nbsp;</b>
                                        <b style="color:black;">{{$highCourt['reference_number']}}</b></h5>
                                    </div>
                                    
                                    <div class="row">
                                        <h5><b style="color:blue;">JUDGES:&nbsp;</b>
                                        <b style="color:black;">{{$highCourt['coram']}}</b></h5>
                                    </div>
                                    
                                    <div class="row">
                                        <h5><b style="color:blue;">LAWYERS:&nbsp;</b>
                                        <b style="color:black;">{!! $highCourt['counsellors'] !!}</b></h5>
                                    </div>
                                </div>
                                <h4><b style="color:blue;">JUDGEMENT</b></h4>
                                <hr>
                            {{-- Body	 --}}
                        <p>{!! $highCourt['content'] !!}</p>
                        </div>
                    </div> 
                    <div id="display_view_all_section"></div>   
                </div>
                    {{--@include('law_judgment.law_high_court_container')--}}
                    
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading"><center><p class="panel-title"><small>Quick Look on {{$highCourt['gh_law_judgment_group_name']}}</small></p></center></div>
                        <div class="panel-body">
                            {{-- View all sections --}}
                            <center>
                            <div class="btn-group" style="margin-bottom: 10px;">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <small>Preview Case Laws</small> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu scroll-view-judgement dropdown-menu-right" style="width: 600px;">
                                    @foreach($highCourts as $highCourt) 
                                    <li>
                                        <a class="alt_section_link" href="/judgement/view/2/{{$highCourt->gh_law_judgment_group_name}}/{{ $highCourt->id}}">{{$highCourt->case_title}}</a>
                                    </li>
                                                                     <!-- /judgement/view/2/{{ $highCourt->gh_law_judgment_group_name }}/{{ $highCourt->id}} -->
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
                            <iframe width="420" height="345" src=""></iframe>        
                            </div>		  
                        </div>
                        </div>
                </div>
            </div>
        </div>         
@endsection