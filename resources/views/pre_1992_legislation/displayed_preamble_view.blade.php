
<div style="margin-top: 0.1em;">
	<div class="header_only" style="margin-bottom: 5px;">
		<!--<p><b>{{$allPre1992Act['title']}}</b></p>-->
        <p><b>Introductory Text</b></p>
	 </div>
	 
	 <a id="print_options" href="#">Print & Download&raquo;</a>
    <div class="menu_options pull-right" style="display: none;">
        <a href="/pre_1992_legislation/pdf/preamble_content/{{$allPre1992Act['title']}}/{{ $allPre1992Act['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
        <a href="/pre_1992_legislation/plain_preamble_content/{{ $allPre1992Act['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
        <a href="/pre_1992_legislation/print_preamble_content/{{ $allPre1992Act['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

 	<div class="content">	
    	<p>{!! $allPre1992Act['preamble'] !!}</p> 
 	</div>
</div>


