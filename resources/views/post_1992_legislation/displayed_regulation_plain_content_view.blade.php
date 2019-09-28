@extends('extenders.plain_extender')

@section('title', 'Plain View Mode')

@section('assets')
<style type="text/css">
        .header {
          background: #888888;
          color: #f1f1f1;
          text-align: center;
          position: -webkit-sticky;
          position: sticky;
          top: 0;
        }
        ::-webkit-scrollbar {
        width: 7px;
        }
        div::-webkit-scrollbar-button {
          display: block;
          width: 17px;
          height: 17px;
        }
        div::-webkit-scrollbar-button:decrement:start {
          background-color:lightblue;
          border:1px solid #eee;
        }
        div::-webkit-scrollbar-button:increment:start {
          background-color:lightblue;
          border:1px solid #eee;
        }
        div::-webkit-scrollbar-button:decrement:end {
          background-color:lightblue;
          border:1px solid #eee;
        }
        div::-webkit-scrollbar-button:increment:end {
          background-color:lightblue;
          border:1px solid #eee;;
        }
        ::-webkit-scrollbar-thumb {
        background: #888; 
        }

        ::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
        border-radius: 10px;
        } 
        ::-webkit-scrollbar-thumb:hover {
        background: #555; 
        }
        .content {
          padding: 16px;
        }
</style>
@endsection

@section('content')


     <div class="container">
         <center><h4><b>{{ $regulationAct['regulation_title'] }}</b></h4></center>
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
    
        <h4><b>{{ $regulationAct['section'] }}</b></h4>
        <div class="content">
            <p>{!! $regulationAct['content'] !!}</p>
        </div>
        
    </div>    

@endsection