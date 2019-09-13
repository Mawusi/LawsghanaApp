@extends('extenders.main')

@section('title', $regulationAct['title'])
@section('assets')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<style type="text/css">

        .header {
          background: #888888;
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
          padding: 16px;
        }
        .accordion-content {
        height: 300px;
        overflow-y: scroll;
        }

</style>

@endsection

@section('content')

@section('second_nav')
    @include('post_1992_legislation.post_1992_legislation_menu')
@endsection

<div class="container-fluid">
    <p style="font-size:20px;"><b class="small">{{ $regulationAct['title'] }}</b></p>

    {{-- Nav tabs --}}
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
        <li class="active">
            <a href="#tableOfContentTab" data-toggle="tab">Table of Contents</a>
        </li>
        <li class="tabPanedHide_acts_content">
            <a href="#contentTab" data-toggle="tab">Contents</a>
        </li> 
        <!-- Expanded View -->
        <li class="tabPanedHide_expanded_view">
                <a href="#expandedTab" data-toggle="tab">Expanded View</a>
        </li> 

        <!-- Amendments -->
        <li class="tabPanedHide_amendments">
                <a href="#all_amendmentsTab" data-toggle="tab">Amendments</a>
        </li>
        <li class="tabPanedHide_amendments_table">
            <a href="#amended_table_of_Content_Tab" data-toggle="tab">Amendments Table of Contents</a>
        </li>
        <li class="tabPanedHide_amendments_content">
                <a href="#amendmentcontentTab" data-toggle="tab">Amended Content</a>
        </li>  
    </ul>

    {{-- tab panes content --}}
    <div id="my-tab-content" class="tab-content">

    {{-- table of Contents --}}
        <div id="tableOfContentTab" class="tab-pane fade in active">
            
            <div class="row">
                <div class="col-md-7">
                     {{--<h5><b>{{ $regulationAct['title'] }}</b></h5>--}}
                     <br>
                   <a class="preamble_link" id="preamble_link_toggle" href="/post_1992_legislation/regulation/preamble/{{ $regulationAct['id'] }}"><p>Introductory Text</p></a>
                   
                        <div class="accordion-content">
                            @include('post_1992_legislation.displayed_regulation_parts_sections')
                        </div>
                        
                        <div class="col-md-12 text-center">
                            <!--<ul id="myPager" class="pagination"></ul>-->
                            <p><a data-scroll-to="body"
                            data-scroll-focus="body"
                            data-scroll-speed="400"
                            data-scroll-offset="-60" href="#" data-scroll-to="body">Move to Top</button></p>
                        </div>
                </div> 
                        @include('post_1992_legislation.container_main_regulation_acts_page')
            </div>

        </div>

        {{-- Contents --}}
        <div id="contentTab" class="tab-pane fade">
          <div class="row">
            <div class="col-md-7 table-wrapper-scroll-display" style="height: 600px;">
                <div id="display_content"></div>
                <div id="display_preamble"></div>
                <div id="display_view_all_section"></div>
            </div>
                        @include('post_1992_legislation.container_details_main_regulation_acts_page')
          </div>
          
          <div class="row show">
                <div class="col-md-7">
                 <ul class="pager">
                    <li><a data-scroll-to="body"
                        data-scroll-focus="body"
                        data-scroll-speed="400"
                        data-scroll-offset="-60" href="#" class="previous_content_regulation">Previous Regulation</a></li>
                    <li><a data-scroll-to="body"
                        data-scroll-focus="body"
                        data-scroll-speed="400"
                        data-scroll-offset="-60" href="#" class="next_content_regulation">Next Regulation</a></li>
                 </ul>
                </div>
            </div>
        </div>

         <!-- ACTS EXPANDED CONTENTS -->
         <div id="expandedTab" class="tab-pane fade">
                <div class="row">
                     <div class="col-md-7 expanded_view" style="background-color: #FFFFFF";>
                        <div id="acts_expanded_view"></div> 
                    </div>
                     @include('post_1992_legislation.container_details_act_expanded_regulation')
                </div>
        </div>

        <!-- ALL AMENDMENTS LISTS -->
        <div id="all_amendmentsTab" class="tab-pane fade">
                <div class="row">
                        <div class="col-md-7">
                            <div id="all_amendments" class="amended_act_toggle"></div> 
                        </div>
                        @include('post_1992_legislation.container_main_amended_act_page')
                </div>
          </div>

          <!-- AMENDMENTS TABLE OF CONTENTS -->
          <div id="amended_table_of_Content_Tab" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-7">
                    <div id="amended_regulation_table_of_content" class="amended_act_toggle_content"></div>  
                    </div>
                    
                    @include('post_1992_legislation.container_expanded_amended_act_page')

                </div>
          </div>

          <!-- AMENDMENTS CONTENT -->
          <div id="amendmentcontentTab" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-7 table-wrapper-scroll-display" style="height: 600px;">
                        <div id="single_preamble_amended_content_for_regulation"></div>
                        <div id="single_amended_content_for_regulation"></div>
                        <div id="single_view_all_sections_amend_for_regulation"></div>  
                    </div>
                    
                    <div class="col-md-2">
                        <div id="single_container_details_amends_under_regulation"></div>
                    </div>
                    
                    {{-- ADVERTISEMENT --}}
                    <div class="col-md-3">
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
                
                <div class="row show">
                        <div class="col-md-7">
                         <ul class="pager">
                            <li><a data-scroll-to="body"
                                data-scroll-focus="body"
                                data-scroll-speed="400"
                                data-scroll-offset="-60" href="#" class="previous_amendment_under_regulation">Previous Regulation</a></li>
                            <li><a data-scroll-to="body"
                                data-scroll-focus="body"
                                data-scroll-speed="400"
                                data-scroll-offset="-60" href="#" class="next_amendment_under_regulation">Next Regulation</a></li>
                         </ul>
                        </div>
                </div>
          </div>

    </div>    
</div><!--end of container-fluid-->

@endsection

@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
@endsection

