            

<?php $oldpart = ''; $c=1; $closure = ''; ?>

<div class="panel-group table" id="accordion" role="tablist" aria-multiselectable="true">

    @foreach($allRegulationArticles as $allRegulationArticle )    
            <?php 
            
                $ids[] = $allRegulationArticle->id;
                $closure = ($oldpart !== '' && $oldpart !== $allRegulationArticle->part)?"</div></div></div>":"";
                if ($oldpart !== $allRegulationArticle->part){
                    $c++;
                    echo $closure;
            ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading{{$c}}">
                <p style="white-space:normal; line-height: 0.3cm;" class="panel-title"> 
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $c }}" aria-expanded="true" aria-controls="collapse_{{$c}}"><b class="small">{{
                    ($allRegulationArticle->part == '')? 'SECTIONS':$allRegulationArticle->part}}</b></a>
                </p>
            </div>

            <div id="collapse_{{$c}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$c}}">
                <div class="panel-body" style="padding:0em;">
    <?php }
                        $oldpart = $allRegulationArticle->part; ?>
                    
                                <a data-scroll-to="body"
                                data-scroll-focus="body"
                                data-scroll-speed="400"
                                data-scroll-offset="-60" class="regulation_content_link list-group-item" style="white-space:normal; line-height: 0.3cm;" sid="{{ $allRegulationArticle->id }}"  href="/post_1992_legislation/regulation_act/content/{{ $allRegulationArticle->id }}">
                                <li style="list-style: none;">
                                    {{ $allRegulationArticle->section }}
                                </li>
                                </a> 
    @endforeach 
                <input type="hidden" id="regulation_act_contents" value="<?php echo json_encode($ids); ?>" />
            </div>
        </div>
    </div>

</div>

    