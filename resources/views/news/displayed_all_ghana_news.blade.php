  
<div class="container">
    @foreach($newsContents as $newsContent)
    <div class="post-entry-2 d-flex">
        <div class="thumbnail" style="background-image: url('{{ asset('logo/images.jpg')}}');"></div>
        &nbsp;&nbsp;
        <div class="contents bg-light">
        <h3><a href="/{{ $newsContent->news_category }}/{{ $newsContent->title }}/{{ $newsContent->id }}">{{ $newsContent->title }}</a></h3>
        <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi temporibus praesentium neque, voluptatum quam quibusdam.</span>
        <div class="post-meta">
            <span class="d-block"><a href="#">Dave Rogers</a> in <a href="#">News</a></span>
            <span class="date-read">Jun 14 <span class="mx-1">&bullet;</span> 3 min read <span class="icon-star2"></span></span>
        </div>
        </div>
    </div>
    @endforeach
    <div class="col-12 d-flex justify-content-center pt-4">
        {!! $newsContents->links() !!}
    </div>
</div>
