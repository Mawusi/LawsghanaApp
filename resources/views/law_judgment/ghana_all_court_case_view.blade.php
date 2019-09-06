
<div class="header_only" style="margin-bottom: 5px;">
    <p><b>{{ $allGhanaLaw['case_title'] }}</b></p>
</div>

<a id="print_options" href="#">Print & Download&raquo;</a>
    <div class="menu_options pull-right" style="display: none;">
        <a href=""><img alt="Brand" src="{{ asset('/logo/pdf.png') }}" style="width:1.5em;">&nbsp;PDF</a>&nbsp;&nbsp;||&nbsp;
        <a href="" target="_blank">Plain View</a>&nbsp;&nbsp;||&nbsp;
        <a href="" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span>&nbsp;Print Preview</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>

<div class="content">	
    <p>{!! $allGhanaLaw['content'] !!}</p> 
</div>