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
}#title{
color: green;
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
      <p style="color:blue;"><b class="hidden">Found:Results</b></p>
      </div>
    
  </div>

  <div class="row">
    {{-- <div class="wrapper"> --}}

      <div class="col-md-3">
        <div class="sidebar">
          <div class="search-well-filter">
            <p class="small" style="color:blue;"><b><span style="color:red;">{{number_format($total_constitution_countries)}}</span></span>&nbsp;Results Found&nbsp;for&nbsp;<span style="color:red;">"{{$query}}"</span></b></p><hr>
            <p style="color:blue;">Filter Options</p>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input all1" id="all_cases" name="act-type" value="All" checked>
            <label class="custom-control-label" for="defaultChecked">All</label>&nbsp;<span class="badge">{{$total_constitution_countries}}</span>
            </div>
            <br>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input africa1" id="africa" name="act-type" value="Africa">
              <label class="custom-control-label" for="defaultUnchecked">Africa</label>&nbsp;<span class="badge">{{$africa_countries_constitution_count}}</span>
            </div>
            <br>

            
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input asia1" id="asia" name="act-type" value="Asia">
            <label class="custom-control-label" for="defaultUnchecked">Asia</label>&nbsp;<span class="badge">{{$asia_countries_constitution_count}}</span>
            </div>
            <br>
            

            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input europe1" id="europe" name="act-type" value="Europe">
            <label class="custom-control-label" for="defaultUnchecked">Europe</label>&nbsp;<span class="badge">{{$europe_countries_constitution_count}}</span>
            </div>
            <br>

            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input north_america1" id="north_america" name="act-type" value="North_America">
              <label class="custom-control-label" for="defaultUnchecked">North America</label>&nbsp;<span class="badge">{{$north_america_countries_constitutions_count}}</span>
              </div>
            <br>

            <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input south_america1" id="south_america" name="act-type" value="South_America">
            <label class="custom-control-label" for="defaultUnchecked">South America</label>&nbsp;<span class="badge">{{$south_america_countries_constitutions_count}}</span>
            </div>
            <br>

          </div>
        </div>
      </div>

      <div class="col-md-9">
        <div class="">
          <div class="move_here hidden  top_here"><br></div>
            @include('extenders.constitution_countries')            
        </div>
      </div>

    </div>
  </div>

</div>
    
@endsection 

@section('scripts')

<script>
if ( {{$total_constitution_countries}} == 0 ) {
    document.getElementById("all_cases").disabled = true;
    document.getElementById("africa").disabled = true;
    document.getElementById("asia").disabled = true;
    document.getElementById("europe").disabled = true;  
    document.getElementById("north_america").disabled = true;   
    document.getElementById("south_america").disabled = true;    
  }
  if ( {{$africa_countries_constitution_count}} == 0 ) {
    document.getElementById("africa").disabled = true;   
  }
  if ( {{$asia_countries_constitution_count}} == 0 ) {
    document.getElementById("asia").disabled = true;   
  }
  if ( {{$europe_countries_constitution_count}} == 0 ) {
    document.getElementById("europe").disabled = true;   
  }
  if ( {{$north_america_countries_constitutions_count}} == 0 ) {
    document.getElementById("north_america").disabled = true;   
  }
  if ( {{$south_america_countries_constitutions_count}} == 0 ) {
    document.getElementById("south_america").disabled = true;   
  }
</script>

<script>
  
    $(function () {
      $("input[name=act-type]:radio").click(function () {
        
          if ($('input[name=act-type]:checked').val() == "All") {
            $('.all1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });
            $('.only_africa').fadeIn();
            $('.only_asia').fadeIn();
            $('.only_europe').fadeIn();
            $('.only_n_america').fadeIn();
            $('.only_s_america').fadeIn();

          } else if ($('input[name=act-type]:checked').val() == "Africa") {
            $('.africa1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });

            $('.only_africa').fadeIn().insertAfter( ".move_here" );
            $('.only_asia').fadeOut();
            $('.only_europe').fadeOut();
            $('.only_n_america').fadeOut();
            $('.only_s_america').fadeOut();
          }
          else if ($('input[name=act-type]:checked').val() == "Asia") {
            $('.asia1').click(function() {

              $('html, body').animate({
                scrollTop: $("body").offset().top
              }, 1000)
            });

              $('.only_asia').fadeIn().insertAfter( ".move_here" );
              $('.only_africa').fadeOut();
              $('.only_europe').fadeOut();
              $('.only_n_america').fadeOut();
              $('.only_s_america').fadeOut();
          }
          else if ($('input[name=act-type]:checked').val() == "Europe") {
            $('.europe1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });

            $('.only_europe').fadeIn().insertAfter( ".move_here" );
            $('.only_africa').fadeOut();
            $('.only_asia').fadeOut();
            $('.only_n_america').fadeOut();
            $('.only_s_america').fadeOut();
          }
          else if ($('input[name=act-type]:checked').val() == "North_America") {
            $('.north_america1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });

            $('.only_n_america').fadeIn().insertAfter( ".move_here" );
            $('.only_europe').fadeOut();
            $('.only_asia').fadeOut();
            $('.only_africa').fadeOut();
            $('.only_s_america').fadeOut();
          }
          else if ($('input[name=act-type]:checked').val() == "South_America") {
            $('.south_america1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });

            $('.only_s_america').fadeIn().insertAfter( ".move_here" );
            $('.only_n_america').fadeOut();
            $('.only_europe').fadeOut();
            $('.only_asia').fadeOut();
            $('.only_africa').fadeOut();
          }
      });
    });
</script>

@endsection

    