            

<?php $oldchapter = ''; $c=1; $closure = ''; ?>

<div class="panel-group table" id="accordion" role="tablist" aria-multiselectable="true">

    @foreach($constitutionContents as $constitutionContent )    
            <?php 
                $ids[] = $constitutionContent->id;
                $closure = ($oldchapter !== '' && $oldchapter !== $constitutionContent->chapter)?"</div></div></div>":"";
                if ($oldchapter !== $constitutionContent->chapter){
                    $c++;
                    echo $closure;
            ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading{{$c}}">
                <p class="panel-title" style="white-space:normal; line-height: 0.4cm;"> 
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $c }}" aria-expanded="true" aria-controls="collapse_{{$c}}"><b class="small">{{
                    ($constitutionContent->chapter == '')? 'SECTIONS':$constitutionContent->chapter}}</b></a>
                </p>
            </div>

            <div id="collapse_{{$c}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$c}}">
                <div class="panel-body" style="padding:0em;">
    <?php }
                        $oldchapter = $constitutionContent->chapter; ?>
            <!-- <table class="table-condensed">
                    <tr>
                        <td>      -->
                <a data-scroll-to="body"
                data-scroll-focus="body"
                data-scroll-speed="400"
                data-scroll-offset="-60" class="constitution_content_link list-group-item" style="white-space:normal; line-height: 0.4cm;" sid="{{ $constitutionContent->id }}"  href="/constitution/Republic/constitution_content/{{ $constitutionContent->id }}">
                <li style="list-style: none;">{{ $constitutionContent->section }}</li>
                </a>      
            <!-- </td>
                    </tr>      
                </table>  -->
    @endforeach 
        <input type="hidden" id="constitution_act_contents" value="<?php echo json_encode($ids); ?>" />
            </div>
        </div>
    </div>

</div>

    