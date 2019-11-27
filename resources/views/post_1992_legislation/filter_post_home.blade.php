	<div class="col-md-3" style="padding-top: 5.5em;"> 
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <center><p class="panel-title"><small>Filter</small></p></center>
		  </div>
		  
		   <div class="panel-body">
			   		{{--
					<label>By Year:</label>
					<input class="form-control all_post_1992_legislation_filter_year" id="myInput" type="text" aria-label="Search" placeholder="eg. 2015...">
					<br>

					<center>
					<div class="dropdown">
						<button class="btn btn-sm btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							Select Category
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					  </div>
					</center>
					--}}
					  
					<center>
					<select class="form-control browser-default custom-select all_post_1992_legislation_filter_category" style="width: 149px;">
						<option selected value="">Select Category</option>
						@foreach($allPost1992ategories as $allPost1992ategory)
						<option value="{{ $allPost1992ategory->name }}">{{ $allPost1992ategory->name }}</option>
						@endforeach
					</select>
					</center>
					<hr>
					@include('extenders.case_law_main_search')
					{{-- <input class="btn btn-primary btn-xs" type="button" name="go" value="Search" id="all_post_1992_legislation_filter"> --}}
			</div>
		</div>
	</div>
	
	
	

	

