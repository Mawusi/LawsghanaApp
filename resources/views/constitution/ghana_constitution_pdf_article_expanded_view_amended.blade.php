

        <div class="container">
                <center><h4><b>{{ $ghana_act_amended['title'] }}</b></h4></center>
                </div>
                <br>
                <div class="container">	
                <h4><b>Preamble</b></h4><p>{!! $ghana_act_amended['preamble'] !!}</p>
                <hr>
                @foreach($ghana_act_amendeds as $ghana_act_amended)
                
                        <center><h4><b>{{$ghana_act_amended->chapter }}</b></h4></center>
                        <h4><b>{{$ghana_act_amended->section }}</b></h4>
                        {!! $ghana_act_amended->articles !!}
                        <hr><br>

                @endforeach
                </div>
        </div>  
