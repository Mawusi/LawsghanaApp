@extends('extenders.plain_extender')

@section('title', 'Plain Preview Mode')
@section('content')


     <div class="container">
     <center><h4><b>{{ $allPre1992Act['pre_1992_act'] }}</b></h4></center>
         <ul class="pager">
                <li><a data-scroll-to="body"
                    data-scroll-focus="body"
                    data-scroll-speed="400"
                    data-scroll-offset="-60" href="#" class="previous_content_act">Previous Section</a></li>
                <li><a data-scroll-to="body"
                    data-scroll-focus="body"
                    data-scroll-speed="400"
                    data-scroll-offset="-60" href="#" class="next_content_act">Next Section</a></li>
        <!-- <a class="btn btn-info btn-sm pull-right" href="javascript:history.back()">Back to Full View</a><br> -->
         </ul>
        <br>
    
        <h4><b>{{ $allPre1992Act['section'] }}</b></h4>
        <div class="content">
            <p>{!! $allPre1992Act['content'] !!}</p>
        </div>
        
    </div>    

@endsection