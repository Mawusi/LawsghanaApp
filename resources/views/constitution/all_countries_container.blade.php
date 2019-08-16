
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
                <small>Constitution by Country</small> <span class="caret"></span>
              </button>
              <ul class="dropdown-menu scroll-view-judgement" style="width: 190px;">
                  
                    @foreach($allCountriesConstitutions as $allCountriesConstitution)
                        <li>
                            <a class="alt_section_link"  style="text-align: center;" href="/constitution/{{$allCountriesConstitution->country}}/{{$allCountriesConstitution->id}}">{{$allCountriesConstitution->country }}
                            </a>
                        </li>
                    @endforeach
              </ul>
        </div>
        </center>
        <br><br>

        {{-- Downloads --}}
        <label>Downloads</label>
            <!--<a href=""><li style="list-style: none;">Current Section(PDF)</li></a>-->
            <!--<a href=""><li style="list-style: none;">Whole Act (PDF)</li></a> -->
            <a href=""><li>pfd icon (PDF)</li></a>
            <a href=""><li>word icon (WORD)</li></a>
        <br><br>

        {{-- Print Options --}}
        <label>Print</label>
            <a href=""><li>Constitution</li></a>
        <br><br>
        
        <label>View</label>
            <a href=""><li>Plain View</li></a>
        
    </div>
  </div>
</div>

{{-- Advertisement --}}
	<div class="col-md-3">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <p class="panel-title"><small>Advertisement</small></p>
		  </div>
		  <div class="panel-body">
			<div class="embed-responsive embed-responsive-4by3">
	        <!--<iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>        -->
	        </div>		  
	      </div>
		</div>
	</div>

