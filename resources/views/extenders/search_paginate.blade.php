<div class="">
    @foreach ($posts as $post)
    <div class="search-well">
      <h5 style="color:blue;"><b>{!! $post->post_act !!}</b></h5>
      <a href="/post_1992_legislation/content/{{$post->id}}" target="_blank"><b>{!! $post->section !!}</b></a>
      <br><br>
      {!! $post->content !!}
    </div>
    <br>
    @endforeach

    {{-- @foreach ($regulations as $regulation)
    <div class="search-well">
      <h5 style="color:blue;"><b>{!! $regulation->regulation_title !!}</b></h5>
      <a href="/post_1992_legislation/content/{{$post->id}}" target="_blank"><b>{!! $regulation->section !!}</b></a>
      <br><br>
      {!! $regulation->content !!}
    </div>
    <br>
    @endforeach

    @foreach ($amends as $amend)
    <div class="search-well">
      <h5 style="color:blue;"><b>{!! $amend->act_title !!}</b></h5>
      <a href="/post_1992_legislation/amended_acts/content/{{$amend->id}}" target="_blank"><b>{!! $amend->section !!}</b></a>
      <br><br>
      {!! $amend->content !!}
    </div>
    <br>
    @endforeach

    @foreach ($amends_regs as $amends_reg)
    <div class="search-well">
      <h5 style="color:blue;"><b>{!! $amends_reg->title !!}</b></h5>
      <a href="/post_1992_legislation/amended_regulation_acts/content/{{$amends_reg->id}}" target="_blank"><b>{!! $amends_reg->section !!}</b></a>
      <br><br>
      {!! $amends_reg->content !!}
    </div>
    @endforeach  --}}

    <center><div>{!! $posts->links() !!}</div></center>
</div>

{{-- <div class="grid">
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Mercury</h3>
    <p class="symbol">Hg</p>
    <p class="number">80</p>
    <p class="weight">200.59</p>
  </div>
  <div class="element-item metalloid " data-category="metalloid">
    <h3 class="name">Tellurium</h3>
    <p class="symbol">Te</p>
    <p class="number">52</p>
    <p class="weight">127.6</p>
  </div>
  <div class="element-item post-transition metal " data-category="post-transition">
    <h3 class="name">Bismuth</h3>
    <p class="symbol">Bi</p>
    <p class="number">83</p>
    <p class="weight">208.980</p>
  </div>
  <div class="element-item post-transition metal " data-category="post-transition">
    <h3 class="name">Lead</h3>
    <p class="symbol">Pb</p>
    <p class="number">82</p>
    <p class="weight">207.2</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Gold</h3>
    <p class="symbol">Au</p>
    <p class="number">79</p>
    <p class="weight">196.967</p>
  </div>
  <div class="element-item alkali metal " data-category="alkali">
    <h3 class="name">Potassium</h3>
    <p class="symbol">K</p>
    <p class="number">19</p>
    <p class="weight">39.0983</p>
  </div>
  <div class="element-item alkali metal " data-category="alkali">
    <h3 class="name">Sodium</h3>
    <p class="symbol">Na</p>
    <p class="number">11</p>
    <p class="weight">22.99</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Cadmium</h3>
    <p class="symbol">Cd</p>
    <p class="number">48</p>
    <p class="weight">112.411</p>
  </div>
  <div class="element-item alkaline-earth metal " data-category="alkaline-earth">
    <h3 class="name">Calcium</h3>
    <p class="symbol">Ca</p>
    <p class="number">20</p>
    <p class="weight">40.078</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Rhenium</h3>
    <p class="symbol">Re</p>
    <p class="number">75</p>
    <p class="weight">186.207</p>
  </div>
  <div class="element-item post-transition metal " data-category="post-transition">
    <h3 class="name">Thallium</h3>
    <p class="symbol">Tl</p>
    <p class="number">81</p>
    <p class="weight">204.383</p>
  </div>
  <div class="element-item metalloid " data-category="metalloid">
    <h3 class="name">Antimony</h3>
    <p class="symbol">Sb</p>
    <p class="number">51</p>
    <p class="weight">121.76</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Cobalt</h3>
    <p class="symbol">Co</p>
    <p class="number">27</p>
    <p class="weight">58.933</p>
  </div>
  <div class="element-item lanthanoid metal inner-transition " data-category="lanthanoid">
    <h3 class="name">Ytterbium</h3>
    <p class="symbol">Yb</p>
    <p class="number">70</p>
    <p class="weight">173.054</p>
  </div>
  <div class="element-item noble-gas nonmetal " data-category="noble-gas">
    <h3 class="name">Argon</h3>
    <p class="symbol">Ar</p>
    <p class="number">18</p>
    <p class="weight">39.948</p>
  </div>
  <div class="element-item diatomic nonmetal " data-category="diatomic">
    <h3 class="name">Nitrogen</h3>
    <p class="symbol">N</p>
    <p class="number">7</p>
    <p class="weight">14.007</p>
  </div>
  <div class="element-item actinoid metal inner-transition " data-category="actinoid">
    <h3 class="name">Uranium</h3>
    <p class="symbol">U</p>
    <p class="number">92</p>
    <p class="weight">238.029</p>
  </div>
  <div class="element-item actinoid metal inner-transition " data-category="actinoid">
    <h3 class="name">Plutonium</h3>
    <p class="symbol">Pu</p>
    <p class="number">94</p>
    <p class="weight">(244)</p>
  </div>
</div> --}}
