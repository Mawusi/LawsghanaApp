<center><h5><b>{!! $allGhanaLawpdf['court_name'] !!}</b></h5></center>

<!-- Case Title -->
<center>
    <b>
        <h5 style="color:blue;"><b>{!! $allGhanaLawpdf['case_title_1'] !!}</b></h5>
                                 <label>vs.</label>
        <h5 style="color:blue;"><b>{!! $allGhanaLawpdf['case_title_2'] !!}</b></h5>
    </b>
</center>

    <div class="row">
        <h5><b style="color:blue;">DATE:&nbsp;</b>
        <b style="color:black;">{{$allGhanaLawpdf['date']}}</b></h5>
    </div>
    <div class="row">
        <h5><b style="color:blue;">CASE NO:&nbsp;</b>
        <b style="color:black;">{{$allGhanaLawpdf['reference_number']}}</b></h5>
    </div>
    
    <div class="row">
        <h5><b style="color:blue;">CORAM:&nbsp;</b>
        <b style="color:black;">{{$allGhanaLawpdf['coram']}}</b></h5>
    </div>
    
    <div class="row">
        <h5><b style="color:blue;">COUNSELLORS:&nbsp;</b>
        <b style="color:black;">{{$allGhanaLawpdf['counsellors']}}</b></h5>
    </div>


<hr>

    <div class="content">
        <p>{!! $allGhanaLawpdf['content'] !!}</p>
    </div>
