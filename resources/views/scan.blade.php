@extends('layouts.app')

@section('content')
    
<template>
    <ais-instant-search index-name="demo_ecommerce" :search-client="searchClient">
      <div class="left-panel">
        <ais-clear-refinements />
        <h2>Brands</h2>
        <ais-refinement-list attribute="brand" searchable />
        <ais-configure :hitsPerPage="8" />
      </div>
      <div class="right-panel">
        <ais-search-box />
        <ais-hits>
          <div slot="item" slot-scope="{ item }">
            <h2>{{ item.name }}</h2>
          </div>
        </ais-hits>
        <ais-pagination />
      </div>
    </ais-instant-search>
  </template>

  @endsection