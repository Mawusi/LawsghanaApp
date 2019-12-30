@extends('extenders.main')

@section('title', ucwords(strtolower($allGhanaLaw['case_title'])))
@section('assets')

    <style type="text/css">

        .navbar {
          min-height: 1px;
        }
        .nav>li>a {
            position: relative;
            display: block;
            padding: 5px 14px;
            color: white;
            }
        .nav>li>a:hover {
            color: #004353;
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
            padding-top: 14px;
            padding-bottom: 14px;
            line-height: 10px;
          }
        }

            .header_only {
            padding: 5px 1px 0.1px 1px;
            background: #f5f5f5;
            color: black;
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
            .bg-header-color{
            background-color: #004353;
            }
            .form-group-customised{
            margin-bottom: .1px;
        }
        .search-form{
          padding-right: 10px;
          padding-top: 3px;
      }
      .search-form .form-group {
          float: right !important;
          transition: all 0.35s, border-radius 0s;
          width: 32px;
          height: 32px;
          background-color: #fff;
          box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
          border-radius: 25px;
          border: 1px solid #ccc;
      }
          .search-form .form-group input.form-control {
          padding-right: 20px;
          border: 0 none;
          background: transparent;
          box-shadow: none;
          display:block;
      }
          .search-form .form-group input.form-control::-webkit-input-placeholder {
          display: none;
      }
          .search-form .form-group input.form-control:-moz-placeholder {
          /* Firefox 18- */
          display: none;
      }
          .search-form .form-group input.form-control::-moz-placeholder {
          /* Firefox 19+ */
          display: none;
      }
          .search-form .form-group input.form-control:-ms-input-placeholder {
          display: none;
      }
          .search-form .form-group:hover,
          .search-form .form-group.hover {
          width: 200%;
          border-radius: 4px 25px 25px 4px;
      }
          .search-form .form-group span.form-control-feedback {
          position: absolute;
          top: -1px;
          right: -2px;
          z-index: 2;
          display: block;
          width: 34px;
          height: 34px;
          line-height: 34px;
          text-align: center;
          color: #3596e0;
          left: initial;
          font-size: 14px;
      }
            .panel-title{
            font-size: 14px;
            }
            .shadow-background{
            box-shadow: 0 1px 5px #e0e0e0;
            background-color: #FFFFFF;
            }
            
            .popup-overlay {
            /*Hides pop-up when there is no "active" class*/
            visibility: hidden;
            position: absolute;
            width: 80%;
            left: 1.5%;
            }

            .popup-overlay.active {
            /*displays pop-up when "active" class is present*/
            visibility: visible;
            text-align: center;
            }
    </style>

@endsection


@section('content')
{{-- 
@section('second_nav')
    @include('law_judgment.ghana_judgement_menu_addon')
<span style="color:blue">{{ $allGhanaLaw['gh_law_judgment_group_name'] }} Case</span>
@endsection --}}

        <div class="container-fluid">
            <div class="row content">
                <div class="col-md-9">
                    <div class="shadow-background">
                        <div style="padding: 15px;">
                                @include('law_judgment.ghana_judgement_menu')
                                
                                <div class="text-right" style="margin-bottom: 5px;">
                                    <button class="btn btn-default btn-xs open">
                                            <span class="glyphicon glyphicon-tasks"></span> Filter
                                    </button>
                                </div>
                    
                                <div class="judgement_display" style="height: 600px;">
                                    <div id="display_content">
                                            <div class="header_only" style="margin-bottom: 5px;border: .1px solid #ddd;">
                                                <p style="padding-top: .1px; padding-bottom: 0px; padding-left: 16px; padding-right: 16px;"><b>{{ $allGhanaLaw['case_title'] }}</b></p>
                                            </div>
                                        <a class="pull-right" id="print_options" href="#">Print Options&nbsp;</a>
                                            <div class="menu_options pull-right" style="display: none;">
                                                <a href="/judgement/pdf_view/{{ $allGhanaLaw['case_title'] }}/{{$allGhanaLaw['id']}}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
                                                <a href="/judgement/plain_view/{{$allGhanaLaw['id']}}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
                                                <a href="/judgement/print_preview/{{$allGhanaLaw['id']}}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </div>
                                            <br>

                                        <div class="content">
                                            <!-- Court Name -->
                                            <center>
                                                <ul>
                                                    <li style="list-style: none;">
                                                    <h4><b>{!! $allGhanaLaw['court_name'] !!}</b></h4><br>
                                                    </li>
                                                </ul>
                                            </center>
                                            
                                            <!-- Case Title -->
                                            <center>
                                                <b>
                                                    <h5 style="color:blue;"><b>{!! $allGhanaLaw['case_title_1'] !!}</b></h5>
                                                    <label>vs.</label>
                                                    <h5 style="color:blue;"><b>{!! $allGhanaLaw['case_title_2'] !!}</b></h5>
                                                </b>
                                            </center>
                                            <br>

                                            <div style="padding: 15px;">
                                                <div class="row">
                                                        <h5><b style="color:blue;">DATE:&nbsp;</b>
                                                        <b style="color:black;">{{$allGhanaLaw['date']}}</b></h5>
                                                </div>
                                                <div class="row">
                                                    <h5><b style="color:blue;">{{$allGhanaLaw['case_type_name']}}:&nbsp;</b>
                                                    <b style="color:black;">{{$allGhanaLaw['reference_number']}}</b></h5>
                                                </div>
                                                
                                                <div class="row">
                                                    <h5><b style="color:blue;">JUDGES:&nbsp;</b>
                                                    <b style="color:black;">{{$allGhanaLaw['coram']}}</b></h5>
                                                </div>
                                                
                                                <div class="row">
                                                    <h5><b style="color:blue;">LAWYERS:&nbsp;</b>
                                                    <b style="color:black;">{!! $allGhanaLaw['counsellors'] !!}</b></h5>
                                                </div>
                                            </div>
                                            <h5><b style="color:blue;">{{$allGhanaLaw['judgement_type']}}</b></h5>
                                            <hr>
                                            
                                            {{--Body--}}   
                                            <p>{!! $allGhanaLaw['content'] !!}</p>
                                        </div>
                                    </div> 
                                <div id="display_view_all_section"></div>
                            </div> 
                        </div>
                    </div>  
                </div>
                    {{--@include('law_judgment.ghana_all_judgment_view')--}}

                    {{-- Advertisement --}}
                {{--
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
                                    <li><a class="alt_section_link" href="/judgement/Ghana/{{$allGhanaLaw->gh_law_judgment_group_name}}/{{ $allGhanaLaw->id}}">{{$allGhanaLaw->case_title}}</a></li>
                                @endforeach
                                </ul>
                            </div>
                            </center>
                            @include('extenders.case_law_main_search')
                        </div>
                    </div>
                <br>    
                        
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
                --}}
                <!-- for the ads -->
                <div class="col-md-3">
                    <div class="popup-overlay" style="padding-top: 75px;">
                            <div class="panel panel-default">
                                    <a class="close" href="#">&times;</a>
                                    <div class="panel-heading"><center><p class="panel-title"><small>Quick Look on Case Laws</small></p></center></div>
                                        <div class="panel-body">
                                            <center>
                                            <div class="btn-group" style="margin-bottom: 10px;">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <small>Preview Case Laws</small> <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu scroll-view-judgement dropdown-menu-right" style=" height: 370px; width: 600px;">
                                                    @foreach($allGhanaLaws as $allGhanaLaw) 
                                                    <!-- <li><a class="view_all_section_link" href="/judgement/all-cases/{{ $allGhanaLaw->id}}">{{$allGhanaLaw->case_title}}</a></li> -->
                                                    <li><a class="alt_section_link" href="/judgement/Ghana/{{$allGhanaLaw->gh_law_judgment_group_name}}/{{ $allGhanaLaw->id}}">{{$allGhanaLaw->case_title}}</a></li>
                                                @endforeach
                                                </ul>
                                            </div>
                                            </center>
                                            <br>
                                            @include('extenders.case_law_main_search')
                                        </div>
                            </div>    
                    </div>
                </div>

            </div>
        </div>         
@endsection