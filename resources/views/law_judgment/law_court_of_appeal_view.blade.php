@extends('extenders.main')

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

    <div class="container-fluid"><span style="color:red;">{{ $courtOfAppeal['gh_law_judgment_group_name'] }} Case</div>
        <div class="container-fluid">
            <div class="row content">
                <div class="col-md-9 judgement_display" style="height: 600px;">
                    <div id="display_content">
                        <div class="header_only">
                            <p><b>{{ $courtOfAppeal['case_title'] }}</b></p>
                        </div>
                        <div class="content">	
                        <p>{!! $courtOfAppeal['content'] !!}</p>
                        </div>
                    </div> 
                    <div id="display_view_all_section"></div>   
                </div>
                    {{--@include('law_judgment.law_court_of_appeal_container')--}}
                <div class="col-md-3">
                    <div class="panel panel-default">
                        <div class="panel-heading"><center><p class="panel-title"><small>Quick Look on {{$courtOfAppeal['gh_law_judgment_group_name']}}</small></p></center></div>
                        <div class="panel-body">
                            {{-- View all sections --}}
                            <center>
                            <div class="btn-group" style="margin-bottom: 10px;">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <small>Preview Case Laws</small> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu scroll-view-judgement dropdown-menu-right" style="width: 600px;">
                                    @foreach($courtOfAppeals as $courtOfAppeal) 
                                    <li>
                                        <a class="view_all_section_link" href="/judgement/Ghana/Case-view/{{$courtOfAppeal->gh_law_judgment_group_name}}}/{{ $courtOfAppeal->id}}">{{$courtOfAppeal->case_title}}</a>
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