@extends('extenders.general_extenders')

@section('content')
    <div class="container">
        <a onclick="printpage()" id="printpagebutton" title="Print page"><span class="btn btn-info btn-sm pull-right glyphicon glyphicon-print" aria-hidden="true"></span></a><br>
        <div style="margin-top:30px;">

            <!-- <center><h4><b>{{$allGhanaLawprint['gh_law_judgment_group_name']}}</b></h4></center> -->
        <center><h5><b>{!! $allGhanaLawprint['court_name'] !!}</b></h5></center><br>

        <!-- Case Title -->
        <center>
            <b>
                <h5 style="color:blue;"><b>{!! $allGhanaLawprint['case_title_1'] !!}</b></h5>
                <label>vs.</label>
                <h5 style="color:blue;"><b>{!! $allGhanaLawprint['case_title_2'] !!}</b></h5>
            </b>
        </center>
        <br>

            <div class="row">
                <h5><b style="color:blue;">DATE:&nbsp;</b>
                <b style="color:black;">{{$allGhanaLawprint['date']}}</b></h5>
            </div>
            <div class="row">
                <h5><b style="color:blue;">CASE NO:&nbsp;</b>
                <b style="color:black;">{{$allGhanaLawprint['reference_number']}}</b></h5>
            </div>
            
            <div class="row">
                <h5><b style="color:blue;">CORAM:&nbsp;</b>
                <b style="color:black;">{{$allGhanaLawprint['coram']}}</b></h5>
            </div>
            
            <div class="row">
                <h5><b style="color:blue;">COUNSELLORS:&nbsp;</b>
                <b style="color:black;">{{$allGhanaLawprint['counsellors']}}</b></h5>
            </div>


        <hr>

            
            <div class="content">
                <p>{!! $allGhanaLawprint['content'] !!}</p>
                @include('extenders.footer_caption')
            </div>
        </div>
    </div>  
@endsection 

@section('scripts')
<script type="text/javascript">
    function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
    }
</script>

@endsection

