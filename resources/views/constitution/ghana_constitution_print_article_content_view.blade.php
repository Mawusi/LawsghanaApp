@extends('extenders.general_extenders')

@section('title', 'Print Preview Mode')
@section('content')
    <div class="container">
        <a onclick="printpage()" id="printpagebutton" title="Print page"><span class="btn btn-info btn-sm pull-right glyphicon glyphicon-print" aria-hidden="true"></span></a><br>
        <div class="print_this">
            <center>
            <h4>
                <b>{{$ghana_act['chapter']}}</b>
            </h4>
            </center>
            <br>
            <h4>
                <b>{{ $ghana_act['section'] }}</b>
            </h4>

            <div class="content">
                <p>{!! $ghana_act['articles'] !!}</p>
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
