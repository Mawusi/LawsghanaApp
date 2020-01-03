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
        .search-well{
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
  border-radius: 10px;
  color: $color-dark;
  padding: 15px;
}.main {
  width: 80%;
  /* height: 200vh; */
  /* min-height: 1000px; */
  display: flex;
  flex-direction: column;
}.sidebar {
  width: 25%;
  height: 50vh;
  /* min-height: 200px; */
  overflow: auto;
  position: -webkit-sticky;
  position: sticky;
  top: 10%;
}
</style>
@endsection

@section('content')

<div class="container-fluid">

  <div class="row">
    <div class="wrapper">

      {{-- <div class="col-md-3"> --}}
        <div class="sidebar">
          <h3>Filter sidebar</h3>
          <div class="search-well">
            <form>
              <div class="checkbox">
                <label><input type="checkbox" value="">Constitution</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="">Pre 4th Republic Laws</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="" disabled>4th Republic Laws</label>
              </div>
              <div class="checkbox">
                <label><input type="checkbox" value="" disabled>Case Laws</label>
              </div>
            </form>
          </div>
          {{-- <p>I will follow you!</p>
          <p><a href="https://caniuse.com/#search=sticky">caniuse stats</a> --}}
        </div>
      {{-- </div> --}}

      {{-- <div class="col-md-9"> --}}
        <div class="main">
          <u><h5><b>Searched Results</b></h5></u>
            @foreach ($posts as $post)
            <div class="search-well">
              <h5 style="color:blue;"><b>{{ $post->post_act }}</b></h5>
              <a href="/post_1992_legislation/content/{{$post->id}}" target="_blank"><b>{{ $post->section }}</b></a>
              <br><br>
              {!! $post->content !!}
            </div>
            <br>
            @endforeach
        </div>
      {{-- </div> --}}

    </div>
  </div>

</div>
    
@endsection 

    {{-- <div class="container">
        <center><h3><b>{{ $allPost1992Act['title'] }}</b></h3></center>
    </div> --}}
    {{-- <div class="container">
        <u><h5><b>Searched Results</b></h5></u>
    </div> --}}
    
    {{-- <div class="container-fluid">	

      <div class="row">

        <div class="col-md-3"> --}}
              {{-- <div class="filter-side search-sidebar">
                <div class="right-sidebar-toggle">
                    <a href="#" class="filter-link">
                        <i class="fa fa-filter" aria-hidden="true"></i>
                        <span>FILTER</span>
                    </a>
                </div>
                <div class="search-sidebar-scroll" style="overflow: hidden; width: auto; height: 100%;">
                    <div class="filters-header">
                        <h4>Filter</h4>
                        <div id="btnClearFilter" class="reset-filters"><a href="#/"><i class="os-icon-close os-icon"></i><span>Clear All </span></a></div>
                    </div>
                    <div id="court" class="filter-w"></div>
                    <div id="benchresult" class="filter-w collapsed"></div>
                    <div id="yearfilter" class="filter-w collapsed"></div>
                    <div id="decision" class="filter-w collapsed"></div>
                    <div id="partyfilter" class="filter-w collapsed"></div>
                    <div id="sectionfilter" class="filter-w"></div>
                  </div>
              </div> --}}
        {{-- </div> --}}

        {{-- <div class="col-md-9">
          <u><h5><b>Searched Results</b></h5></u>
            @foreach ($posts as $post)
            <div class="search-well">
              <h5 style="color:blue;"><b>{{ $post->post_act }}</b></h5>
              <a href="/post_1992_legislation/content/{{$post->id}}" target="_blank"><b>{{ $post->section }}</b></a>
              <br><br>
              {!! $post->content !!}
            </div>
            <br>
            @endforeach
        </div>
         
      </div>        

    </div>  --}}
         
 








{{-- @foreach ($regulations as $regulation)
                <h5 style="color:blue;"><b>{{ $regulation->regulation_title }}</b></h5>
                <a href="/post_1992_legislation/regulation_act/content/{{$regulation->id}}" target="_blank"><b>{{ $regulation->section }}</b></a>
                <br><br>
                {{ Str::limit($regulation->content, 470, '...') }}
                <hr>
            @endforeach

            @foreach ($amends as $amend)
                <h5 style="color:blue;"><b>{{ $amend->act_title }}</b></h5>
                <a href="/post_1992_legislation/amended_acts/content/{{$amend->id}}" target="_blank"><b>{{ $amend->section }}</b></a>
                <br><br>
                {{ Str::limit($amend->content, 470, '...') }}
                <hr>
            @endforeach

            @foreach ($amends_regs as $amends_reg)
                <h5 style="color:blue;"><b>{{ $amends_reg->title }}</b></h5>
                <a href="/post_1992_legislation/amended_regulation_acts/content/{{$amends_reg->id}}" target="_blank"><b>{{ $amends_reg->section }}</b></a>
                <br><br>
                {{ Str::limit($amends_reg->content, 470, '...') }}
            @endforeach --}}