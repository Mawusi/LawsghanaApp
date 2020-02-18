	<div class="col-md-3" style="padding-top: 5.5em;"> 
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <center><p class="panel-title"><small>Filter</small></p></center>
		  </div>
		  <div class="panel-body">
			  {{--
		    <label>By Year:</label>
		    <input class="form-control south_america_constitution_filter_year" id="myInput" type="text" aria-label="Search" placeholder="eg. 2015...">
			<br>
			--}}
			<center>
			<select class="form-control browser-default custom-select south_america_constitution_filter_country" style="width: 149px;">
				<option selected value="">Select Country</option>
                
				@foreach($south_americaConstitutions as $south_americaCountry)
				<option value="{{ $south_americaCountry->country }}">{{ $south_americaCountry->country }}</option>
                @endforeach	
			</select>
			</center>
			<hr>
			<form action="{{ url('south_america_constitution_index_search') }}" method="GET">
				{{ csrf_field() }}
					<input style="padding: 15px;" class="form-control" name="search_text" type="text" placeholder="Search word in article" aria-label="Search">
			</form>
			{{-- @include('extenders.case_law_main_search') --}}
		    {{--<input class="btn btn-primary btn-xs" type="button" name="go" value="Search" id="south_america_constitution_filter">--}}
		  </div>
		</div>
	</div>

	

	

