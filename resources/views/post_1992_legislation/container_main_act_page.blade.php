<div class="col-md-3">
    <div class="panel panel-default">
      <div class="panel-heading" style="background: #eeeeee;">
        <p class="panel-title" style="color: black;"><small>Filters</small></p>
      </div>

      <center>
        <div class="panel-body">
          
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
          
          
          
          <label style="color: black;">View Options</label>
          <a class="expanded_link" id="expanded_link_toggle_all_pre1992_preview_1" href="/post_1992_legislation/1/{{$allPost1992Act['post_group']}}/{{$allPost1992Act['title']}}/expanded-view/{{ $allPost1992Act['id'] }}">
            <li style="list-style:none;">Expanded View</li>
          </a>
          <a href="/post_1992_legislation/1/{{$allPost1992Act['post_group']}}/{{$allPost1992Act['title']}}/plain_view/{{ $allPost1992Act['id'] }}" target="_blank"><li style="list-style:none;">Plain View</li></a>
          
          <hr>
          @include('extenders.case_law_main_search')

        </div>
        </center>
    </div>
</div>


           
          

 

    

