
{{-- CONTAINER PLAIN --}}

{{-- DOWNLOADS --}}
<!--<div class="col-md-2 col-md-offset-1"> -->
<div class="col-md-2">
    <div class="panel panel-default">
      <div class="panel-heading" style="background: #eeeeee;">
        <p class="panel-title" style="color: black;"><small>Filters</small></p>
      </div>

        <div class="panel-body">
          <label style="color: black;">Amendments & Regulations</label><br>   
          
          <!-- 1. both are true -->
          @if($amendedcount > 0 && $regulationcount > 0)
                <a class="all_amendments_link" id="all_amendments_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_amended_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><li>View Amendments</li>
                </a>
                
                <a class="all_regulations_link" id="all_regulations_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_regulations_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><li>View Regulations</li>
                </a>
                <br><br>

            <!-- 2. only amendments -->
            @elseif($amendedcount > 0)
                <a class="all_amendments_link" id="all_amendments_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_amended_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><li>View Amendents</li>
                </a>
                <br><br>

            <!-- 3. only regulations -->
            @elseif($regulationcount > 0)
                <a class="all_regulations_link" id="all_regulations_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_regulations_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><li>View Regulations</li>
                </a>
                <br><br>
                
            @else
                <!--None-->
                  <p style="text-decoration: none;">None</p>
                  <br><br>
          @endif
          
          <label style="color: black;">Downloads (Whole Act)</label>
              <!--<a href=""><li>Consolidated Act (PDF)</li></a>-->
              <!--<a href=""><li>Original Act (PDF)</li></a>-->
              <!--<a href=""><li>Draft Bill (PDF)</li></a>-->
              <a href=""><li>pdf icon (PDF)</li></a>
              <a href=""><li>word icon (WORD)</li></a>
              <br><br>
              
          <label>Print</label>
          <a href=""><li>Whole Act</li></a>
          <br><br>
              
          <label>View Whole Act</label>
          <a class="expanded_link" id="expanded_link_toggle_all_pre1992_preview_1" href="/post_1992_legislation/1/{{$allPost1992Act['post_group']}}/{{$allPost1992Act['title']}}/expanded-view/{{ $allPost1992Act['id'] }}"><li>Expanded View</li>
          </a>
          <a href="/post_1992_legislation/1/{{$allPost1992Act['post_group']}}/{{$allPost1992Act['title']}}/plain-view/{{ $allPost1992Act['id'] }}"><li>Plain View</li></a>
          
          <br>
          
        </div>

    </div>

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
 

    

