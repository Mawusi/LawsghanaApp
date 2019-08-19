

	<div class="col-md-2"> 
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <p class="panel-title"><small>Filters</small></p>
		  </div>
		  <div class="panel-body">
		    <label>By Year:</label>
		    <input class="form-control court_of_appeal_filter_year" id="myInput" type="text" aria-label="Search" placeholder="eg. 2015...">
		    <br>

			<label>By Categories:</label>
			<select class="form-control browser-default custom-select court_of_appeal_filter_category" style="width: 149px;">
				<option selected value="">Select Category</option>
				@foreach($courtOfAppealcategories as $courtOfAppealcategory)
				<option value="{{ $courtOfAppealcategory->name }}">{{ $courtOfAppealcategory->name }}</option>
				@endforeach
				
			</select>

		    <br>

		    <input class="btn btn-primary btn-xs" type="button" name="go" value="Search" id="court_of_appeal_filter">
            <br>
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
	

	

