

        <div class="container">
            <center><h4><b>{{ $allExecutiveAct['title'] }}</b></h4></center>
            </div>
            <br>
            <div class="container">	
            <h4><b>Preamble</b></h4><p>{!! $allExecutiveAct['preamble'] !!}</p>
            <hr>
            @foreach($allExecutiveArticles as $allExecutiveArticle)
            
                    <h4><b>{{$allExecutiveArticle->section }}</b></h4>
                    {!! $allExecutiveArticle->content !!}
                    <hr><br>

            @endforeach
            </div>
    </div>  
