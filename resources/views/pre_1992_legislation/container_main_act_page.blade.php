
{{-- CONTAINER PLAIN --}}

{{-- DOWNLOADS --}}
<div class="col-md-2"> 
    <div class="panel panel-default">
      <div class="panel-heading" style="background: #eeeeee;">
        <p class="panel-title" style="color: black;"><small>Filters</small></p>
      </div>
      
      <div class="panel-body">
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
        <center>
        <label style="color: black;">View Options</label>
        <a class="expanded_link" id="expanded_link_toggle_all_pre1992_preview_1" href="/pre_1992_legislation/1/{{$allPre1992Act['pre_1992_group']}}/{{$allPre1992Act['title']}}/expanded-view/{{ $allPre1992Act['id'] }}"><li style="list-style:none;">Expanded View</li></a>
        <a href="/pre_1992_legislation/1/{{$allPre1992Act['pre_1992_group']}}/{{$allPre1992Act['title']}}/plain_view/{{ $allPre1992Act['id'] }}" target="_blank"<li style="list-style:none;">Plain View</li></a>
        </center> 
      </div>
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
    

    

