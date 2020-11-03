{{-- @extends('extenders.main') --}}
@extends('layouts.app_search_only')

@section('title', 'Search Results')

@section('assets')
<style type="text/css">
        .header {
          background: #888888;
          color: #f1f1f1;
          text-align: center;
          position: -webkit-sticky;
          position: sticky;
          top: 0;
        }
        ::-webkit-scrollbar {
        width: 7px;
        }
        div::-webkit-scrollbar-button {
          display: block;
          width: 17px;
          height: 17px;
        }
        div::-webkit-scrollbar-button:decrement:start {
          background-color:lightblue;
          border:1px solid #eee;
        }
        div::-webkit-scrollbar-button:increment:start {
          background-color:lightblue;
          border:1px solid #eee;
        }
        div::-webkit-scrollbar-button:decrement:end {
          background-color:lightblue;
          border:1px solid #eee;
        }
        div::-webkit-scrollbar-button:increment:end {
          background-color:lightblue;
          border:1px solid #eee;;
        }
        ::-webkit-scrollbar-thumb {
        background: #888; 
        }

        ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
        border-radius: 10px;
        } 
        ::-webkit-scrollbar-thumb:hover {
        background: #555; 
        }
        .content {
          padding: 16px;
        }
        .search-well-filter{
          background-color: #ffffff;
          border: 1px solid #e2e2e2;
          border-radius: 6px;
          box-shadow: 0 1px 5px #e0e0e0;
          padding: 25px 25px;
          font-size: 16px;
        }.search-well{
          background-color: #ffffff;
          border: 1px solid #e2e2e2;
          border-radius: 6px;
          box-shadow: 0 1px 5px #e0e0e0;
          padding: 25px 25px;
        }
        .wrapper {
  display: flex;
  justify-content: space-between;
}.main,
.sidebar {
  border: 5px solid $color-dark;
  background-color: $color-background;
  border-radius: 2px;
  color: $color-dark;
  padding: .1px; */
  /* margin-top: 20px;
}.main {
  width: 80%;
  /* height: 200vh; */
  /* min-height: 1000px; */
  display: flex;
  flex-direction: column;
}.sidebar {
  /* width: 25%; */
  /* height: 50vh; */
  /* min-height: 200px; */
  overflow: auto;
  position: -webkit-sticky;
  position: sticky;
  top: 15%;
}.make_stick{
  position: -webkit-sticky;
  position: sticky;
  top: 10%;
}
.back-to-top {
  position: sticky;
  bottom: 80px;
  left: 1295px;
}
</style>
@endsection

@section('content')

<div class="container-fluid mt-customised">
  <div class="row">
      <div class="col-md-3 mx-auto">
        <div class="sidebar">
          <div class="search-well-filter">
            <h5 style="color:blue;">Country Constitution Search</h5><hr>
            <span style="color:blue;">Filter Options</span>
            <p class="small" style="color:blue;"><b><span style="color:red;">{{number_format($total_constitution_countries)}}</span>&nbsp;Results Found&nbsp;for&nbsp;<span style="color:red;">"{{$query}}"</span></b></p><hr>
            
              <div class="custom-radio mb-2"> 
                <input type="radio" class="all1" id="all_constitions" name="act-type" value="All" checked>&nbsp;All&nbsp;<span class="badge badge-secondary">{{$total_constitution_countries}}</span>
              </div>
              
              <div class="custom-radio mb-2">
                <input type="radio" class="africa1" id="africa" name="act-type" value="Africa">&nbsp;Africa&nbsp;<span class="badge badge-secondary">{{$africa_countries_constitution_count}}</span>
              </div>

              <div class="custom-radio mb-2">
                <input type="radio" class="asia1" id="asia" name="act-type" value="Asia">&nbsp;Asia&nbsp;<span class="badge badge-secondary">{{$asia_countries_constitution_count}}</span>
              </div>

              <div class="custom-radio mb-2">
                <input type="radio" class="europe1" id="europe" name="act-type" value="Europe">&nbsp;Europe&nbsp;<span class="badge badge-secondary">{{$europe_countries_constitution_count}}</span>
              </div>

              <div class="custom-radio mb-2">
                <input type="radio" class="north_america1" id="north_america" name="act-type" value="North_America">&nbsp;North America&nbsp;<span class="badge badge-secondary">{{$north_america_countries_constitutions_count}}</span>
              </div>

              <div class="custom-radio mb-2">
                <input type="radio" class="south_america1" id="south_america" name="act-type" value="South_America">&nbsp;South America&nbsp;<span class="badge badge-secondary">{{$south_america_countries_constitutions_count}}</span>
              </div>

            </div>
        </div>
      </div>

      <div class="col-md-9">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-6" style="background-color: white; padding: 10px; margin-top: 80px; border: 1px solid; box-shadow: 5px 5px 5px grey">
            <center><h4>Results for <span style="color:red;">"{{$query}}"</span> not found</h4></center>    
            <center><h6>please try again with related words</h6></center>    
            <div class="col-md-5"></div>                                 
          </div>
        </div>
      </div>
  </div>
</div>
    
@endsection 

@section('scripts')

<script>
  if ( {{$total_constitution_countries}} == 0 ) {
    document.getElementById("all_constitions").disabled = true;
    document.getElementById("africa").disabled = true;
    document.getElementById("asia").disabled = true;
    document.getElementById("europe").disabled = true;  
    document.getElementById("north_america").disabled = true;   
    document.getElementById("south_america").disabled = true;    
  }
</script>

@endsection

    