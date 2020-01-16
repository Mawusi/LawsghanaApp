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
        <form action="{{ url('home_index_search') }}" method="GET">
          {{ csrf_field() }}
          <div class="input-group">         
                <input type="text" class="form-control" name="search" placeholder="Search any law or case in Ghana"">
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
            <p class="small" style="color:blue;"><b><span style="color:red;"></span>&nbsp;Results Found&nbsp;for&nbsp;<span style="color:red;">"{{$query}}"</span></b></p><hr>
            <p style="color:blue;">Temporary Side bar</p>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input all1" id="defaultChecked" name="act-type" value="All" checked>
              <label class="custom-control-label" for="defaultChecked">Case Laws</label>&nbsp;<span class="badge">8</span>
            </div>
            <br>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input post1" id="defaultUnchecked" name="act-type" value="Post">
              <label class="custom-control-label" for="defaultUnchecked">Supreme Court</label>&nbsp;<span class="badge">7</span>
            </div>
            <br>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input reg1" id="defaultUnchecked" name="act-type" value="Regulation">
              <label class="custom-control-label" for="defaultUnchecked">Court of Appeal</label>&nbsp;<span class="badge">5</span>
            </div>
            <br>
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input amend_act1" id="defaultUnchecked" name="act-type" value="Amend_Act">
              <label class="custom-control-label" for="defaultUnchecked">High Court</label>&nbsp;<span class="badge">6</span>
            </div>
            <br>
          </div>
        </div>
      </div>

      <div class="col-md-9">
        <div class="">
          <div class="move_here hidden  top_here"><br></div>
            @foreach ($supreme_court_cases as $supreme_court_case)
            <div class="search-well only_post">
              <a href="#" target="_blank"><h5 style="color:blue;"><b>{!! $supreme_court_case->case_title !!}</b></h5></a>
              <b>{!! $supreme_court_case->gh_law_judgment_group_name !!} | {!! $supreme_court_case->reference_number !!}</b>
              <br><br>
                {{-- {!! $case->content !!}  --}}
                {!! $supreme_court_case->content !!}

            </div>
            <br>
            @endforeach
        </div>
      </div>

    </div>
  </div>

</div>
    
@endsection 

@section('scripts')

<script>
    $(function () {
      $("input[name=act-type]:radio").click(function () {
        
          if ($('input[name=act-type]:checked').val() == "All") {
            $('.all1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });
            $('.only_post').fadeIn();
            $('.only_amend_acts').fadeIn();
            $('.only_regulation').fadeIn();
            $('.only_amend_reg').fadeIn();

          } else if ($('input[name=act-type]:checked').val() == "Post") {
            $('.post1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });

            $('.only_post').fadeIn().insertAfter( ".move_here" );
            $('.only_amend_acts').fadeOut();
            $('.only_regulation').fadeOut();
            $('.only_amend_reg').fadeOut();

          }
          else if ($('input[name=act-type]:checked').val() == "Regulation") {
            // $('.only_regulation').fadeIn().insertAfter( ".move_here" ).scrollTo('.top_here');
            $('.reg1').click(function() {

              $('html, body').animate({
                scrollTop: $("body").offset().top
              }, 1000)
            });

              $('.only_regulation').fadeIn().insertAfter( ".move_here" );
              $('.only_post').fadeOut();
              $('.only_amend_acts').fadeOut();
              $('.only_amend_reg').fadeOut();
          }
          else if ($('input[name=act-type]:checked').val() == "Amend_Act") {
            $('.amend_act1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });

            $('.only_amend_acts').fadeIn().insertAfter( ".move_here" );
            $('.only_post').fadeOut();
            $('.only_regulation').fadeOut();
            $('.only_amend_reg').fadeOut();

          }
          else if ($('input[name=act-type]:checked').val() == "Amend_Regulation") {
            $('.amend_reg1').click(function() {

            $('html, body').animate({
              scrollTop: $("body").offset().top
            }, 1000)
            });

            $('.only_amend_reg').fadeIn().insertAfter( ".move_here" );
            $('.only_post').fadeOut();
            $('.only_amend_acts').fadeOut();
            $('.only_regulation').fadeOut();

          }
      });
    });
</script>
@endsection

    