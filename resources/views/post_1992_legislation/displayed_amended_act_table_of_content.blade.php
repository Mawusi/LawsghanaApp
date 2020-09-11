

<div class="row">
    {{-- <div class="col-md-12"> --}}

        <span style="color: blue;">{{ $amendedAct['title'] }}</span>
        {{-- style="display:none;" --}}
        <div class="container" style="display:none;">
            <a href="/post_1992_legislation/display_amended_sections/{{$amendedAct['title']}}" class="single_container_details_link_amend"><p>Click to View details</p>
            </a>
        </div>
    
           
        <div class="container">
            {{-- <a href="/post_1992_legislation/amended_preamble/{{ $amendedAct['id'] }}" class="single_preamble_amended_link" style="color: blue;">Introductory Text</a> --}}

            <div style="height: auto;">
                @include('post_1992_legislation.displayed_amended_act_parts_section')
            </div>
        </div>  
    {{-- </div>  --}}
                         
</div>
