<div class="col-md-3" style="padding-top: 3.7em;">
    <div class="panel panel-default">
      <div class="panel-heading" style="background: #eeeeee;">
        <center><p class="panel-title" style="color: black;"><small>Filter</small></p></center>
      </div>

      <center>
        <div class="panel-body">
          
          {{--<label style="color: black;">Related Acts</label><br>--}}
          
          <div class="dropdown hidden">
              <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Related Acts
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
          
          
          
          {{--
          @if($amendedcount > 0 && $regulationcount > 0)
                <a class="all_amendments_link" id="all_amendments_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_amended_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><li style="list-style:none;">View Amendments</li>
                </a>
                
                <a class="all_regulations_link" id="all_regulations_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_regulations_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><li style="list-style:none;">View Regulations</li>
                </a>
                <br>

            @elseif($amendedcount > 0)
                <a class="all_amendments_link" id="all_amendments_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_amended_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><li style="list-style:none;">View Amendments</li>
                </a>
                <br>

            @elseif($regulationcount > 0)
                <a class="all_regulations_link" id="all_regulations_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_regulations_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><li style="list-style:none;">View Regulations</li>
                </a>
                <br>
                
            @else
                  <p style="text-decoration: none;" class="hidden">None</p>
                  <br>
          @endif
          --}}
          
          
          <div class="dropdown no_list">
              <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Related Acts
                <span class="caret"></span>
              </button>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <!-- 1. both are true -->
                  @if($amendedcount > 0 && $regulationcount > 0)
                      <li><a class="all_amendments_link" id="all_amendments_link_toggle"  href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_amended_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><span class="small">Amendments</span></a></li>
                      <li><a class="all_regulations_link" id="all_regulations_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_regulations_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><span class="small">Regulations</span></a></li>
                      
                      <!-- 2. only amendments -->
                      @elseif($amendedcount > 0)
                      <li><a class="all_amendments_link" id="all_amendments_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_amended_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><span class="small">Amendments</span></a></li>

                      <!-- 3. only regulations -->
                      @elseif($regulationcount > 0)
                      <li><a class="all_regulations_link" id="all_regulations_link_toggle" href="/post_1992_legislation/{{$allPost1992Act['post_group']}}/all_regulations_acts/{{$allPost1992Act['title']}}/{{ $allPost1992Act['id'] }}"><span class="small">Regulations</span></a></li>
                  
                      @else
                      <!--None-->
                      @section('scripts')
                        <script>
                        $( ".no_list" ).hide();
                        </script>
                      @endsection
                    
                  @endif
              </ul>
          </div>

          <br>
          

          <div class="dropdown">
              <button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                View Options
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a class="expanded_link" id="expanded_link_toggle_all_pre1992_preview_1" href="/post_1992_legislation/1/{{$allPost1992Act['post_group']}}/{{$allPost1992Act['title']}}/expanded-view/{{ $allPost1992Act['id'] }}"><span class="small">Expanded View</span></a></li>
                <li><a href="/post_1992_legislation/1/{{$allPost1992Act['post_group']}}/{{$allPost1992Act['title']}}/plain_view/{{ $allPost1992Act['id'] }}" target="_blank"><span class="small">Plain View</span></a></li>
              </ul>
          </div>

          <hr>
          @include('extenders.case_law_main_search')

        </div>
        </center>
    </div>
</div>


           
          

 

    

