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
                <small>Select Sections</small></small> <span class="caret"></span>
              </button>
              <ul class="dropdown-menu table-wrapper-scroll-view" style="width: 520px;">
                  @foreach($allAmendedArticles as $allAmendedArticle)
                  <li><a class="amendments_view_all_section_link_with_prev_next" sid={{$allAmendedArticle->id}} href="/post_1992_legislation/amended_acts/content/{{ $allAmendedArticle->id }}">{{$allAmendedArticle->section }}</a></li>
                  @endforeach   
              </ul>
        </div>
        </center>
        <br>
        <ul class="pager show">
            <li><a href="#" class="previous_content_amendments">&laquo;&nbsp;Previous</a></li>
            <li><a href="#" class="next_content_amendments">Next&nbsp;&raquo;</a></li>
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
        <br>
        --}}
        <hr>
        <br>
        <center>
            <button class="btn btn-sm btn-default expanded_link" id="expanded_link_toggle_all_pre1992_preview_2" href="/post_1992_legislation/amended_acts/expanded_view/{{$amendedAct['post_category']}}/{{$amendedAct['title']}}/{{$amendedAct['id']}}"><li style="list-style:none;">Expanded View</li>
            </button>
        </center> 
        {{-- @include('extenders.case_law_main_search') --}}
    </div>
  </div>
</div>

