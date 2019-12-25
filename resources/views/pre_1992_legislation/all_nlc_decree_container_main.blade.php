

	<div class="col-md-3" style="padding-top: 5.5em;"> 
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <center><p class="panel-title"><small>Filter</small></p></center>
		  </div>
		  <div class="panel-body">
		  {{--
		    <label>By Year:</label>
		    <input class="form-control nlc_decree_filter_year" id="myInput" type="text" aria-label="Search" placeholder="eg. 2015...">
		    <br>
			--}}
			<center>
			<select class="form-control browser-default custom-select nlc_decree_filter_category" style="width: 149px;">
                <option selected value="">Select Category</option>
                
				@foreach($nlcCategories as $nlcCategory)
				<option value="{{ $nlcCategory->name }}">{{ $nlcCategory->name }}</option>
                @endforeach
                	
			</select>
			</center>
		    <hr>
			@include('extenders.case_law_main_search')
		    {{--<input class="btn btn-primary btn-xs" type="button" name="go" value="Search" id="nlc_decree_filter">--}}

		  </div>
		</div>
	</div>

	
	

	

