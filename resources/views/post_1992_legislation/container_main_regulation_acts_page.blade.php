<div class="col-md-3"  style="padding-top: 3.7em;"> 
    <div class="panel panel-default">
      <div class="panel-heading"  style="background: #eeeeee;">
        <center><p class="panel-title" style="color: black;"><small>Filter</small></p></center>
      </div>
      
      <center>
      <div class="panel-body">

        <div class="dropdown hidden">
          <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Related
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>


      
          {{-- <label style="color: black;">Related Acts</label><br>
          
             @if($amendedregulationcount > 0)
             
                <a class="all_amendments_link" id="all_amendments_link_toggle" href="/post_1992_legislation/{{$regulationAct['act_category']}}/all_amended_regulation_acts/{{$regulationAct['title']}}/{{ $regulationAct['id'] }}"><li style="list-style:none;"> View Amendents</li>
                </a>
                <br>
                
                @else
                <!--None-->
                  <p style="text-decoration: none;">None</p>
                  <br><br>
             
             @endif --}}

            <div class="dropdown no_list">
              <button style="background-color:white; border-color:black;" class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                View Related Acts
                <span class="caret"></span>
              </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  
                    @if($amendedregulationcount > 0)
                        <li><a class="all_amendments_link" id="all_amendments_link_toggle"  href="/post_1992_legislation/{{$regulationAct['act_category']}}/all_amended_regulation_acts/{{$regulationAct['title']}}/{{ $regulationAct['id'] }}"><span class="small"><center>Amendments</center></span></a></li>
                        
                        @else
                        
                        @section('scripts')
                          <script>
                          $( ".no_list" ).hide();
                          </script>
                        @endsection
                      
                    @endif
                </ul>
            </div>

             <br>
        
        {{-- <label>View Options</label>
        <a class="expanded_link" id="expanded_link_toggle_all_pre1992_preview_1" href="/post_1992_legislation/regulation/expanded_view/{{$regulationAct['act_category']}}/{{$regulationAct['title']}}/{{$regulationAct['id']}}"><li style="list-style:none;">Expanded View</li></a>
        <a href=""><li style="list-style:none;">Plain View</li></a> --}}

        <div class="dropdown">
          <button style="background-color:white; border-color:black;" class="btn btn-sm dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            View Options
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><a class="expanded_link" id="expanded_link_toggle_all_pre1992_preview_1" href="/post_1992_legislation/regulation/expanded_view/{{$regulationAct['act_category']}}/{{$regulationAct['title']}}/{{$regulationAct['id']}}"><span class="small"><center>Expanded View</center></span></a></li>
            <li><a href="" target="_blank"><span class="small"><center>Plain View</center></span></a></li>
          </ul>
        </div>

        <hr>
        {{-- @include('extenders.case_law_main_search') --}}
        <form action="" method="GET">
          {{ csrf_field() }}
              <input style="padding: 12px;" class="form-control" name="search_text" type="text" placeholder="Search word in regulation" aria-label="Search">
        </form>

      </div>
    </center>
    </div>
</div>



    

