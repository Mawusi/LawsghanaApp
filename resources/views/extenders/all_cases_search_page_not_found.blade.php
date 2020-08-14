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
  padding: .1px;
  /* margin-top: 20px; */
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
</style>
@endsection

@section('content')

<div class="container-fluid mt-customised">
  <div class="row">
      <div class="col-md-3 mx-auto">
        <div class="sidebar">
          <div class="search-well-filter">
            <span style="color:blue;">Filter Options</span>
            <p class="small" style="color:blue;"><b><span style="color:red;">{{number_format($total_cases)}}</span>&nbsp;Results Found&nbsp;for&nbsp;<span style="color:red;">"{{$query}}"</span></b></p><hr>
            
            <div class="custom-radio mb-2"> 
              <input type="radio" id="all_cases" name="act-type" value="All">&nbsp;All&nbsp;<span class="badge badge-secondary">{{$total_cases}}</span>
            </div>
            
            <div class="custom-radio mb-2">
              <input type="radio" id="supreme_court" name="act-type" value="Constitution_Ghana">&nbsp;Supreme Court&nbsp;<span class="badge badge-secondary">{{$supreme_court_cases_count}}</span>
            </div>

            <div class="custom-radio mb-2">
              <input type="radio" id="court_of_appeal" name="act-type" value="Constitution_Others">&nbsp;Court of Appeal&nbsp;<span class="badge badge-secondary">{{$court_of_appeal_cases_count}}</span>
            </div>

            <div class="custom-radio mb-2">
              <input type="radio" id="high_court" name="act-type" value="Pre_4th_Republic">&nbsp;High Court&nbsp;<span class="badge badge-secondary">{{$high_court_cases_count}}</span>
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
    if ( {{$total_cases}} == 0 ) {
      document.getElementById("all_cases").disabled = true;
      document.getElementById("supreme_court").disabled = true;
      document.getElementById("court_of_appeal").disabled = true;
      document.getElementById("high_court").disabled = true;  
    }
  </script>
@endsection

    