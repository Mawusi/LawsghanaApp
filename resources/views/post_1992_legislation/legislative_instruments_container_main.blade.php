

	<div class="col-md-2"> 
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Filters</h3>
		  </div>
		  <div class="panel-body">
		    <label>By Year:</label>
		    <input class="form-control legislative_instrument_filter_year" id="myInput" type="text" aria-label="Search" placeholder="eg. 2015...">
		    <hr>
			<label>By Categories:</label>
			<select class="form-control browser-default custom-select legislative_instrument_filter_category" style="width: 154px;">
                <option selected value="">Select Category</option>
                
				@foreach($legislativeInstrumentsCategories as $legislativeInstrumentsCategory)
				<option value="{{ $legislativeInstrumentsCategory->name }}">{{ $legislativeInstrumentsCategory->name }}</option>
                @endforeach
                	
			</select>
		    <hr>
		    <input class="btn btn-primary" type="button" name="go" value="Go" id="legislative_instrument_filter">

		  </div>
		</div>
	</div>

	{{-- Advertisement --}}
	<div class="col-md-3">
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Advertisement</h3>
		  </div>
		  <div class="panel-body">
			<div class="embed-responsive embed-responsive-4by3">
	        <iframe width="420" height="345" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>        
	        </div>		  
	      </div>
		</div>
	</div>
	

	

