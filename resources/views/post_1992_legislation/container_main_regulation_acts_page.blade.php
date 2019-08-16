
{{-- CONTAINER PLAIN --}}

{{-- DOWNLOADS --}}
<div class="col-md-2"> 
    <div class="panel panel-default">
      <div class="panel-heading"  style="background: #eeeeee;">
        <p class="panel-title" style="color: black;"><small>Filters</small></p>
      </div>
      
      <div class="panel-body">
          <label style="color: black;">Amendments</label><br>
          
            <!-- Amendments on regulations -->          
             @if($amendedregulationcount > 0)
             
                <a class="all_amendments_link" id="all_amendments_link_toggle" href="/post_1992_legislation/{{$regulationAct['act_category']}}/all_amended_regulation_acts/{{$regulationAct['title']}}/{{ $regulationAct['id'] }}"><li> View Amendents</li>
                </a>
                <br><br>
                
                @else
                <!--None-->
                  <p style="text-decoration: none;">None</p>
                  <br>
             
             @endif
        
        <label style="color: black;">Downloads (Whole Regulations)</label>
              <!--<a href=""><li>Consolidated Act (PDF)</li></a>-->
              <!--<a href=""><li>Original Act (PDF)</li></a>-->
              <!--<a href=""><li>Draft Bill (PDF)</li></a>-->
              <a href=""><li>pdf icon (PDF)</li></a>
              <a href=""><li>word icon (WORD)</li></a>
              <br>
              
        <label>Print</label>
        <a href=""><li>Whole Regulation</li></a>
        <br>
        
        <label>View Whole Regulation</label>
        <a class="expanded_link" id="expanded_link_toggle_all_pre1992_preview_1" href="/post_1992_legislation/regulation/expanded_view/{{$regulationAct['act_category']}}/{{$regulationAct['title']}}/{{$regulationAct['id']}}"><li>Expanded View</li></a>
        <a href=""><li>Plain View</li></a>
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
    

    

