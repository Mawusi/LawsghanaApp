

        <div class="container">
                <center><h4><b>{{ $allPre1992Act['title'] }}</b></h4></center>
                </div>
                <br>
                <div class="container">	
                <h4><b>Preamble</b></h4><p>{!! $allPre1992Act['preamble'] !!}</p>
                <hr>
                @foreach($allPre1992Articles as $allPre1992Article)
                
                        <h4><b>{{$allPre1992Article->section }}</b></h4>
                        {!! $allPre1992Article->content !!}
                        <hr><br>

                @endforeach
                </div>
        </div>  
