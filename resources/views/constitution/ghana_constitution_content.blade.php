<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{ asset('css/tooltipster.bundle.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/tooltipster-sideTip-borderless.min.css') }}" type="text/css">    
    <style>
        .nav-links{
        background-color: #f5f5f5;
        border: .1px solid #ddd;
        border-radius: .25rem;
        display: block;
        padding: .1rem .9rem;
        position: -webkit-sticky;
        position: sticky;
        top: 0%;
        }
    </style>   
</head>

<body>
    {{-- For the bookmark --}}
    <div class="nav-links">
        <span class="text-left">{{ $constitutionContent['section'] }}
            {{-- @if (Route::has('login'))
                @auth                        
                        <a class="bookmarking" href="javascript:;" rel="/bookmarks/{{$allPre1992Article['pre_1992_act']}}/{{$allPre1992Article['section']}}/{{$allPre1992Article['id']}}/{{ Auth::user()->name }}/{{ Auth::user()->id }}/{{ Auth::user()->id }}{{$allPre1992Article['section']}}/{{$allPre1992Article['act_group']}}/{{$allPre1992Article['act_id']}}">
                            <i title="Bookmark this section" style="color:blue;" id="bookmarked" class="tooltips glyphicon glyphicon-bookmark pull-right"></i>
                        </a>
                    @else
                    <i style="color:blue;" class="glyphicon glyphicon-bookmark hidden"></i>
                @endauth
            @endif --}}
        </span>
    </div>

    <div style="margin-bottom: 1px;">
        &nbsp;&nbsp;&nbsp;&nbsp;<a class="pull-right" id="print_options" href="#"> Print Options</a>
        <div class="menu_options pull-right" style="display: none;">

            @if (Route::has('login'))
                @auth
                <a href="/constitution/Republic/pdf_article_content/{{$constitutionContent['chapter']}}/{{ $constitutionContent['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
                {{-- <a href="/constitution/Republic/plain_article_content/{{ $constitutionContent['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp; --}}
                <!-- <a href="/post_1992_legislation/pdf_content/{{ $constitutionContent['id'] }}"><img alt="Brand" src="{{ asset('/logo/word.png') }}" style="width:1.5em;">&nbsp;WORD</a>&nbsp;&nbsp;||&nbsp; -->
                <a href="/constitution/Republic/print_article_content/{{ $constitutionContent['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    @else

                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> --}}
                    <a href="" data-toggle="modal" data-target="#myModals"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
                    <a href="" data-toggle="modal" data-target="#myModals"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <!-- Modal -->
                    <div class="modal fade" id="myModals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><b>Kindly Log In or Sign Up to Create An Account</b></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <a class="btn btn-sm bg-header-color text-white" href="{{ route('login') }}">Login</a>
                                <a class="btn btn-sm bg-header-color text-white" href="{{ route('register') }}">Sign Up</a>
                            </div>
                        </div>
                        </div>
                    </div> 
                @endauth
            @endif
        </div>
    </div>

    <div class="content">
        <p>{!! $constitutionContent['articles'] !!}</p>
    </div>
{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.0.min.js"></script> --}}
{{-- <script src="{{ asset('js/tooltipster.bundle.min.js') }}"></script> --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

<script>
    $(".section_id").click(function(e){
        e.preventDefault();
        var section_id = $(this).attr("rel");
        console.log(section_id);

        $.ajax({
            url: section_id,
            type: "GET",
            success:function(response){
            if(response.success){
                  $("#bookmarked").notify(
                      response.message,
                { position:"left", className: "info", autoHideDelay: 900000}
                );
            }else{
                $("#bookmarked").notify(
               "Section to Download",
                { position:"left", className: "success", autoHideDelay: 10000}
                );
              }
            },
            error:function (){
                $("#bookmarked").notify(
               "Issue with database entry",
                { position:"left", className: "error" }
                );
            }
        });

    });
    
</script>

<script>
    $(".download_link").click(function(e){
        e.preventDefault();
        var download_link = $(this).attr("rel");
        $('.section_id').trigger("click");
       
        $.ajax({
            url: download_link,
            type: "GET",
        });
    });  
</script>

<script>
    $('.tooltips').tooltipster({
        theme: 'tooltipster-borderless'
    });
</script>

<script>
    $('.bookmarking').click(function(e){
    e.preventDefault();
        var targetUrl = $(this).attr('rel');
    $.ajax({
            url: targetUrl,
            type: "GET",
            success:function(response){
            if(response.success){
                  $("#bookmarked").notify(
                      response.message,
                { position:"left", className: "info" }
                );
            }else{
                $("#bookmarked").notify(
               "Section bookmarked",
                { position:"left", className: "success" }
                );
              }
            },
            error:function (){
                $("#bookmarked").notify(
               "Issue with database entry",
                { position:"left", className: "error" }
                );
            }
        });
    });
</script>

</body>

</html>


