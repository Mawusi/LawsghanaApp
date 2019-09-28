

        <div class="container">
                <center><h4><b>{{ $regulationtitle['title'] }}</b></h4></center>
                </div>
                <br>
                <div class="container">	
                <h4><b>Preamble</b></h4><p>{!! $regulationtitle['preamble'] !!}</p>
                <hr>
                @foreach($ActsRegulationArticles as $ActsRegulationArticle)
                
                        <h4><b>{{$ActsRegulationArticle->section }}</b></h4>
                        {!! $ActsRegulationArticle->content !!}
                        <hr><br>

                @endforeach
                </div>
        </div>  
