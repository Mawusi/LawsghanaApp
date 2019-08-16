
<div style="margin-top: 0.1em;">
    <div class="header" style="padding: 5px 1px 0.1px 1px;">
        <p><b>{{ $ghana_act_amended['title'] }}</b></p>
    </div>

    <div class="content">
    {!! $ghana_act_amended['preamble'] !!}
      <hr>	
    @foreach($ghanaArticlesAmendeds as $ghanaArticlesAmended)
      <h4><b>{!! $ghanaArticlesAmended->section !!}</b></h4>
        {!! $ghanaArticlesAmended->articles !!}
      <hr><hr>
    @endforeach
    </div>
</div









