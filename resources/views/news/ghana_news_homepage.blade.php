@extends('extenders.news-main')

@section('title', 'Ghana News')

@section('assets')
    
@endsection



@section('content')

    <!-- The Carousel Part 1 -->
    <div class="site-section py-0">
      <div class="owl-carousel hero-slide owl-style">

      @foreach($newsContents as $newsContent)
        <div class="site-section">
          <div class="container">
            <div class="half-post-entry d-block d-lg-flex">
              <div class="img-bg" style="background-image: url('{{ asset('logo/gh_flag.png')}}');"></div>
              <div class="contents bg-light">
                <span class="caption">Editor's Pick</span>
                <h2><a href="/{{ $newsContent->news_category }}/{{ $newsContent->title }}/{{ $newsContent->id }}">{{ $newsContent->title }}</a></h2>
                <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate vero obcaecati natus adipisci necessitatibus eius, enim vel sit ad reiciendis. Enim praesentium magni delectus cum, tempore deserunt aliquid quaerat culpa nemo veritatis, iste adipisci excepturi consectetur doloribus aliquam accusantium beatae?</p>
                <div class="post-meta">
                  <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">Food</a></span>
                  <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach  

      </div>
    </div>
    <!-- End of The Carousel Part 1 -->
  

    <!-- PART 2 -->
    <div class="site-section">
      <div class="container">
      <div class="row">
          <div class="col-lg-10">
            <div class="row">
              <div class="col-12">
                <div class="section-title">
                  <h2>The latest News Entry shows here</h2>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5">
                <div class="post-entry-1">
                  <a href="post-single.html"><img src="{{ asset('/logo/images.jpg') }}" alt="Image" class="img-thumbnail img-fluid" width="100%"></a>
                  <h2><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</p>
                  <div class="post-meta">
                    <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                    <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                  </div>
                </div>
              </div>
              <div class="col-md-7">
                <div class="post-entry-2 d-flex">
                  <div class="thumbnail" style="background-image: url('{{ asset('logo/images.jpg')}}');"></div>
                  &nbsp;&nbsp;
                  <div class="contents bg-light">
                    <h3><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h3>
                    <span class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</span>
                    <div class="post-meta">
                      <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                      <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                    </div>
                  </div>
                </div>

                <div class="post-entry-2 d-flex">
                  <div class="thumbnail" style="background-image: url('{{ asset('logo/images.jpg')}}');"></div>
                  &nbsp;&nbsp;
                  <div class="contents bg-light">
                    <h3><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h3>
                    <span class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</span>
                    <div class="post-meta">
                      <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                      <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                    </div>
                  </div>
                </div>

                <div class="post-entry-2 d-flex">
                  <div class="thumbnail" style="background-image: url('{{ asset('logo/images.jpg')}}');"></div>
                  &nbsp;&nbsp;
                  <div class="contents bg-light">
                    <h3><a href="blog-single.html">News Needs to Meet Its Audiences Where They Are</a></h3>
                    <span class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</span>
                    <div class="post-meta">
                      <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                      <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-2 bg-light">
            

          </div>
          
        </div>
        {{--
        <div class="row">
          <div class="col-lg-12">

          
          <!-- Title row -->
            <div class="row">
              <div class="col-12">
                <div class="section-title">
                  <h2>The latest News Entry shows here</h2>
                </div>
              </div>
            </div>
            <!-- End of title row -->
            

            <div class="row">
              <!-- The big part -->
              <div class="col-md-6">
                <div class="post-entry-1">
                  <a href="post-single.html"><img src="{{ asset('/logo/images.jpg') }}" alt="Image" class="thumbnail"></a>
                </div>
              </div>
              <!-- End of the big part -->

              <!-- The other part -->
              <div class="col-md-6">
                <div class="post-entry-2 d-flex">
                @foreach($latestNewsContents as $latestNewsContent)
                  <div class="contents bg-light">
                        <h2><a href="blog-single.html">{{ $latestNewsContent->title }}</a></h2> 
                        &nbsp;&nbsp;
                        <p class="m-b3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam. 
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam. 
                        </p>
                        <div class="post-meta">
                          <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
                          <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
                        </div>
                  </div>
                @endforeach  
                </div>
              </div>
              <!-- The other part -->
            </div>

          </div>
        </div>
        --}}
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
          <div class="col-lg-2 bg-light">
            

          </div>
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
                url:"/Ghana-News/fetch_data?page="+page,
                success:function(data){
                    $('#table_data').html(data);
                }
              });
            }
        });
</script>
@endsection