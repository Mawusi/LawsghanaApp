
{{-- DOWNLOADS AND PRINT OPTIONS --}}
<div class="col-md-3"> 
    <div class="panel panel-default">
      <div class="panel-heading">
        <center><p class="panel-title"><small>Filter</small></p></center>
      </div>
      <div class="panel-body">

        {{-- View all sections --}}
        <center>
        <div class="btn-group">
              <button style="background-color:white; border-color:black;" type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small>View All Sections</small></small> <span class="caret"></span>
              </button>
              <ul class="dropdown-menu table-wrapper-scroll-view" style="width: 520px;">
                   @foreach($constitutionContentAmendeds as $constitutionContentAmended)
                  <li><a class="constitution_amended_view_all_section_link_with_prev_next" sid={{$constitutionContentAmended->id}} href="/constitution_amended/Republic/constitution_content/{{ $constitutionContentAmended->id }}">{{$constitutionContentAmended->section }}</a></li>
                @endforeach
              </ul>
        </div>
        </center>
        
        <ul class="pager show">
            <li><a href="#" class="previous_content_constitution_amended_act">&laquo;&nbsp;Previous</a></li>
            <li><a href="#" class="next_content_constitution_amended_act">Next&nbsp;&raquo;</a></li>
        </ul>

        {{-- Downloads
        <div class="row">
          <div class="col-md-12">
            <label>Downloads</label>
            <div class="row">
              
              <a class="col-md-6" href=""><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" class="img-responsive" style="width:2em;">PDF</a>
              <a class="col-md-6" href=""><img alt="Brand" src="{{ asset('/logo/word.png') }}" class="img-responsive" style="width:2em;">WORD</a>
              
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <!-- <label>Print</label> -->
                <button class="btn btn-primary btn-sm printLink"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;&nbsp;Print</button>
              </div> 
            </div>
          </div>
        </div>
        --}}

        <center>
        {{-- <label>View</label>
        <a class="expanded_link" id="expanded_link_toggle_all_pre1992_preview_2" href="/constitution_amended/Republic/expanded_view/{{ $ghana_act_amended['id'] }}"><li style="list-style:none;">Expanded View</li></a> --}}
        <!-- <a><li>Plain View</li></a> -->

        <button style="background-color:white; border-color:black;" class="btn btn-xs expanded_link" id="expanded_link_toggle_all_pre1992_preview_2" href="/constitution_amended/Republic/expanded_view/{{ $ghana_act_amended['id'] }}"><li style="list-style:none;">Expanded View</li>
        </button>
        <hr>

        </center>
        @include('extenders.case_law_main_search')
    </div>
  </div>
</div>

