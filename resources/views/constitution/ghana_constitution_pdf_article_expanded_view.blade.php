

        <div class="container">
                <center><h4><b>{{ $ghana_act['title'] }}</b></h4></center>
                </div>
                <br>
                <div class="container">	
                <h4><b>Preamble</b></h4><p>{!! $ghana_act['preamble'] !!}</p>
                <hr>
                @foreach($ghana_acts as $ghana_act)
                
                        <center><h4><b>{{$ghana_act->chapter }}</b></h4></center>
                        <h4><b>{{$ghana_act->section }}</b></h4>
                        {!! $ghana_act->articles !!}
                        <hr><br>

                @endforeach
                </div>
        </div>  
