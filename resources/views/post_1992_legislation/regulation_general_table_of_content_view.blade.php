@extends('extenders.main')

@section('assets')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<style type="text/css">

        .header {
          padding: 1px 1px;
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
          padding: 16px;
        }

</style>

@endsection

@section('content')

      @include('post_1992_legislation.post_1992_legislation_menu')

<div class="container-fluid" style="margin-bottom: 5em;"> 

    {{-- Nav tabs --}}
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">

        <!--Acts -->
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
                   <h5><b>{{ $allPost1992Act['title'] }}</b></h5>
                   <span>View All
                        <a class="all_amendments_link" id="all_amendments_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_amended_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><b> Amendents</b></a>
                    </span>
                   <hr>
                   <a class="preamble_link" id="preamble_link_toggle" href="/post_1992_legislation/preamble/{{ $allPost1992Act['id'] }}">
                      <p>Introductory Text</p>
                   </a>
                   
                        @include('post_1992_legislation.displayed_parts_sections')

                        <div class="col-md-12 text-center">
                            <ul id="myPager" class="pagination"></ul>
                            <p><a href="#" data-scroll-to="body">Move to Top</button></p>
                        </div>
                    
                </div> 
                    @include('post_1992_legislation.container_main_act_page')
            </div> 
        </div>


        {{-- Contents --}}
        <div id="contentTab" class="tab-pane fade">
            <div class="row">
                <div class="col-md-10 table-wrapper-scroll-display">
                    <div id="display_content"></div>
                    <div id="display_preamble"></div>
                    <div id="display_view_all_section"></div>
                </div>
                @include('post_1992_legislation.container_details_main_act_page')
            </div>   

            <div class="row show">
              <div class="pager col-md-10 col-md-offset-6">
                <ul class="pager">
                    <li><a href="#" id="previous_content_reg">Previous</a></li>
                    <li><a href="#" id="next_content_reg">Next</a></li>
                </ul>
              </div>
            </div>
        </div> 
         
         <!-- ACTS EXPANDED CONTENTS -->
        <div id="expandedTab" class="tab-pane fade">
                <div class="row">
                     <div class="col-md-10 expanded_view">
                        <div id="acts_expanded_view"></div> 
                    </div>
                     @include('post_1992_legislation.container_details_act_expanded')
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
                    <div id="amended_table_of_content" class="amended_act_toggle_content"></div>   
                    </div>
                    @include('post_1992_legislation.container_expanded_amended_act_page')
                </div>
          </div>

          <!-- AMENDMENTS CONTENT -->
          <div id="amendmentcontentTab" class="tab-pane fade">
                <div class="row">
                    <div class="col-md-10 table-wrapper-scroll-display">
                        <div id="single_preamble_amended_content"></div>
                        <div id="single_amended_content"></div>
                        <div id="single_view_all_sections_amend"></div> 
                    </div>
                    
                    <div class="col-md-2">
                        <div id="single_container_details_amend"></div>
                    </div>
                    
                        {{-- ADVERTISEMENT
                        <div class="col-md-2">
                            <div class="panel panel-default">
                                <div class="panel-heading"><h3 class="panel-title">Advertisement</h3></div>
                                <div class="panel-body">
                                    <div class="embed-responsive embed-responsive-4by3">iframe width="420" height="345" src="https://www.youtube"></iframe></div>        
                                </div>
                            </div>
                        </div>--}}
                </div>
          </div>
            
    </div><!--end of row-->
</div><!--end of container-fluid-->

@endsection

@section('scripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
@endsection



