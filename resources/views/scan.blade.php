@extends('layouts.app')

@section('content')
<h1>Hellow</h1>
    
<ais-index
    app-id="latency"
    api-key="3d9875e51fbd20c7754e65422f7ce5e1"
    index-name="bestbuy"
  >
    <ais-search-box></ais-search-box>
    <ais-results>
      <template scope="{ result }">
        <h2>
          <ais-highlight :result="result" attribute-name="name"></ais-highlight>
        </h2>
        <p>Helloe</p>
      </template>
    </ais-results>
  </ais-index>

  @endsection