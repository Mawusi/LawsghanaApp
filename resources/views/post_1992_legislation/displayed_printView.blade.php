@extends('extenders.general_extenders')

@section('title', 'Print View Mode')
@section('content')
    <div class="container">
        <a onclick="printpage()" id="printpagebutton" title="Print page"><span class="btn btn-info btn-sm pull-right glyphicon glyphicon-print" aria-hidden="true"></span></a><br>
        <div class="container">
            <center><h3><b>{{ $allPost1992Act['title'] }}</b></h3></center>
        </div>
        <br>
        <div class="container">	
        <h4 style="color:blue;">Preamble</h4><p>{!! $allPost1992Act['preamble'] !!}</p>
        <hr>
        @foreach($allPost1992Articles as $allPost1992Article)
            
                {{-- <center><h4><b>{{$allPost1992Article->part }}</b></h4></center><br> --}}
                <h4 style="color:blue;">{{$allPost1992Article->section }}</h4>
                {!! $allPost1992Article->content !!}
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