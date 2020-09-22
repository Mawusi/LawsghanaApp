<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{ asset('css/tooltipster.bundle.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/tooltipster-sideTip-borderless.min.css') }}" type="text/css"> 
    <style>
        /* .btn{
          font-weight: 550;
          padding: .175rem .75rem;
          line-height: 1.3;
          font-size: .8rem;
        } */
        .scroll-view {
          height: auto;
          max-height: 280px;
          width: 380px;
          /* overflow-x: scroll;
          overflow-y: scroll; */
          overflow: scroll;
          -ms-overflow-style: -ms-autohiding-scrollbar;
        }
    </style>   
</head>

<body>

<div class="col-md-3 mobile-filter-hide">
  <div class="sidebar">
    <div class="card border-secondary" style="max-width: 18rem;">
      <div class="card-header" style="padding: .25rem 1.25rem;">Filter</div>
      <div class="card-body text-dark">
        
        <center>
            <div class="dropdown mb-3">
              <a class="btn btn-outline-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span>Regulations</span>
              </a>
              <div class="dropdown-menu scroll-view" aria-labelledby="dropdownMenuLink-3">
                @foreach($allRegulationArticles as $allRegulationArticle)
                    <a data-scroll-to="body"
                    data-scroll-focus="body"
                    data-scroll-speed="400"
                    data-scroll-offset="-60" class="regulation_view_all_section_link_with_prev_next dropdown-item" sid="{{$allRegulationArticle->id}}" href="/post_1992_legislation/regulation_act/content/{{ $allRegulationArticle->id }}">{{$allRegulationArticle->section }}
                    </a>
                @endforeach              
              </div>
            </div>

            
        <div class="mb-2">
            <button a data-scroll-to="body"
            data-scroll-focus="body"
            data-scroll-speed="400"
            data-scroll-offset="-60" type="button" class="btn btn-outline-dark btn-sm previous_content_regulation">
            &laquo;&nbsp;Previous
            </button>
            <button a data-scroll-to="body"
            data-scroll-focus="body"
            data-scroll-speed="400"
            data-scroll-offset="-60" type="button" class="btn btn-outline-dark btn-sm next_content_regulation">
            Next&nbsp;&raquo;
            </button>
        </div>
        <hr>
        <div class="mt-5">
          <button a data-scroll-to="body"
              data-scroll-focus="body"
              data-scroll-speed="400"
              data-scroll-offset="-60" type="button" class="btn btn-outline-dark btn-sm expanded_link toggle_expanded_view" href="/post_1992_legislation/regulation/expanded_view/{{$regulationAct['act_category']}}/{{$regulationAct['title']}}/{{$regulationAct['id']}}">
              Expanded View
          </button>
        <div>
          
        </center>
          


          

          
                
      </div>
    </div>
  </div>
        
</div>

</body>

</html>
  