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
          <div class="move_here hidden"><br></div>
          @include('extenders.query_constitution_countries')                                          
      </div>
      <a id="back-to-top" href="#" class="back-to-top">
        <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-up-circle-fill" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-10.646.354a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 6.207V11a.5.5 0 0 1-1 0V6.207L5.354 8.354z"/>
        </svg>
      </a>
  </div>
</div>
    
@endsection 

@section('scripts')

<script>
  $(document).ready(function(){
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
  });
</script>

<script>
  if ( {{$total_constitution_countries}} == 0 ) {
    document.getElementById("all_constitions").disabled = true;
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
        //end of click function
      });
    });
</script>
@endsection

    