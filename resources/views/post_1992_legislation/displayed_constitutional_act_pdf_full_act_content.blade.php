

        <div class="container">
            <center><h4><b>{{ $allConstitutionalAct['title'] }}</b></h4></center>
            </div>
            <br>
            <div class="container">	
            <h4><b>Preamble</b></h4><p>{!! $allConstitutionalAct['preamble'] !!}</p>
            <hr>
            @foreach($allConstitutionalArticles as $allConstitutionalArticle)
            
                    <h4><b>{{$allConstitutionalArticle->section }}</b></h4>
                    {!! $allConstitutionalArticle->content !!}
                    <hr><br>

            @endforeach
            </div>
    </div>  
