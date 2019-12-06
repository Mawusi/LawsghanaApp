@extends('extenders.main')

@section('title', ucwords(strtolower($footer_note['footer_note'])))


@section('assets')
    <link rel="stylesheet" href="{{ asset('css/second_nav.css') }}">
@endsection

@section('content')

<div class="container-fluid content">
    <div class="row">
        <div class="col-md-9">
            <div class="shadow-background">
                <div style="padding: 10px 65px 10px 65px;">
                    <div class="row">
                        <div class="container">
                                <h3><b>{{$footer_note['footer_note']}}</b></h3>
                                <hr>
                                {!! $footer_note['content'] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
                    <!-- for the ads -->
                    @include('extenders.ads')
    </div>
</div>

@endsection
