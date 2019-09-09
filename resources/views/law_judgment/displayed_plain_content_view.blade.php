@extends('extenders.plain_extender')

@section('content')
    <div class="container">
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
                    <b style="color:blue;">{{$allGhanaLawPlainView['date']}}</b></h5>
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