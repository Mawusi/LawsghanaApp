            

<?php $oldpart = ''; $c=1; $closure = ''; ?>

<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

    @foreach($allAmendedArticles as $allAmendedArticle )    
            <?php 
            
                $ids[] = $allAmendedArticle->id;
                $closure = ($oldpart !== '' && $oldpart !== $allAmendedArticle->part)?"</div></div></div>":"";
                if ($oldpart !== $allAmendedArticle->part){
                    $c++;
                    echo $closure;
            ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading{{$c}}">
                <span style="line-height: 0.7cm;"> 
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $c }}" aria-expanded="true" aria-controls="collapse_{{$c}}">
                    <span style="color: blue;">{{($allAmendedArticle->part == '')? 'Sections':$allAmendedArticle->part}}</span>
                </a>
                </span>
            </div>

            <div id="collapse_{{$c}}" class="collapse show" role="tabpanel" aria-labelledby="heading{{$c}}">
                <div class="panel-body" style="padding:0em;">
    <?php }
                        $oldpart = $allAmendedArticle->part; ?>
                    
                <ul>
                    <li>
                        <a data-scroll-to="body"
                        data-scroll-focus="body"
                        data-scroll-speed="400"
                        data-scroll-offset="-60" class="amendments_content_link" sid="{{ $allAmendedArticle->id }}"  href="/post_1992_legislation/amended_acts/content/{{ $allAmendedArticle->id }}">
                        <span style="color:black;">{{ $allAmendedArticle->section }}</span>
                        </a>
                    </li>
                </ul>
                    
    @endforeach 
                <input type="hidden" id="amendments_act_contents" value="<?php echo json_encode($ids); ?>" />
            </div>
        </div>
    </div>

</div>

    