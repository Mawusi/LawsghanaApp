	<div class="col-md-3"> 
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <p class="panel-title"><small>Filters</small></p>
		  </div>
		  
		  <div class="panel-body">
		  {{--
		    <label>By Year:</label>
		    <input class="form-control all_judgment_filter_year" id="myInput" type="text" aria-label="Search" placeholder="eg. 2015...">
		    <br>
		    --}}
			<label>By Country</label>
			<select class="form-control browser-default custom-select all_judgment_filter_country" style="width: 149px;">
				<option selected value="">Select Country</option>
				@foreach($foreigncountries as $foreigncountry)
				<option value="{{ $foreigncountry->name }}">{{ $foreigncountry->name }}</option>
                @endforeach	
			</select>
		    <hr>
			@include('extenders.case_law_main_search')
		    {{--<input class="btn btn-primary btn-xs" type="button" name="go" value="Search" id="all_foreign_judgment_filter">--}}
		    <br>
		  </div>
		</div>
	</div>

	

	

