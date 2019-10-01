

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
                </div>
        </div>  
