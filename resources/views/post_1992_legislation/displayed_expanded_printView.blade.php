@extends('extenders.general_extenders')

@section('title', 'Print View Mode')
@section('content')
    <div class="container">
        <a onclick="printpage()" id="printpagebutton" title="Print page"><span class="btn btn-info btn-sm pull-right glyphicon glyphicon-print" aria-hidden="true"></span></a><br>
        <div class="container">
            <center><h4><b>{{ $allAmendment['title'] }}</b></h4></center>
        </div>
        <br>
        <div class="container">	
        <h4><b>Preamble</b></h4><p>{!! $allAmendment['preamble'] !!}</p>
        <hr>
        @foreach($allAmendedArticles as $allAmendedArticle)
            
                <h4><b>{{$allAmendedArticle->section }}</b></h4>
                {!! $allAmendedArticle->content !!}
                <hr><br>

        @endforeach
        @include('extenders.footer_caption')
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