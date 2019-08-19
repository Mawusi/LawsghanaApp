
{{-- DOWNLOADS AND PRINT OPTIONS --}}
<div class="col-md-2"> 
    <div class="panel panel-default">
      <div class="panel-heading">
        <center><p class="panel-title"><small>Views and Downloads</small></p></center>
      </div>
      <div class="panel-body">

        {{-- View all sections --}}
        <center>
        <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <small>{{ $africaJudgement['country_name'] }} Case Laws</small> <span class="caret"></span>
              </button>
              <ul class="dropdown-menu scroll-view-judgement" style="width: 520px;">
                @foreach($africaJudgements as $africaJudgement) 
                <li><a class="view_all_section_link" href="/judgement/Case-view/{{ $africaJudgement->country_name }}/{{ $africaJudgement->id}}">{{$africaJudgement->case_title }}</></li>
                @endforeach
              </ul>
        </div>
        </center>
        <br>

        {{-- Downloads --}}
          <center>
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
          </center> 
        
        
        <label>View</label>
            <a href=""><li>Plain View</li></a>

    </div>
  </div>
  @include('extenders.case_law_main_search')
</div>

{{-- Advertisement --}}
	<div class="col-md-3">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <p class="panel-title"><small>Advertisement</small></p>
		  </div>
		  <div class="panel-body">
			<div class="embed-responsive embed-responsive-4by3">
	        <iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>        
	        </div>		  
	      </div>
		</div>
</div>

