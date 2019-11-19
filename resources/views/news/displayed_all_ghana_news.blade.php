  
<div class="container">
    @foreach($newsSelectors as $newsContent)
    <div class="post-entry-2 d-flex">
     <!-- <div class="thumbnail" style='background-image: url("{{ '/storage/' . $newsContent->picture }}"); height: 200px; width: 200px;'></div> -->
     <img src="{{ url('storage/'.$newsContent->picture) }}" alt="Image" class="thumbnail" style="height: 40px; width: 40px;">
     <!-- <div class="img-bg" style="background-image: url('storage/'.$newsContent->picture);"></div> -->
        <!-- <div class="thumbnail" style="background-image: url('{{ asset('logo/images.jpg')}}');"></div> -->
        <!-- <div class="thumbnail" style="background-image: url('{{ asset('logo/images.jpg')}}');"></div> -->
        &nbsp;&nbsp;
        <div class="contents bg-light">
        <h2><a href="/News/{{ $newsContent->news_category }}/{{ $newsContent->title }}/{{ $newsContent->id }}">{{ $newsContent->title }}</a></h2>
        <!-- <span class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</span> -->
        <!-- <div class="post-meta">
            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
        </div> -->
        </div>
    </div>
    @endforeach
        <div class="col-12 d-flex justify-content-center pt-4">    
        {!! $newsSelectors->links() !!}
        </div>
</div>


