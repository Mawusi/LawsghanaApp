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
            <h5 style="color:blue;">Court of Appeal Search</h5><hr>
            <span style="color:blue;">Filter Options</span>
            <p class="small" style="color:blue;"><b><span style="color:red;">{{number_format($court_of_appeal_cases_count)}}</span>&nbsp;Results Found&nbsp;for&nbsp;<span style="color:red;">"{{$query}}"</span></b></p>
          </div>
        </div>
      </div>

      <div class="col-md-9">
        <div><br></div>
        @foreach ($court_of_appeal_cases as $court_of_appeal_case)
            <div class="search-well">
                {{-- <a href="/judgement/plain_view/{{$court_of_appeal_case->id}}" target="_blank"><h5 style="color:blue;"><b>{!! $court_of_appeal_case->case_title !!}</b></h5></a> --}}
                <a href="/judgement/Ghana/{{$court_of_appeal_case->gh_law_judgment_group_name}}/{{$court_of_appeal_case->id}}" target="_blank"><h5 style="color:blue;"><b>{!! $court_of_appeal_case->case_title !!}</b></h5></a> 
                <b>{!! $court_of_appeal_case->gh_law_judgment_group_name !!} | {!! $court_of_appeal_case->reference_number !!}</b>
                    <br><br>
                    {!! str_limit(strip_tags(strstr($court_of_appeal_case->content,  $query, false)),450, '...' ) !!}
                    {{-- {!! $supreme_court_case->content !!} --}}
                    {{-- {!! str_limit(strstr($supreme_court_case->content,  $query, false),450, '...' ) !!} --}}
            </div>
        <br>
        @endforeach                                     
      </div>
  </div>
</div>
    
@endsection 

@section('scripts')


@endsection

    