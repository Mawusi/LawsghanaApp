@extends('extenders.main')

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

<div class="container-fluid">

  <div class="row">
      <div class="col-md-3" style="margin-top:10px;">
        {{-- <h4>Filter</h4> --}}
      </div>
      
      <div class="col-md-offset-1 col-md-6" style="margin-top:10px; margin-bottom: 10px;">
        <form action="{{ url('main_home_search') }}" method="GET">
          {{ csrf_field() }}
          <div class="input-group">         
                <input type="text" class="form-control" name="search_text" placeholder="Search any law or case in Ghana"">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </span>
          </div>
        </form>       
      </div>
      <div class="col-md-2" style="margin-top:25px;">
      <p style="color:blue;"><b class="hidden">Found: {{$all_total_count}} Results</b></p>
      </div>
    
  </div>

  <div class="row">
    {{-- <div class="wrapper"> --}}

      <div class="col-md-3">
        <div class="sidebar">
          <div class="search-well-filter">
            {{-- <p class="small" style="color:blue;"><b><span style="color:red;">{{number_format($all_total_count)}}</span>&nbsp;Results Found&nbsp;for&nbsp;<span style="color:red;">"{{$query}}"</span></b></p><hr> --}}
            <p style="color:blue;">Filter Options</p>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input all1" id="all_laws" name="act-type" value="All" checked>
              <label class="custom-control-label" for="defaultChecked">All</label>&nbsp;<span class="badge">{{$all_total_count}}</span>
            </div>
            <br>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input consti_ghana1" id="consti_ghana" name="act-type" value="Constitution_Ghana">
              <label class="custom-control-label" for="defaultUnchecked">Constitution(Ghana)</label>&nbsp;<span class="badge">{{$total_constitution_articles_count}}</span>
            </div>
            <br>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input consti_others1" id="consti_others" name="act-type" value="Constitution_Others">
              <label class="custom-control-label" for="defaultUnchecked">Constitution(Countries)</label>&nbsp;<span class="badge">{{$total_constitution_countries}}</span>
            </div>
            <br>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input pre_4th1" id="pre_4th" name="act-type" value="Pre_4th_Republic">
              <label class="custom-control-label" for="defaultUnchecked">Pre 4th Republic Laws</label>&nbsp;<span class="badge">{{$pre_total_count}}</span>
            </div>
            <br>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input 4th_rep1" id="4th_rep" name="act-type" value="4th_Republic">
              <label class="custom-control-label" for="defaultUnchecked">4th Republic Laws</label>&nbsp;<span class="badge">{{$posts_total_count}}</span>
            </div>
            <br>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input cases1" id="case_laws" name="act-type" value="Case_Laws">
              <label class="custom-control-label" for="defaultUnchecked">Case Laws</label>&nbsp;<span class="badge">{{$cases_total_count}}</span>
            </div>
            <br>

          </div>
        </div>
      </div>

      <div class="col-md-9">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-6" style="background-color: white; padding: 10px; margin-top: 150px; border: 1px solid; box-shadow: 5px 5px 5px grey">
            <center><h4>Results for <span style="color:red;">"{{$query}}"</span> not found</h4></center>    
          <div class="col-md-4"></div>                                 
          </div>
        </div>
        
      </div>

    </div>
  </div>

</div>
    
@endsection 

@section('scripts')
<script>
  if ( {{$all_total_count}} == 0 ) {
    document.getElementById("all_laws").disabled = true;
    document.getElementById("consti_ghana").disabled = true;
    document.getElementById("consti_others").disabled = true;
    document.getElementById("pre_4th").disabled = true;
    document.getElementById("4th_rep").disabled = true;
    document.getElementById("case_laws").disabled = true;   
  }
  
  if ( {{$posts_total_count}} == 0 ) {
    document.getElementById("4th_rep").disabled = true;   
  }
  if ( {{$cases_total_count}} == 0 ) {
    document.getElementById("case_laws").disabled = true;   
  }
  if ( {{$pre_total_count}} == 0 ) {
    document.getElementById("pre_4th").disabled = true;   
  }
  if ( {{$total_constitution_countries}} == 0 ) {
    document.getElementById("consti_others").disabled = true;   
  }
  if ( {{$total_constitution_articles_count}} == 0 ) {
    document.getElementById("consti_ghana").disabled = true;   
  }
</script>


@endsection

    