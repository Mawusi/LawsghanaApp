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
      <p style="color:blue;"><b class="hidden">Found: {{$total_pre_laws}} Results</b></p>
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
              <input type="radio" class="custom-control-input all1" id="all_pre_laws" name="act-type">
              <label class="custom-control-label" for="defaultChecked">All</label>&nbsp;<span class="badge">{{$total_pre_laws}}</span>
            </div>
            <br>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input consti_ghana1" id="1st_rep" name="act-type">
              <label class="custom-control-label" for="defaultUnchecked">1st Republic Laws</label>&nbsp;<span class="badge">{{$first_republic_laws_count}}</span>
            </div>
            <br>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input consti_others1" id="2nd_rep" name="act-type">
              <label class="custom-control-label" for="defaultUnchecked">2nd Republic Laws</label>&nbsp;<span class="badge">{{$second_republic_laws_count}}</span>
            </div>
            <br>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input pre_4th1" id="3rd_rep" name="act-type">
              <label class="custom-control-label" for="defaultUnchecked">3rd Republic Laws</label>&nbsp;<span class="badge">{{$third_republic_laws_count}}</span>
            </div>
            <br>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input 4th_rep1" id="nlc_decree" name="act-type">
              <label class="custom-control-label" for="defaultUnchecked">NLCD</label>&nbsp;<span class="badge">{{$nlc_decree_laws_count}}</span>
            </div>
            <br>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input cases1" id="nrc_decree" name="act-type">
              <label class="custom-control-label" for="defaultUnchecked">NRCD</label>&nbsp;<span class="badge">{{$nrc_decree_laws_count}}</span>
            </div>
            <br>
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input cases1" id="smc_decree" name="act-type">
                <label class="custom-control-label" for="defaultUnchecked">SMCD</label>&nbsp;<span class="badge">{{$smc_decree_laws_count}}</span>
            </div>
            <br>
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input cases1" id="afrc_decree" name="act-type">
                <label class="custom-control-label" for="defaultUnchecked">AFRCD</label>&nbsp;<span class="badge">{{$afrc_decree_laws_count}}</span>
            </div>
            <br>
              <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input cases1" id="pndc_laws" name="act-type">
                <label class="custom-control-label" for="defaultUnchecked">PNDC</label>&nbsp;<span class="badge">{{$pndc_laws_count}}</span>
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
  if ( {{$total_pre_laws}} == 0 ) {
    document.getElementById("all_pre_laws").disabled = true;
    document.getElementById("1st_rep").disabled = true;
    document.getElementById("2nd_rep").disabled = true;
    document.getElementById("3rd_rep").disabled = true;
    document.getElementById("nlc_decree").disabled = true;
    document.getElementById("nrc_decree").disabled = true;   
    document.getElementById("smc_decree").disabled = true;   
    document.getElementById("afrc_decree").disabled = true;   
    document.getElementById("south_america").disabled = true;   
  }
  
</script>


@endsection

    