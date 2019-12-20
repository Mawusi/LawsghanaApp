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
            @foreach ($posts as $post)
                <h5 style="color:blue;"><b>{{ $post->post_act }}</b></h5>
                <a href="/post_1992_legislation/content/{{$post->id}}" target="_blank"><b>{{ $post->section }}</b></a>
                <br><br>
                {{-- {!!$post->content!!} --}}
                {{ Str::limit($post->content, 470, '...') }}
                <hr>
            @endforeach
            
            @foreach ($regulations as $regulation)
                <h5 style="color:blue;"><b>{{ $regulation->regulation_title }}</b></h5>
                {{-- <h5>{{$regulation->part }}</h5> --}}
                <a href="/post_1992_legislation/regulation_act/content/{{$regulation->id}}" target="_blank"><b>{{ $regulation->section }}</b></a>
                <br><br>
                {{-- {!!$regulation->content!!} --}}
                {{ Str::limit($regulation->content, 470, '...') }}
                <hr>
            @endforeach

            @foreach ($amends as $amend)
                <h5 style="color:blue;"><b>{{ $amend->act_title }}</b></h5>
                <a href="/post_1992_legislation/amended_acts/content/{{$amend->id}}" target="_blank"><b>{{ $amend->section }}</b></a>
                <br><br>
                {{-- {!!$amend->content!!} --}}
                {{ Str::limit($amend->content, 470, '...') }}
                <hr>
            @endforeach

            @foreach ($amends_regs as $amends_reg)
                <h5 style="color:blue;"><b>{{ $amends_reg->title }}</b></h5>
                {{-- <h5>{{ $amends_reg->part }}</h5> --}}
                <a href="/post_1992_legislation/amended_regulation_acts/content/{{$amends_reg->id}}" target="_blank"><b>{{ $amends_reg->section }}</b></a>
                <br><br>
                {{-- {!!$amends_reg->content!!} --}}
                {{ Str::limit($amends_reg->content, 470, '...') }}
            @endforeach
            {{-- <div class="col-md-12">    
                <center>{!! $posts->links() !!}</center>
            </div> --}}
    </div> 
         
@endsection  


