@extends('extenders.news-main')

@section('title', ucwords(strtolower($newscategory['name'])))

@section('assets')
    
@endsection



@section('content')

    <!-- The Carousel Part 1 -->
    <div class="site-section py-0">
      <div class="owl-carousel hero-slide owl-style">
      @foreach($newsSelectors as $newsContent)
        <div class="site-section">
          <div class="container">
            <div class="half-post-entry d-block d-lg-flex bg-light">
            <div class="img-bg">
            <a href="/News/{{ $newsContent->news_category }}/{{ $newsContent->title }}/{{ $newsContent->id }}"><img src="{{ url('storage/'.$newsContent->picture) }}"/></a>
            </div>
              <div class="contents">
                <!-- <span class="caption">Editor's Pick</span> -->
                <h2><a href="/News/{{ $newsContent->news_category }}/{{ $newsContent->title }}/{{ $newsContent->id }}">{{ $newsContent->title }}</a></h2>
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero obcaecati natus adipisci necessitatibus eius, enim vel sit ad reiciendis. Enim praesentium magni delectus cum, tempore deserunt aliquid quaerat culpa nemo veritatis, iste adipisci excepturi consectetur doloribus aliquam accusantium beatae?</p>
                <!-- <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">Food</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      @endforeach  
      </div>
    </div>
    <!-- End of The Carousel Part 1 -->
    <br>

    <!-- PART 2 -->
    <div class="site-section">
      <div class="container">
      <div class="row">
        <!-- the news part -->
          <div class="col-lg-10">
            <!-- <div class="row">
              <div class="col-12">
                <div class="section-title">
                  <h2>The latest News Entry shows here</h2>
                </div>
              </div>
            </div> -->
            <div class="row">
              <div class="col-md-5">
                <div class="post-entry-1">
                  <a href="/News/{{ $newsContent->news_category }}/{{ $newsContent->title }}/{{ $newsContent->id }}"><img src="{{ url('storage/'.$newsContent->picture) }}" alt="Image" class="img-thumbnail img-fluid" height="30px" width="100%"></a>
                  <h2><a href="/News/{{ $newsContent->news_category }}/{{ $newsContent->title }}/{{ $newsContent->id }}">{{ $newsContent->title }}</a></h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                  <!-- <div class="post-meta">
                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                  </div> -->
                </div>
              </div>
              
              <div class="col-md-7">
              @foreach($latestNewsContents as $latestNewsContent)
                <div class="post-entry-2 d-flex">
                <img src="{{ url('storage/'.$latestNewsContent->picture) }}" alt="Image" class="thumbnail">
                  &nbsp;&nbsp;
                  <div class="contents bg-light">
                    <h3><a href="/News/{{ $latestNewsContent->news_category }}/{{ $latestNewsContent->title }}/{{ $latestNewsContent->id }}">{{ $latestNewsContent->title }}</a></h3>
                    <span class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</span>
                    <!-- <div class="post-meta">
                      <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                      <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                    </div> -->
                  </div>
                </div>
              @endforeach
              </div>
            </div>
          </div>
          <!-- the ads part -->
          <div class="col-lg-2 bg-light">
            

          </div>
        </div>
      </div>
    </div>
    <!-- END OF PART 2 -->

    
    <!-- PART 3 -->
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-10">
            <div id="table_data">
                @include('news.displayed_all_ghana_news')
            </div>
          </div>
          <!-- end of 1st 6column -->
          <div class="col-lg-2 bg-light"></div>
        </div>
      </div>
    </div>
    <!-- END OF PART 3 -->

@endsection

@section('scripts')
<script>
        $(document).ready(function(){
            $(document).on('click', '.pagination a', function(event){
              event.preventDefault();
              var page = $(this).attr('href').split('page=')[1];
              fetch_data(page);
            });

            function fetch_data(page){
              $.ajax({
                url:"/News/Next/{{$newscategory['name']}}/fetch_data?page="+page,
                success:function(data){
                    $('#table_data').html(data);
                }
              }).fail(function(jqXHR, ajaxOptions, thrownError){
              alert('No response from server');
              });
            }
        });
</script>

@endsection