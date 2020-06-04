

        <div class="container">
                
                <center><h4><b>{{ $allPost1992Act['title'] }}</b></h4></center>
                </div>
                <br>
                <div class="container">	
                        <h4><b>Preamble</b></h4><p>{!! $allPost1992Act['preamble'] !!}</p>
                        <hr>
                        @foreach($allPost1992Articles as $allPost1992Article)
                        
                                <h4><b>{{$allPost1992Article->section }}</b></h4>
                                {!! $allPost1992Article->content !!}
                                <hr><br>
                        @endforeach
                        
                </div>
        </div>  
