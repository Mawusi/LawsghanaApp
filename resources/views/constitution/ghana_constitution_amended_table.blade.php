@extends('extenders.main')

@section('title', ucwords(strtolower($ghana_act_amended['title'])))
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
        height: 100px;
        overflow-y: scroll;
        }

</style>
@endsection

@section('content')

@section('second_nav')
    @include('constitution.constitution_menu')
@endsection

    <div class="container-fluid">
    <p style="font-size:20px;"><b class="small">{{ $ghana_act_amended['title'] }}</b></p> 
        {{-- Nav tabs --}}
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <!-- Acts -->
            <li class="active">
                <a href="#tableOfContentTab" data-toggle="tab">Table of Contents</a>
            </li>
            <li class="tabPanedHide_acts_content">
                <a href="#contentTab" data-toggle="tab">Content</a>
            </li>
            <!-- Expanded View -->
            <li class="tabPanedHide_expanded_view">
                    <a href="#expandedTab" data-toggle="tab">Expanded View</a>
            </li>
        </ul>

        

        {{-- tab panes content --}}
        <div id="my-tab-content" class="tab-content">

            <!-- ACTS TABLE OF CONTENT -->
            <div id="tableOfContentTab" class="tab-pane fade in active">
                <div class="row">
                    <div class="col-md-7">
                        <br>
                        <a class="preamble_link" id="preamble_link_toggle" href="/constitution_amended/Republic/constitution_preamble/{{ $ghana_act_amended['id'] }}"><p>Introductory Text</p>
                        </a>
                        

                            <!-- Chapters and Articles -->
                            <div class="accordion-content">
                                @include('constitution.chapters_articles_amended')
                            </div>
                            
                            <div class="col-md-12 text-center">
                                <!--<ul id="myPager" class="pagination"></ul>-->
                                <p><a data-scroll-to="body"
                                data-scroll-focus="body"
                                data-scroll-speed="400"
                                data-scroll-offset="-60" href="#" data-scroll-to="body">Move to Top</button></p>
                            </div>
                    </div>

                            <!-- Downloads and Advertisement -->
                            @include('constitution.container_plain_amended')
                </div>

            </div>


            <!-- ACTS CONTENTS -->
            <div id="contentTab" class="tab-pane fade">
                <div class="row">
                     <div class="col-md-7 table-wrapper-scroll-display" style="height: 600px;">
                        <div id="display_content"></div>
                        <div id="display_preamble"></div>
                        <div id="display_view_all_section"></div>  
                    </div>
                    @include('constitution.container_details_constitution_amended')
                </div>
                
                <div class="row show">
                    <div class="col-md-7">
                         <ul class="pager">
                            <li><a data-scroll-to="body"
                                data-scroll-focus="body"
                                data-scroll-speed="400"
                                data-scroll-offset="-60" href="#" class="previous_content_constitution_amended_act">Previous Section</a></li>
                            <li><a data-scroll-to="body"
                                data-scroll-focus="body"
                                data-scroll-speed="400"
                                data-scroll-offset="-60" href="#" class="next_content_constitution_amended_act">Next Section</a></li>
                         </ul>
                    </div>
                </div>
                
            </div>

            <!-- ACTS EXPANDED CONTENTS -->
            <div id="expandedTab" class="tab-pane fade">
                <div class="row">
                     <div class="col-md-9 expanded_view" style="background-color: #FFFFFF";>
                        <div id="acts_expanded_view"></div> 
                    </div>
                    @include('constitution.container_details_act_expanded_amended')
                </div>
                {{--
                <div class="row show">
                    <div class="pager col-md-10 col-md-offset-6">
                     <ul class="pager">
                        <li><a href="#" id="previous_content_act">Previous</a></li>
                        <li><a href="#" id="next_content_act">Next</a></li>
                     </ul>
                    </div>
                </div>--}}
            </div>

        </div>
    </div><!--end of container-fluid-->
@endsection