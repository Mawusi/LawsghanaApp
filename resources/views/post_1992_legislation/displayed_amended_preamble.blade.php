
<div>
	<div class="header_only" style="border: .1px solid #ddd;">
		<!--<p><b>{{$amendedAct['title']}}</b></p>-->
        <p style="padding-top: 7px; padding-bottom: .1px; padding-left: 16px;"><b>Introductory Text</b></p>
	 </div>
	 
	<div style="margin-bottom: 5px;">
		<a class="pull-right" id="print_options" href="#">Print Options</a>
		<div class="menu_options pull-right" style="display: none;">
			<a href="/post_1992_legislation/pdf/amended_act/preamble_content/{{$amendedAct['title']}}/{{ $amendedAct['id'] }}"><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
			<a href="/post_1992_legislation/plain_amended_act/preamble_content/{{ $amendedAct['id'] }}" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
			<a href="/post_1992_legislation/print_amended_act/preamble_content/{{ $amendedAct['id'] }}" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</div>
	</div>

 	<div class="content">	
    	<p>{!! $amendedAct['preamble'] !!}</p> 
 	</div>
</div>


