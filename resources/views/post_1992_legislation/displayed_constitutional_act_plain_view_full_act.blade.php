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
                <center><h3><b>{{ $allConstitutionalAct['title'] }}</b></h3></center>
            </div>
            
            <br>
            
            <div class="container">	
                <h4 style="color:blue;">Preamble</h4><p>{!! $allConstitutionalAct['preamble'] !!}</p>
                <hr>
                @foreach($allConstitutionalArticles as $allConstitutionalArticle)
                    
                        {{-- <h4>{{$allPost1992Article->part }}</h4> --}}
                        <h4 style="color: blue;">{{$allConstitutionalArticle->section }}</h4>
                        {!! $allConstitutionalArticle->content !!}
                        <hr><br>

                @endforeach
            </div>  
    
@endsection    