
{{-- CONTAINER PLAIN --}}

{{-- DOWNLOADS --}}
<div class="col-md-3" style="padding-top: 3.7em;"> 
    <div class="panel panel-default">
      <div class="panel-heading" style="background: #eeeeee;">
        <center><p class="panel-title" style="color: black;"><small>Filter</small></p></center>
      </div>

      <center>
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

        <label style="color: black;">View Options</label>
        <a class="expanded_link" id="expanded_link_toggle_all_pre1992_preview_1" href="/post_1992_legislation/amended_regulation_acts/expanded_view/{{$amendedRegulationAct['act_category']}}/{{$amendedRegulationAct['title']}}/{{$amendedRegulationAct['id']}}"><li style="list-style:none;">Expanded View</li></a>
        <a href=""><li style="list-style:none;">Plain View</li></a>
        <hr>
        @include('extenders.case_law_main_search')
      </div>
      </center> 
    </div>
</div>


    

    

