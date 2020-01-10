@extends('extenders.main')

@section('title', 'Search Results')


@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-md-offset-3 col-md-6" style="margin-top:300px;">
        <p style="color:blue;"><b>Results: Found in {{$total_count}} Acts</b></p>
        </div>
      
    </div>

    <div class="row">
        <div class="col-md-offset-3 col-md-6" style="margin-top:10px;">
          <form action="{{ url('home_index_search') }}" method="GET">
            {{ csrf_field() }}
            <div class="input-group">         
                  <input type="text" class="form-control" name="search" placeholder="Search any law or case in Ghana"">
                  <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                  </span>
            </div>
          </form>       
        </div>
    </div>

    
</div>
@endsection  