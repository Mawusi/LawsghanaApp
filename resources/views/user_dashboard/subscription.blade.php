@extends('layouts.app')

@section('title', 'Subscription Plan')

@section('assets')
    <style type="text/css">
        .card-pricing.popular {
        z-index: 1;
        border: 3px solid #007bff;
        }
        .card-pricing .list-unstyled li {
        padding: .5rem 0;
        color: #6c757d;
        }
    </style>
@endsection


@section('content')

<div class="container mb-5 mt-3">
    <h1 class="text-muted text-center mb-3">Choose your package<span><h4 class="text-danger">......coming soon</h4></span></h1>
    <div class="pricing card-deck flex-column flex-md-row mb-3">
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Starter</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">Gh<span class="price">50</span>
                    {{-- <span class="h6 text-muted ml-2">/ per month</span></h1> --}}
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    {{-- <li>Up to 5 users</li> --}}
                    {{-- <li>Basic support on Github</li> --}}
                    <li>Read and Access all documents</li>
                    <li>Download 5O documents for 3months</li>
                </ul>
                <button type="button" class="btn btn-outline-secondary mb-3">Order now</button>
            </div>
        </div>
        <div class="card card-pricing popular shadow text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Professional</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">Gh<span class="price">100</span>
                    {{-- <span class="h6 text-muted ml-2">/ per month</span></h1> --}}
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    {{-- <li>Up to 5 users</li> --}}
                    {{-- <li>Basic support on Github</li> --}}
                    <li>Read and Access all documents</li>
                    <li>Download 10O documents for 6months</li>
                </ul>
                <a href="/" target="_blank" class="btn btn-primary mb-3">Order Now</a>
            </div>
        </div>
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Business</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="45">Gh<span class="price">180</span>
                    {{-- <span class="h6 text-muted ml-2">/ per month</span></h1> --}}
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    {{-- <li>Up to 5 users</li> --}}
                    {{-- <li>Basic support on Github</li> --}}
                    <li>Read and Access all documents</li>
                    <li>Download 20O documents for 1 year</li>
                </ul>
                <button type="button" class="btn btn-outline-secondary mb-3">Order now</button>
            </div>
        </div>
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Unlimited</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="60">Gh<span class="price">200</span>
                    {{-- <span class="h6 text-muted ml-2">/ per month</span></h1> --}}
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    {{-- <li>Up to 5 users</li> --}}
                    <li>Read and Access all documents</li>
                    <li>Download all documents for 1 year</li>
                    {{-- <li>Receive email notification of new documents</li> --}}
                </ul>
                <button type="button" class="btn btn-outline-secondary mb-3">Order now</button>
                {{-- <p class="alert alert-primary" role="alert">
                    Receive email notification of current documents
                </p> --}}
                <div class="p-1 mb-0 bg-success text-white">Receive email notification of current documents</div>

            </div>
        </div>
    </div>
</div>
{{-- <div class="text-muted mt-5 mb-5 text-center small">by : <a class="text-muted" target="_blank" href="http://totoprayogo.com">totoprayogo.com</a></div> --}}



@endsection