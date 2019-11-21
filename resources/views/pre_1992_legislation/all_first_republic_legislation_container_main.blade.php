<div class="col-md-3">	    
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <p class="panel-title"><small>Filters</small></p>
		  </div>
		  
		  <div class="panel-body">
		  {{--
		    <label>By Year:</label>
		    <input class="form-control first_republic_filter_year" id="myInput" type="text" aria-label="Search" placeholder="eg. 2015...">
		    <br>
			--}}
			<label>By Category</label>
			<select class="form-control browser-default custom-select first_republic_filter_category" style="width: 149px;">
                <option selected value="">Select Category</option>
				@foreach($firstRepublicCategories as $firstRepublicCategory)
				<option value="{{ $firstRepublicCategory->name }}">{{ $firstRepublicCategory->name }}</option>
                @endforeach	
			</select>
		    <hr>
			@include('extenders.case_law_main_search')
		    {{--<input class="btn btn-primary btn-xs" type="button" name="go" value="Search" id="first_republic_legislation_filter">--}}

		  </div>
		</div>
	</div>
	

	

