
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
                  @foreach($allAmendedArticles as $allAmendedArticle)
                  <li><a class="amendments_view_all_section_link_with_prev_next" sid={{$allAmendedArticle->id}} href="/post_1992_legislation/amended_acts/content/{{ $allAmendedArticle->id }}">{{$allAmendedArticle->section }}</a></li>
                  @endforeach   
              </ul>
        </div>
        </center>
        
        <ul class="pager show">
            <li><a href="#" class="previous_content_amendments">Previous</a></li>
            <li><a href="#" class="next_content_amendments">Next</a></li>
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

        <center>
        <label>View</label>
            <a class="expanded_link" id="expanded_link_toggle_all_pre1992_preview_2" href="/post_1992_legislation/amended_acts/expanded_view/{{$amendedAct['post_category']}}/{{$amendedAct['title']}}/{{$amendedAct['id']}}"><li style="list-style:none;">Expanded View</li>
            </a>
        </center> 

    </div>
  </div>
  @include('extenders.case_law_main_search')
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