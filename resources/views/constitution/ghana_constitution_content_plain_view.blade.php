@extends('extenders.plain_extender')

@section('content')


     <div class="container">
         <ul class="pager">
                <li><a data-scroll-to="body"
                    data-scroll-focus="body"
                    data-scroll-speed="400"
                    data-scroll-offset="-60" href="#" class="previous_content_act">Previous Article</a></li>
                <li><a data-scroll-to="body"
                    data-scroll-focus="body"
                    data-scroll-speed="400"
                    data-scroll-offset="-60" href="#" class="next_content_act">Next Article</a></li>
        <a class="btn btn-info btn-sm pull-right" href="javascript:history.back()">Back to Full View</a><br>
         </ul>
    
    
        <h4><b>{{ $constitutionContent['section'] }}</b></h4>
        <div class="content">
            <p>{!! $constitutionContent['articles'] !!}</p>
        </div>
        
    </div>    

@endsection