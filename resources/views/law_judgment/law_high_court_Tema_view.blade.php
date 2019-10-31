@extends('extenders.main')

@section('title', $highCourtTema['case_title'])
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

    <div class="container-fluid"><span style="color:red;">{{ $highCourtTema['gh_law_judgment_group_name'] }} Case</div>
        <div class="container-fluid">
            <div class="row content">
                <div class="col-md-9 judgement_display" style="height: 600px;">
                    <div id="display_content">
                        <div class="header_only" style="margin-bottom: 5px;">
                            <p><b>{{ $highCourtTema['case_title'] }}</b></p>
                        </div>

                        <a id="print_options" href="#">Print & Download&raquo;</a>
                            <div class="menu_options pull-right" style="display: none;">
                                <a href="/judgement/pdf_view/{{ $highCourtTema['gh_law_judgment_group_name'] }}/{{$highCourtTema['id']}}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
                                <a href="/judgement/plain_view/{{$highCourtTema['id']}}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
                                <a href="/judgement/print_preview/{{$highCourtTema['id']}}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>

                        <div class="content">	
                        <p>{!! $highCourtTema['content'] !!}</p>
                        </div>
                    </div> 
                    <div id="display_view_all_section"></div>   
                </div>
                    {{--@include('law_judgment.law_district_court_container')--}}
                    <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><center><p class="panel-title"><small>Quick Look on {{$highCourtTema['gh_law_judgment_group_name']}}</small></p></center></div>
                    <div class="panel-body">
                        {{-- View all sections --}}
                            <center>
                            <div class="btn-group" style="margin-bottom: 10px;">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <small>Preview Case Laws</small> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu scroll-view-judgement dropdown-menu-right" style="width: 600px;">
                                @foreach($highCourtTemas as $highCourtTema) 
                                    <li>
                                        <a class="alt_section_link" href="/judgement/view/6/{{$highCourtTema->gh_law_judgment_group_name}}/{{ $highCourtTema->id}}">{{$highCourtTema->case_title}}</a>
                                    </li>
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