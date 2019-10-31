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
        .accordion-content {
        height: 330px;
        overflow-y: scroll;
        }
</style>
@endsection

@section('content')


     <div class="container">
         <center><h4><b>{{ $allPost1992Article['post_act'] }}</b></h4></center>

         <div class="hide_sections">
            <div class="accordion-content">
              @include('post_1992_legislation.displayed_previous_next')
            </div>

            <hr>
            <p class="moding">Lat</p>
            <div class="row">
              <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail" style="height: 150px">
                  <img src="..." alt="...">
                </a>
              </div>
              <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail" style="height: 150px">
                  <img src="..." alt="...">
                </a>
              </div>
              <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail" style="height: 150px">
                  <img src="..." alt="...">
                </a>
              </div>
              <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail" style="height: 150px">
                  <img src="..." alt="...">
                </a>
              </div>
            </div>
         </div>
         
         <ul class="pager previous_next_hidden_show">
                <li><a data-scroll-to="body"
                    data-scroll-focus="body"
                    data-scroll-speed="400"
                    data-scroll-offset="-60" href="#" class="plain_previous_content_act">Previous Section</a></li>
                <li><a data-scroll-to="body"
                    data-scroll-focus="body"
                    data-scroll-speed="400"
                    data-scroll-offset="-60" href="#" class="plain_next_content_act">Next Section</a></li>
        <a class="btn btn-info btn-sm pull-right" onClick="window.location.reload();">Back to Full View</a><br>
         
          </ul>
        <!-- plain_previous_content_act plain_next_content_act -->

        <div class="next_previous_content_display"></div>

        <!-- <div id="box">
        <h2>Click button to load new content inside DIV box</h2>
        </div> -->

        <div class="plain_content_display hidden">
          <h4><b>{{ $allPost1992Article['section'] }}</b></h4>
          <div class="content">
              <p>{!! $allPost1992Article['content'] !!}</p>
          </div>
        </div> 
        
    </div>    

@endsection

@section('scripts')
<script type="text/javascript">
    
</script>

@endsection
