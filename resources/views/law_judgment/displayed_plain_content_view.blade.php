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
                            <p>vs.</p>
                <h5 style="color:blue;"><b>{!! $allGhanaLawPlainView['case_title_2'] !!}</b></h5>
            </b>
        </center>
        <br>

            <div class="row">
                    <h5 style="color:blue;"><b>DATE:&nbsp;</b></h5><br>
                    <h5><b>{{$allGhanaLawPlainView['date']}}</b></h5>
            </div>
            <div class="row">
                <h5 style="color:blue;"><b>CASE NO:&nbsp;</b></h5>
                <h5><b>{{$allGhanaLawPlainView['reference_number']}}</b></h5>
            </div>
            
            <div class="row">
                <h5 style="color:blue;"><b>CORAM:</b></h5>
                <h5><b>{{$allGhanaLawPlainView['coram']}}</b></h5>
            </div>
            
            <div class="row">
                <h5 style="color:blue;"><b>COUNSELLORS:</b></h5><br>
                <h5><b>{{$allGhanaLawPlainView['counsellors']}}</b></h5>
            </div>


        <hr>

        <div class="content">
            <p>{!! $allGhanaLawPlainView['content'] !!}</p>
        </div>
        
    </div>    

@endsection