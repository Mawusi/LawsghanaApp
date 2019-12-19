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
    <br>
    
    <div class="container">	                
            @foreach ($posts as $post )
                <h4>{{$post->part }}</h4>
                <h4 style="color:blue;">{{ $post->section }}</h4>
                {!! $post->content !!}<hr><br>
            @endforeach
            {{-- <div class="col-md-12">    
                <center>{!! $posts->links() !!}</center>
            </div> --}}
    </div> 
         
@endsection  


