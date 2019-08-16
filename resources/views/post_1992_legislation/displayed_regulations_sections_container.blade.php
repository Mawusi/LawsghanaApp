
{{--CONTAINER DETAIL --}}

{{-- DOWNLOADS AND PRINT OPTIONS --}}
<div class="panel panel-default">
          <div class="panel-heading">
            <center><p class="panel-title"><small>Views and Downloads</small></p></center>
          </div>
          
          <div class="panel-body">
    
            {{-- View all sections --}}
            <center>
                <div class="btn-group">
                      <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <small>View All Regulations</small></small> <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu table-wrapper-scroll-view" style="width: 520px;">
                         @foreach($regulationsContents as $title)
                            <li><a href="/post_1992_legislation/regulations_content/{{ $title->id }}" sid="{{$title->id}}" class="single_view_all_regulation_section_link">{{ $title->section }}</a></li>
                        @endforeach 
                      </ul>
                </div>
            </center>
            
            <ul class="pager show">
                <li><a href="#" class="previous_regulation_under_act">Previous</a></li>
                <li><a href="#" class="next_regulation_under_act">Next</a></li>
            </ul>
    
            {{-- Downloads --}}
            <label>Downloads</label>
                <a href=""><li>pdf icon (PDF)</li></a>
            <a href=""><li>word icon (WORD)</li></a>
            <br><br>
    
            <label>Print</label>
                <!--<a href=""><li>Whole Act</li></a>-->
                <a href=""><li>Current Selection</li></a>
            <br>
    
        </div>
</div>

