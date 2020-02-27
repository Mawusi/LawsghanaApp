
<div>
    <div class="header_only" style="border: .1px solid #ddd;">
        <p style="padding-top: 7px; padding-bottom: .1px; padding-left: 16px; padding-right: 16px;"><b>{{ $allPost1992Article['section'] }}</b></p>
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
                    <a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF Download</a>&nbsp;&nbsp;||&nbsp;
                    <a href="" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <br>
                                <div class="container">
                                    <h3>Kindly <span style="color:blue;"><b>Log In</b></span> or <span style="color:blue;"><b>Register</b></span> to Create An Account</h3>
                                    <br>
                                    <a class="btn btn-sm btn-primary" href="{{ route('login') }}">Login</a>
                                    <a class="btn btn-sm btn-primary" href="{{ route('register') }}">Register</a>
                                </div>
                                <br>
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

</div>








   


