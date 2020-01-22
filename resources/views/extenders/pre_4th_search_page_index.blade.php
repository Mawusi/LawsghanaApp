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
            <p class="small" style="color:blue;"><b><span style="color:red;">{{number_format($total_pre_laws)}}</span>&nbsp;Results Found&nbsp;for&nbsp;<span style="color:red;">"{{$query}}"</span></b></p><hr>
            <p style="color:blue;">Filter Options</p>

            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input all1" id="all_laws" name="act-type" value="All" checked>
            <label class="custom-control-label" for="defaultChecked">All</label>&nbsp;<span class="badge">{{$total_pre_laws}}</span>
            </div>
            <br>

            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input 1strep1" id="1st_republic" name="act-type" value="1st_Republic">
              <label class="custom-control-label" for="defaultUnchecked">1st Republic Laws</label>&nbsp;<span class="badge">{{$first_republic_laws_count}}</span>
            </div>
            <br>

            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input 2ndrep1" id="2nd_republic" name="act-type" value="2nd_Republic">
            <label class="custom-control-label" for="defaultUnchecked">2nd Republic Laws</label>&nbsp;<span class="badge">{{$second_republic_laws_count}}</span>
            </div>
            <br>
            
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input 3rdrep1" id="3rd_republic" name="act-type" value="3rd_Republic">
            <label class="custom-control-label" for="defaultUnchecked">3rd Republic Laws</label>&nbsp;<span class="badge">{{$third_republic_laws_count}}</span>
            </div>
            <br>

            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input nlcd1" id="nlcd" name="act-type" value="NLCD">
              <label class="custom-control-label" for="defaultUnchecked">NLC Decree</label>&nbsp;<span class="badge">{{$nlc_decree_laws_count}}</span>
              </div>
            <br>

            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input nrcd1" id="nrcd" name="act-type" value="NRCD">
              <label class="custom-control-label" for="defaultUnchecked">NRC Decree</label>&nbsp;<span class="badge">{{$nrc_decree_laws_count}}</span>
              </div>
            <br>

            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input smcd1" id="smcd" name="act-type" value="SMCD">
              <label class="custom-control-label" for="defaultUnchecked">SMC Decree</label>&nbsp;<span class="badge">{{$smc_decree_laws_count}}</span>
              </div>
            <br>

            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input afrcd1" id="afrcd" name="act-type" value="AFRCD">
              <label class="custom-control-label" for="defaultUnchecked">AFRC Decree</label>&nbsp;<span class="badge">{{$afrc_decree_laws_count}}</span>
              </div>
            <br>

            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input pndc1" id="pndc" name="act-type" value="PNDC">
              <label class="custom-control-label" for="defaultUnchecked">PNDC Law</label>&nbsp;<span class="badge">{{$pndc_laws_count}}</span>
              </div>
            <br>

          </div>
        </div>
      </div>

      <div class="col-md-9">
        <div class="">
          <div class="move_here hidden  top_here"><br></div>
            @include('extenders.pre_4th_laws')            
        </div>
      </div>

    </div>
  </div>

</div>
    
@endsection 

@section('scripts')
<script>
  if ( {{$total_pre_laws}} == 0 ) {
    document.getElementById("all_laws").disabled = true;
    document.getElementById("1st_republic").disabled = true;
    document.getElementById("2nd_republic").disabled = true;
    document.getElementById("3rd_republic").disabled = true;
    document.getElementById("nlcd").disabled = true;
    document.getElementById("nrcd").disabled = true;
    document.getElementById("smcd").disabled = true;
    document.getElementById("afrcd").disabled = true;
    document.getElementById("pndc").disabled = true;
  }
  if ( {{$first_republic_laws_count}} == 0 ) {
    document.getElementById("1st_republic").disabled = true;   
  }
  if ( {{$second_republic_laws_count}} == 0 ) {
    document.getElementById("2nd_republic").disabled = true;   
  }
  if ( {{$third_republic_laws_count}} == 0 ) {
    document.getElementById("3rd_republic").disabled = true;   
  }
  if ( {{$nlc_decree_laws_count}} == 0 ) {
    document.getElementById("nlcd").disabled = true;   
  }
  if ( {{$nrc_decree_laws_count}} == 0 ) {
    document.getElementById("nrcd").disabled = true;   
  }
  if ( {{$smc_decree_laws_count}} == 0 ) {
    document.getElementById("smcd").disabled = true;   
  }
  if ( {{$afrc_decree_laws_count}} == 0 ) {
    document.getElementById("afrcd").disabled = true;   
  }
  if ( {{$pndc_laws_count}} == 0 ) {
    document.getElementById("pndc").disabled = true;   
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
            $('.only_1st_rep').fadeIn();
            $('.only_2nd_rep').fadeIn();
            $('.only_3rd_rep').fadeIn();
            $('.only_nlcd').fadeIn();
            $('.only_nrcd').fadeIn();
            $('.only_smcd').fadeIn();
            $('.only_afrcd').fadeIn();
            $('.only_pndc').fadeIn();
          } else if ($('input[name=act-type]:checked').val() == "1st_Republic") {
            $('.1strep1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });

            $('.only_1st_rep').fadeIn().insertAfter( ".move_here" );
            $('.only_2nd_rep').fadeOut();
            $('.only_3rd_rep').fadeOut();
            $('.only_nlcd').fadeOut();
            $('.only_nrcd').fadeOut();
            $('.only_smcd').fadeOut();
            $('.only_afrcd').fadeOut();
            $('.only_pndc').fadeOut();
          }
          else if ($('input[name=act-type]:checked').val() == "2nd_Republic") {
            // $('.only_regulation').fadeIn().insertAfter( ".move_here" ).scrollTo('.top_here');
            $('.2ndrep1').click(function() {

              $('html, body').animate({
                scrollTop: $("body").offset().top
              }, 1000)
            });

              $('.only_2nd_rep').fadeIn().insertAfter( ".move_here" );
              $('.only_1st_rep').fadeOut();
              $('.only_3rd_rep').fadeOut();
              $('.only_nlcd').fadeOut();
              $('.only_nrcd').fadeOut();
              $('.only_smcd').fadeOut();
              $('.only_afrcd').fadeOut();
              $('.only_pndc').fadeOut();
          }
          else if ($('input[name=act-type]:checked').val() == "3rd_Republic") {
            $('.3rdrep1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });

            $('.only_3rd_rep').fadeIn().insertAfter( ".move_here" );
            $('.only_1st_rep').fadeOut();
            $('.only_2nd_rep').fadeOut();
            $('.only_nlcd').fadeOut();
            $('.only_nrcd').fadeOut();
            $('.only_smcd').fadeOut();
            $('.only_afrcd').fadeOut();
            $('.only_pndc').fadeOut();
          }
          else if ($('input[name=act-type]:checked').val() == "NLCD") {
            $('.nlcd1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });

            $('.only_nlcd').fadeIn().insertAfter( ".move_here" );
            $('.only_1st_rep').fadeOut();
            $('.only_2nd_rep').fadeOut();
            $('.only_3rd_rep').fadeOut();
            $('.only_nrcd').fadeOut();
            $('.only_smcd').fadeOut();
            $('.only_afrcd').fadeOut();
            $('.only_pndc').fadeOut();
          }
          else if ($('input[name=act-type]:checked').val() == "NRCD") {
            $('.nrcd1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });

            $('.only_nrcd').fadeIn().insertAfter( ".move_here" );
            $('.only_1st_rep').fadeOut();
            $('.only_2nd_rep').fadeOut();
            $('.only_3rd_rep').fadeOut();
            $('.only_nlcd').fadeOut();
            $('.only_smcd').fadeOut();
            $('.only_afrcd').fadeOut();
            $('.only_pndc').fadeOut();
          }
          else if ($('input[name=act-type]:checked').val() == "SMCD") {
            $('.smcd1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });

            $('.only_smcd').fadeIn().insertAfter( ".move_here" );
            $('.only_1st_rep').fadeOut();
            $('.only_2nd_rep').fadeOut();
            $('.only_3rd_rep').fadeOut();
            $('.only_nlcd').fadeOut();
            $('.only_nrcd').fadeOut();
            $('.only_afrcd').fadeOut();
            $('.only_pndc').fadeOut();
          }
          else if ($('input[name=act-type]:checked').val() == "AFRCD") {
            $('.afrcd1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });

            $('.only_afrcd').fadeIn().insertAfter( ".move_here" );
            $('.only_1st_rep').fadeOut();
            $('.only_2nd_rep').fadeOut();
            $('.only_3rd_rep').fadeOut();
            $('.only_nlcd').fadeOut();
            $('.only_nrcd').fadeOut();
            $('.only_smcd').fadeOut();
            $('.only_pndc').fadeOut();
          }
          else if ($('input[name=act-type]:checked').val() == "PNDC") {
            $('.pndc1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });

            $('.only_pndc').fadeIn().insertAfter( ".move_here" );
            $('.only_1st_rep').fadeOut();
            $('.only_2nd_rep').fadeOut();
            $('.only_3rd_rep').fadeOut();
            $('.only_nlcd').fadeOut();
            $('.only_nrcd').fadeOut();
            $('.only_smcd').fadeOut();
            $('.only_afrcd').fadeOut();
          }
      });
    });
</script>
@endsection

    