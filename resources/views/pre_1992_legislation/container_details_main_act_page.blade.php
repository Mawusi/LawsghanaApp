
{{--CONTAINER DETAIL --}}

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
                 @foreach($allPre1992Articles as $allPre1992Article)
                  <li><a class="pre_view_all_section_link_with_prev_next" sid={{$allPre1992Article->id}} href="/pre_1992_legislation/content/{{ $allPre1992Article->id }}">{{$allPre1992Article->section }}</a></li>
              @endforeach   
              </ul>
        </div>
        </center>
        
        <ul class="pager show">
            <li><a href="#" class="previous_content_pre_act">Previous</a></li>
            <li><a href="#" class="next_content_pre_act">Next</a></li>
        </ul>
        
        {{-- Downloads --}}
        <label>Downloads</label>
            <a href=""><li>pdf icon (PDF)</li></a>
            <a href=""><li>word icon (WORD)</li></a>
        <br><br>
        
        <label>Print</label>
            <!--<a href=""><li style="list-style: none;">Whole Act</li></a>-->
            <a href=""  class="btn btn-primary btn-sm printLink"><li>Current Selections</li></a>
            <button type="button" class="btn btn-primary btn-sm"> Print</button>
        <br><br>
        
        <label>View</label>
            <a class="expanded_link" id="expanded_link_toggle_all_pre1992_preview_2" href="/pre_1992_legislation/1/{{$allPre1992Act['pre_1992_group']}}/{{$allPre1992Act['title']}}/expanded-view/{{ $allPre1992Act['id'] }}"><li>Expanded View</li>
            </a>
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








