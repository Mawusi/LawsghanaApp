

	<div class="col-md-3"> 
		<div class="row">
	        <div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<p class="panel-title"><small>Filters</small></p>
					</div>
					<div class="panel-body">
						{{--
						<label>By Year:</label>
						<input class="form-control supreme_court_filter_year" id="myInput" type="text" aria-label="Search" placeholder="eg. 2015...">
						<br>
						--}}
						<label>By Category</label>
						<select class="form-control browser-default custom-select supreme_court_filter_category" style="width: 149px;">
							<option selected value="">Select Category</option>
							@foreach($supremecategories as $supremecategory)
							<option value="{{ $supremecategory->name }}">{{ $supremecategory->name }}</option>
							@endforeach
							
						</select>

						<hr>
						@include('extenders.case_law_main_search')
						{{--<input class="btn btn-primary btn-xs" type="button" name="go" value="Search" id="supreme_court_filter">--}}
					</div>
				</div>
	        </div>	
		</div>
	</div>

	
	

	

