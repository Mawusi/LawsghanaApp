@extends('extenders.main')

@section('title', 'Search Results')

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

    {{-- <div class="container">
        <center><h3><b>{{ $allPost1992Act['title'] }}</b></h3></center>
    </div> --}}
    <div class="container">
        <u><h5><b>Searched Results</b></h5></u>
    </div>
    
    <div class="container">	                
            @foreach ($posts as $post )
                <h5 style="color:blue;"><b>{{ $post->post_act }}</b></h5>
                <h5>{{$post->part }}</h5>
                <h5>{{ $post->section }}</h5>
                {!!$post->content!!}
                <hr>
            @endforeach
            
            @foreach ($regulations as $regulation )
                <h5 style="color:blue;"><b>{{ $regulation->regulation_title }}</b></h5>
                <h5>{{$regulation->part }}</h5>
                <h5>{{ $regulation->section }}</h5>
                {!!$regulation->content!!}
                <hr>
            @endforeach

            @foreach ($amends as $amend )
                <h5 style="color:blue;"><b>{{ $amend->act_title }}</b></h5>
                <h5>{{ $amend->section }}</h5>
                {!!$amend->content!!}
                <hr>
            @endforeach

            @foreach ($amends_regs as $amends_reg )
                <h5 style="color:blue;"><b>{{ $amends_reg->title }}</b></h5>
                <h5>{{ $amends_reg->part }}</h5>
                <h5>{{ $amends_reg->section }}</h5>
                {!!$amends_reg->content!!}
            @endforeach
            {{-- <div class="col-md-12">    
                <center>{!! $posts->links() !!}</center>
            </div> --}}
    </div> 
         
@endsection  


