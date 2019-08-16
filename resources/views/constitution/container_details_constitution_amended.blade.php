
{{-- DOWNLOADS AND PRINT OPTIONS --}}
<div class="col-md-2"> 
    <div class="panel panel-default">
      <div class="panel-heading">
        <center><p class="panel-title"><small>Views and Downloads</small></p></center>
      </div>
      <div class="panel-body">

        {{-- View all sections --}}
        <center>
        <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            <li><a href="#" class="previous_content_constitution_amended_act">Previous</a></li>
            <li><a href="#" class="next_content_constitution_amended_act">Next</a></li>
        </ul>

        {{-- Downloads --}}
        <label>Downloads</label>
            <a href=""><li>pdf icon (PDF)</li></a>
            <a href=""><li>word icon (WORD)</li></a>
        <br><br>
        
        <label>Print</label>
            <!--<a href=""><li style="list-style: none;">Whole Act</li></a>-->
            <a href=""  class="printLink"><li>Current Selection</li></a>
        <br><br>
        <label>View</label>
        <a class="expanded_link" id="expanded_link_toggle_all_pre1992_preview_2" href="/constitution_amended/Republic/expanded_view/{{ $ghana_act_amended['id'] }}"><li>Expanded View</li></a>
        <a><li>Plain View</li></a>
        <br>

    </div>
  </div>
</div>

<!--{{-- ADS--}}-->
<div class="col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading">
        <p class="panel-title"><small>Advertisement</small></p>
      </div>
      <div class="panel-body">
        <div class="embed-responsive embed-responsive-4by3">
        <iframe width="420" height="345" src="https://www.youtube"></iframe>      
      </div>        
      </div>
    </div>
</div>