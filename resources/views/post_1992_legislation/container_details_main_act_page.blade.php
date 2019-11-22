<div class="col-md-3">
            
    <div class="panel panel-default">
      <div class="panel-heading">
        <center><p class="panel-title"><small>Views and Downloads</small></p></center>
      </div>
      <div class="panel-body">
          
         {{-- View all acts --}}
         
        <center>
        <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small>View All Sections</small></small> <span class="caret"></span>
              </button>
              <ul class="dropdown-menu table-wrapper-scroll-view" style="width: 520px;">
                  @foreach($allPost1992Articles as $allPost1992Article)
                      <li><a class="view_all_section_link_with_prev_next" sid="{{$allPost1992Article->id}}" href="/post_1992_legislation/content/{{ $allPost1992Article->id }}">{{$allPost1992Article->section }}</a></li>
                  @endforeach  
              </ul>
        </div>
        </center>

        <ul class="pager show">
            <li><a href="#" class="previous_content_act">Previous</a></li>
            <li><a href="#" class="next_content_act">Next</a></li>
        </ul>
        
        {{-- Downloads 
        <center>
        <div class="row">
          <div class="col-md-12">
            <label>Downloads</label>
            <div class="row">
              
              <a class="col-md-6" href="/post_1992_legislation/1/{{$allPost1992Act['post_group']}}/{{$allPost1992Act['title']}}/pdf_view/{{ $allPost1992Act['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" class="img-responsive" style="width:2em;">PDF</a>
              <a class="col-md-6" href="#"><img alt="Brand" src="{{ asset('/logo/word.png') }}" class="img-responsive" style="width:2em;">WORD</a>
              
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <!-- <label>Print</label> -->
                <!-- <button class="btn btn-primary btn-sm printLink"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;&nbsp;Print</button> -->
                <a class="btn btn-primary btn-sm" href="#"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;&nbsp;Print</a>

              </div> 
            </div>
          </div>
        </div>
        </center>    
        <br>
        --}}
        
        <center>
        <label>View</label>
        <a class="expanded_link" id="expanded_link_toggle_all_pre1992_preview_2" href="/post_1992_legislation/1/{{$allPost1992Act['post_group']}}/{{$allPost1992Act['title']}}/expanded-view/{{ $allPost1992Act['id'] }}"><li style="list-style:none;">Expanded View</li>
        </a><hr>
        <!-- <a href="/post_1992_legislation/plain_content/{{ $allPost1992Article['post_act'] }}/{{ $allPost1992Article['id'] }}" target="_blank">Sections Plain View</a> -->

        <!-- <a class="trigger_plain_view" href="#"><li>Plain View</li></a> -->
        <!-- <a href="/post_1992_legislation/plain_content/{{ $allPost1992Article->id }}"><li>Plain View</li></a> -->
        </center>
        
        <!--<br>-->
        @include('extenders.case_law_main_search')
    </div>
    
  </div>
</div>



