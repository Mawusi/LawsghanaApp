@extends('extenders.plain_extender')

@section('title', 'Plain View Mode')

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
</style>
@endsection

@section('content')
    <div class="container">
      <br>
        <!-- <center><h4><b>{{ $allGhanaLawPlainView['gh_law_judgment_group_name'] }}</b></h4></center><br> -->
        <!-- Court Name -->
        <center><h5><b>{!! $allGhanaLawPlainView['court_name'] !!}</b></h5></center><br>

        <!-- Case Title -->
        <center>
            <b>
                <h5 style="color:blue;"><b>{!! $allGhanaLawPlainView['case_title_1'] !!}</b></h5>
                <label>vs.</label>
                <h5 style="color:blue;"><b>{!! $allGhanaLawPlainView['case_title_2'] !!}</b></h5>
            </b>
        </center>
        <br>

            <div class="row">
                    <h5><b style="color:blue;">DATE:&nbsp;</b>
                    <b style="color:black;">{{$allGhanaLawPlainView['date']}}</b></h5>
            </div>
            <div class="row">
                <h5><b style="color:blue;">CASE NO:&nbsp;</b>
                <b style="color:black;">{{$allGhanaLawPlainView['reference_number']}}</b></h5>
            </div>
            
            <div class="row">
                <h5><b style="color:blue;">CORAM:&nbsp;</b>
                <b style="color:black;">{{$allGhanaLawPlainView['coram']}}</b></h5>
            </div>
            
            <div class="row">
                <h5><b style="color:blue;">COUNSELLORS:&nbsp;</b>
                <b style="color:black;">{{$allGhanaLawPlainView['counsellors']}}</b></h5>
            </div>


        <hr>

        <div class="content">
            <p>{!! $allGhanaLawPlainView['content'] !!}</p>
        </div>
        
    </div>    

@endsection