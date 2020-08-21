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
            <span style="color:blue;">Filter Options</span>
            <p class="small" style="color:blue;"><b><span style="color:red;">{{number_format($all_total_count)}}</span>&nbsp;Results Found&nbsp;for&nbsp;<span style="color:red;">"{{$query}}"</span></b></p><hr>
            
              <div class="custom-radio mb-2"> 
                <input type="radio" class="all1" id="all_laws" name="act-type" value="All" checked>&nbsp;All&nbsp;<span class="badge badge-secondary">{{$all_total_count}}</span>
              </div>
              
              <div class="custom-radio mb-2">
                <input type="radio" class="consti_ghana1" id="consti_ghana" name="act-type" value="Constitution_Ghana">&nbsp;Constitution(Ghana)&nbsp;<span class="badge badge-secondary">{{$total_constitution_articles_count}}</span>
              </div>

              <div class="custom-radio mb-2">
                <input type="radio" class="consti_others1" id="consti_others" name="act-type" value="Constitution_Others">&nbsp;Constitution(Countries)&nbsp;<span class="badge badge-secondary">{{$total_constitution_countries}}</span>
              </div>

              <div class="custom-radio mb-2">
                <input type="radio" class="pre_4th1" id="pre_4th" name="act-type" value="Pre_4th_Republic">&nbsp;Pre 4th Republic Laws&nbsp;<span class="badge badge-secondary">{{$pre_total_count}}</span>
              </div>

              <div class="custom-radio mb-2">
                <input type="radio" class="4th_rep1" id="4th_rep" name="act-type" value="4th_Republic">&nbsp;4th Republic Laws&nbsp;<span class="badge badge-secondary">{{$posts_total_count}}</span>
              </div>

              <div class="custom-radio mb-2">
                <input type="radio" class="cases1" id="case_laws" name="act-type" value="Case_Laws">&nbsp;Case Laws&nbsp;<span class="badge badge-secondary">{{$cases_total_count}}</span>
              </div>

            </div>
        </div>
      </div>

      <div class="col-md-9">
          <div class="move_here hidden"><br></div>
          @include('extenders.main_query_on_4th_Rep_Laws')
          @include('extenders.main_query_on_pre_4th_Rep_Laws')
          @include('extenders.main_query_case_Laws_revised')  
          @include('extenders.main_query_country_constitution')  
          @include('extenders.main_query_ghana_constitution')                                          
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

<script>
    $(function () {
      $("input[name=act-type]:radio").click(function () {
        
          if ($('input[name=act-type]:checked').val() == "All") {
            $('.all1').click(function() {
            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });
            $('.only_constitution_ghana').fadeIn();
            $('.only_pre_4th_republic').fadeIn();
            $('.only_4th_republic').fadeIn();
            $('.only_cases').fadeIn();
            $('.only_country_constitution').fadeIn();
            $('.all_specific').fadeIn();
            }

            else if ($('input[name=act-type]:checked').val() == "Constitution_Ghana") {
            $('.consti_ghana1').click(function() {
            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });
            $('.only_constitution_ghana').fadeIn().insertAfter(".move_here");
            $('.only_pre_4th_republic').fadeOut();
            $('.only_cases').fadeOut();
            $('.only_4th_republic').fadeOut();
            $('.only_country_constitution').fadeOut();
            }
            
            else if ($('input[name=act-type]:checked').val() == "Constitution_Others") {
            $('.consti_others1').click(function() {
            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });
            $('.only_country_constitution').fadeIn().insertAfter(".move_here");
            $('.only_pre_4th_republic').fadeOut();
            $('.only_cases').fadeOut();
            $('.only_4th_republic').fadeOut();
            $('.only_constitution_ghana').fadeOut();
            }
          
            else if ($('input[name=act-type]:checked').val() == "Pre_4th_Republic") {
            $('.pre_4th1').click(function() {
            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });
            $('.only_pre_4th_republic').fadeIn().insertAfter( ".move_here" );
            $('.all_specific').fadeIn();
            $('.only_cases').fadeOut();
            $('.only_constitution_ghana').fadeOut();
            $('.only_4th_republic').fadeOut();
            $('.only_country_constitution').fadeOut();
            }
            
            else if ($('input[name=act-type]:checked').val() == "4th_Republic") {
            $('.4th_rep1').click(function() {
            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });
            $('.only_4th_republic').fadeIn().insertAfter( ".move_here" );
            $('.all_specific').fadeIn();
            $('.only_cases').fadeOut();
            $('.only_constitution_ghana').fadeOut();
            $('.only_pre_4th_republic').fadeOut();
            $('.only_country_constitution').fadeOut();
            }
            
            else if ($('input[name=act-type]:checked').val() == "Case_Laws") {
            $('.cases1').click(function() {
            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });
            $('.only_cases').fadeIn().insertAfter( ".move_here" );
            $('.all_specific').fadeIn();
            $('.only_constitution_ghana').fadeOut();
            $('.only_pre_4th_republic').fadeOut();
            $('.only_4th_republic').fadeOut();
            $('.only_country_constitution').fadeOut();

          }
      });
    });
</script>
@endsection

    