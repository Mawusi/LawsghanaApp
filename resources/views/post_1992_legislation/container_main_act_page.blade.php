
{{-- CONTAINER PLAIN --}}

{{-- DOWNLOADS --}}
<!--<div class="col-md-2 col-md-offset-1"> -->
<div class="col-md-2">
    <div class="panel panel-default">
      <div class="panel-heading" style="background: #eeeeee;">
        <p class="panel-title" style="color: black;"><small>Filters</small></p>
      </div>

        <div class="panel-body">
        <center>
          <label style="color: black;">Related Acts</label><br>   
          
          <!-- 1. both are true -->
          @if($amendedcount > 0 && $regulationcount > 0)
                <a class="all_amendments_link" id="all_amendments_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_amended_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><li style="list-style:none;">View Amendments</li>
                </a>
                
                <a class="all_regulations_link" id="all_regulations_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_regulations_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><li style="list-style:none;">View Regulations</li>
                </a>
                <br>

            <!-- 2. only amendments -->
            @elseif($amendedcount > 0)
                <a class="all_amendments_link" id="all_amendments_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_amended_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><li style="list-style:none;">View Amendents</li>
                </a>
                <br>

            <!-- 3. only regulations -->
            @elseif($regulationcount > 0)
                <a class="all_regulations_link" id="all_regulations_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_regulations_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><li style="list-style:none;">View Regulations</li>
                </a>
                <br>
                
            @else
                <!--None-->
                  <p style="text-decoration: none;">None</p>
                  <br>
          @endif
          
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
    
          <label style="color: black;">View Options</label>
          <a class="expanded_link" id="expanded_link_toggle_all_pre1992_preview_1" href="/post_1992_legislation/1/{{$allPost1992Act['post_group']}}/{{$allPost1992Act['title']}}/expanded-view/{{ $allPost1992Act['id'] }}"><li style="list-style:none;">Expanded View</li>
          </a>
          <a href="/post_1992_legislation/1/{{$allPost1992Act['post_group']}}/{{$allPost1992Act['title']}}/plain-view/{{ $allPost1992Act['id'] }}"><li style="list-style:none;">Plain View</li></a>
        </div>
        </center>
    </div>
    @include('extenders.case_law_main_search')
</div>

{{-- ADVERTISEMENT --}}
<div class="col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading">
        <p class="panel-title"><small>Advertisement</small></p>
      </div>
      <div class="panel-body">
          <div class="embed-responsive embed-responsive-4by3">
          {{--<iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>--}}         
          </div>        
      </div>
    </div>
</div>
 

    

