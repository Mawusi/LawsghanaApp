

	<div class="col-md-2"> 
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <p class="panel-title"><small>Filters</small></p>
		  </div>
		  
		  <div class="panel-body">
		    <label>By Year:</label>
		    <input class="form-control europe_constitution_filter_year" id="myInput" type="text" aria-label="Search" placeholder="eg. 2015...">
		    <br><br><br>
			<label>By Countries:</label>
			<select class="form-control browser-default custom-select europe_constitution_filter_country" style="width: 149px;">
				<option selected value="">Select Country</option>
                
				@foreach($europeCountries as $europeCountry)
				<option value="{{ $europeCountry->name }}">{{ $europeCountry->name }}</option>
                @endforeach	
			</select>
		    <br><br>
		    <input class="btn btn-primary btn-xs" type="button" name="go" value="Search" id="europe_constitution_filter">

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
	        <iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>        
	        </div>		  
	      </div>
		</div>
	</div>
	

	

