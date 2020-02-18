	<div class="col-md-3" style="padding-top: 5.5em;">
		<div class="panel panel-default">
			<div class="panel-heading">
			<center><p class="panel-title"><small>Filter</small></p></center>
			</div>
		
			<div class="panel-body">
			{{--
				<label>By Year:</label>
				<input class="form-control all_judgment_filter_year" id="myInput" type="text" aria-label="Search" placeholder="eg. 2015...">
				<br>
			--}}
			<center>
				<select class="form-control browser-default custom-select all_judgment_filter_category" style="width: 149px;">
					<option selected value="">Select Category</option>
					@foreach($ghcategories as $ghcategory)
					{{-- <option value="{{ $ghcategory->name }}">{{ $ghcategory->name }}</option> --}}
					@endforeach	
				</select>
			</center>
				<hr>
				<form action="{{ url('cases_index_search') }}" method="GET">
					{{ csrf_field() }}
						<input style="padding: 15px;" class="form-control" name="search_text" type="text" placeholder="Search word in Cases" aria-label="Search">
				</form>
				{{-- @include('extenders.case_law_main_search') --}}
				{{--<input class="btn btn-primary btn-xs" type="button" name="go" value="Search" id="all_ghana_judgment_filter">--}}
			</div>
		</div>
	</div>

	

	

