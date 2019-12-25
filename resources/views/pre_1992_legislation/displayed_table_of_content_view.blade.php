@extends('extenders.main')

@section('title', ucwords(strtolower($allPre1992Act['title'])))

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
        .content-fluid{
            padding: 0.1px;
        }
        .accordion-content {
        height: 600px;
        overflow-y: auto;
        }
        .bg-header-color{
            background-color: #004353;
        }
        .bg-header-color-tabs{
            /* background-color: #539bad; */
            /* #539bad,#989898 */
            background-color: #8DD8CA;
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

</style>

@endsection

@section('content')

{{-- @section('second_nav')
    @include('pre_1992_legislation.pre_1992_legislation_menu')
@endsection --}}

<div class="container-fluid content-fluid"> 
  <div class="row">
    <div class="col-md-9">
        <div class="shadow-background">
            <div style="padding: 15px;">
    @include('pre_1992_legislation.pre_1992_legislation_menu')
    <center>  
    <p style="font-size:18px;"><b class="small">{{ $allPre1992Act['title'] }}</b></p>
    </center>   
    {{-- Nav tabs --}}
    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">

        <!-- ACTS TABLE OF CONTENT -->
        <li class="active">
            <a href="#tableOfContentTab" data-toggle="tab" class="tabPaned_color_table_of_table">Table of Contents</a>
        </li>

        <!-- ACTS CONTENTS -->
        <li class="tabPanedHide_acts_content">
            <a href="#contentTab" data-toggle="tab" class="bg-color-content">Content</a>
        </li>

        <!-- ACTS EXPANDED CONTENTS -->
        <li class="tabPanedHide_expanded_view">
                <a href="#expandedTab" data-toggle="tab" class="bg-color-expanded">Expanded View</a>
        </li>  
    </ul>
    {{-- ------------------------------------------------------End of Nav tab for the panels----------------------------------------------------------- --}}


    {{-- tab panes content --}}
    <div id="my-tab-content" class="tab-content">

        <!-- ACTS TABLE OF CONTENT -->
        <div id="tableOfContentTab" class="tab-pane fade in active">

            <div class="row">
                <div class="col-md-9">
                   <br>
                   
                   <a class="preamble_link" id="preamble_link_toggle" href="/pre_1992_legislation/preamble/{{ $allPre1992Act['id'] }}">
                      
                      @if($allPre1992Act['preamble'] != null)
                        <p class="preamble_hide">Introductory Text</p>
                        @else
                            @section('scripts')
                                <script>
                                $( ".preamble_hide" ).hide();
                                </script>
                            @endsection
                      @endif
                   </a>
                   
                   <div class="accordion-content">
                        @include('pre_1992_legislation.displayed_parts_sections')
                   </div>      

                        <div class="col-md-12 text-center">
                            <!--<ul id="myPager" class="pagination"></ul>-->
                            <p><a data-scroll-to="body"
                            data-scroll-focus="body"
                            data-scroll-speed="400"
                            data-scroll-offset="-60" href="#" data-scroll-to="body">Move to Top</button></p>
                        </div>
                    
                </div> 
                    @include('pre_1992_legislation.container_main_act_page')
            </div> 
        </div>
        {{-- -------------------------------------------------------End of table of Contents---------------------------------------------------------------- --}}


        <!-- ACTS CONTENTS -->
        <div id="contentTab" class="tab-pane fade">
            <div class="row">
                <div class="col-md-9 table-wrapper-scroll-display" style="height: 600px;">
                    <div id="display_content"></div>
                    <div id="display_preamble"></div>
                    <div id="display_view_all_section"></div>
                </div>
                @include('pre_1992_legislation.container_details_main_act_page')
            </div>   
            
            <div class="row show">
                <div class="col-md-7">
                 <ul class="pager">
                    <li><a data-scroll-to="body"
                        data-scroll-focus="body"
                        data-scroll-speed="400"
                        data-scroll-offset="-60" href="#" class="previous_content_pre_act">Previous Section</a></li>
                    <li><a data-scroll-to="body"
                        data-scroll-focus="body"
                        data-scroll-speed="400"
                        data-scroll-offset="-60" href="#" class="next_content_pre_act">Next Section</a></li>
                 </ul>
                </div>
            </div>
            
         </div> 
         
         <!-- ACTS EXPANDED CONTENTS -->
         <div id="expandedTab" class="tab-pane fade">
          <span style="padding: .2em;"></span>
                <div class="row">
                     <div class="col-md-12 expanded_view" style="background-color: #FFFFFF";>
                        <div id="acts_expanded_view"></div> 
                    </div>
                      {{-- @include('pre_1992_legislation.container_details_act_expanded') --}}
                </div>
            </div>
            
    </div><!--end of row-->
  </div>
</div>
</div>
<!-- for the ads -->
@include('extenders.ads')
</div>
</div><!--end of container-fluid-->

@endsection




