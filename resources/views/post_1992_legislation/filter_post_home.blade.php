	<div class="col-md-3" style="padding-top: 5.5em;"> 
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <center><p class="panel-title"><small>Filter</small></p></center>
		  </div>
		  
		   <div class="panel-body">  
					<center>
					<select class="form-control browser-default custom-select all_post_1992_legislation_filter_category" style="width: 149px;">
						<option selected value="">Select Category</option>
						@foreach($allPost1992ategories as $allPost1992ategory)
						{{-- <option value="{{ $allPost1992ategory->name }}">{{ $allPost1992ategory->name }}</option> --}}
						@endforeach
					</select>
					</center>
					<hr>
					{{-- @include('extenders.case_law_main_search') --}}
					{{-- <input class="btn btn-primary btn-xs" type="button" name="go" value="Search" id="all_post_1992_legislation_filter"> --}}
					<form action="{{ url('post_index_search') }}" method="GET">
						{{ csrf_field() }}
							<input style="padding: 15px;" class="form-control" name="search_text" type="text" placeholder="Search word in Acts" aria-label="Search">
					</form>
					<p class="tooltips hidden" title="This is my span's tooltip message!">come</p>

			</div>
		</div>
	</div>
	
	
	

	

