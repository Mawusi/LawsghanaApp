
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
                  @foreach($allAmendedRegulationArticles as $allAmendedRegulationArticle)
                  <li><a class="view_all_section_link" href="/post_1992_legislation/amended_regulation_acts/content/{{ $allAmendedRegulationArticle->id }}">{{$allAmendedRegulationArticle->section }}</a></li>
                  @endforeach    
              </ul>
        </div>
        </center>
        
        <ul class="pager show">
            <li><a href="#" class="previous_content_amendments">Previous</a></li>
            <li><a href="#" class="next_content_amendments">Next</a></li>
        </ul>

        {{-- Downloads --}}
        <label>Downloads</label>
            <a href=""><li>design icon (PDF)</li></a>
            <a href=""><li>design icon (WORD)</li></a>
        <br><br>
        
        <label>Print</label>
            <!--<a href=""><li style="list-style: none;">Whole Act</li></a>-->
            <a href=""  class="printLink"><li>Current Section</li></a>
        <br><br>
        
        <label>View Whole Amendments</label>
            <a class="expanded_link" id="expanded_link_toggle_all_pre1992_preview_2" href="/post_1992_legislation/amended_regulation_acts/expanded_view/{{$amendedRegulationAct['act_category']}}/{{$amendedRegulationAct['title']}}/{{$amendedRegulationAct['id']}}"><li>Expanded View</li>
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
