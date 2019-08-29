@extends('extenders.general_extenders')

@section('content')
    <div class="container">
        <a onclick="printpage()" id="printpagebutton" title="Print page"><span class="btn btn-info btn-sm pull-right print-preview glyphicon glyphicon-print" aria-hidden="true"></span></a><br>
        <!-- <input class="btn btn-info btn-sm pull-right glyphicon glyphicon-print" id="printpagebutton" value="Print this page" onclick="printpage()"/>         -->
    <div class="print_this">
            <center>
            <h4>
                <b>{{$allPost1992Article['post_act']}}</b>
            </h4>
            </center>
            <br>
            <h4>
                <b>{{ $allPost1992Article['section'] }}</b>
            </h4>

            <div class="content">
                <p>{!! $allPost1992Article['content'] !!}</p>
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

