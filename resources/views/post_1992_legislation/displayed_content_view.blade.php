<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="{{ asset('css/tooltipster.bundle.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/tooltipster-sideTip-borderless.min.css') }}" type="text/css">    
</head>

<body>


    <div class="header_only" style="border: .1px solid #ddd;">
        <p style="padding-top: 7px; padding-bottom: .1px; padding-left: 16px; padding-right: 16px;"><b>{{ $allPost1992Article['section'] }}</b>
            @if (Route::has('login'))
                @auth                        
                        <a class="bookmarking" href="javascript:;" rel="/bookmarks/{{$allPost1992Article['post_act']}}/{{$allPost1992Article['section']}}/{{$allPost1992Article['id']}}/{{ Auth::user()->name }}/{{ Auth::user()->id }}/{{ Auth::user()->id }}{{$allPost1992Article['section']}}/{{$allPost1992Article['act_group']}}/{{$allPost1992Article['act_id']}}">
                            <i title="Bookmark this section" style="color:blue;" id="bookmarked" class="tooltips glyphicon glyphicon-bookmark pull-right"></i>
                        </a>
                    @else
                    <i style="color:blue;" class="glyphicon glyphicon-bookmark hidden"></i>
                @endauth
            @endif
        </p>
        
    </div>

    <div style="margin-bottom: 5px;">
        &nbsp;&nbsp;&nbsp;&nbsp;<a class="pull-right" id="print_options" href="#"> Print Options</a>
        <div class="menu_options pull-right" style="display: none;">
            @if (Route::has('login'))
                @auth
                    <a href="/post_1992_legislation/pdf_content/{{$allPost1992Article['post_act']}}/{{ $allPost1992Article['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
                    {{-- <a href="/post_1992_legislation/plain-content/{{ $allPost1992Article['post_act'] }}/{{ $allPost1992Article['id'] }}" class="checking_link" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp; --}}
                    <a href="/post_1992_legislation/print_section_content/{{ $allPost1992Article['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    @else

                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button> --}}
                    <a href="" data-toggle="modal" data-target="#myModals"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
                    <a href="" data-toggle="modal" data-target="#myModals"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <div class="modal fade" id="myModals" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title" id="myModalLabel">Kindly <span style="color:#3490dc;">Log In</span> or <span style="color:#3490dc;">Register</span> to Create An Account</h4>
                            </div>
                            <div class="modal-body">
                                <a class="btn btn-sm btn-primarys" href="{{ route('login') }}">Login</a>
                                <a class="btn btn-sm btn-primarys" href="{{ route('register') }}">Register</a>                            
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                    </div>

                    {{-- <a href=""><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF Download</a>&nbsp;&nbsp;||&nbsp; --}}
                    

                    {{-- <a href="{{ route('login') }}">Login </a> or

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register an account</a>&nbsp;&nbsp;&nbsp;&nbsp;
                    @endif --}}

                @endauth
            @endif
            </div>
    </div>

    <div class="content">            
        <p>{!! $allPost1992Article['content'] !!}</p>
    </div>

{{-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.10.0.min.js"></script> --}}
{{-- <script src="{{ asset('js/tooltipster.bundle.min.js') }}"></script> --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>

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

   


