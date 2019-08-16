            

<?php $oldchapter = ''; $c=1; $closure = ''; ?>

<div class="panel-group table" id="accordion" role="tablist" aria-multiselectable="true">

    @foreach($constitutionContentAmendeds as $constitutionContentAmended )    
            <?php 
                $ids[] = $constitutionContentAmended->id;
                $closure = ($oldchapter !== '' && $oldchapter !== $constitutionContentAmended->chapter)?"</div></div></div>":"";
                if ($oldchapter !== $constitutionContentAmended->chapter){
                    $c++;
                    echo $closure;
            ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading{{$c}}">
                <p class="panel-title" style="line-height: 0.1cm;"> 
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $c }}" aria-expanded="true" aria-controls="collapse_{{$c}}"><b class="small">{{
                    ($constitutionContentAmended->chapter == '')? 'SECTIONS':$constitutionContentAmended->chapter}}</b></a>
                </p>
            </div>

            <div id="collapse_{{$c}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$c}}">
                <div class="panel-body"  style="padding:0em;">
    <?php }
                        $oldchapter = $constitutionContentAmended->chapter; ?>
                 
                        <a data-scroll-to="body"
                        data-scroll-focus="body"
                        data-scroll-speed="400"
                        data-scroll-offset="-60" class="constitution_amended_content_link list-group-item" style="line-height: 0.1cm;" sid="{{ $constitutionContentAmended->id }}"  href="/constitution_amended/Republic/constitution_content/{{ $constitutionContentAmended->id }}">
                        <li style="list-style: none;">{{ $constitutionContentAmended->section }}</li>
                        </a>      
                    
    @endforeach 
        <input type="hidden" id="constitution_amended_act_contents" value="<?php echo json_encode($ids); ?>" />
            </div>
        </div>
    </div>

</div>

    