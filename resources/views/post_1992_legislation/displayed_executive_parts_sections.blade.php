<?php $oldpart = ''; $c=1; $closure = ''; ?>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
            @foreach($allExecutiveArticles as $allExecutiveArticle)    
                    <?php
                    
                        $ids[] = $allExecutiveArticle->id;
                        $closure = ($oldpart !== '' && $oldpart !== $allExecutiveArticle->part)?"</div></div></div>":"";
                        if ($oldpart !== $allExecutiveArticle->part){
                            $c++;
                            echo $closure;
                    ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading{{$c}}">
                    <p style="white-space:normal; line-height: 0.4cm;" class="panel-title"> 
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $c }}" aria-expanded="true" aria-controls="collapse_{{$c}}"> <b class="small">{{($allExecutiveArticle->part == '')? 'SECTIONS':$allExecutiveArticle->part}}</b>
                    </a>
                    </p>
                </div>
                <div id="collapse_{{$c}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$c}}">
                    <div class="panel-body" style="padding:0em;">
            <?php }
                                $oldpart = $allExecutiveArticle->part;
            ?>
                             
                                <a data-scroll-to="body"
                                data-scroll-focus="body"
                                data-scroll-speed="400"
                                data-scroll-offset="-60" class="executive_content_link list-group-item" style="white-space:normal; line-height: 0.4cm;" sid="{{ $allExecutiveArticle->id }}"  href="/post-1992-legislation/executive-acts/content/{{ $allExecutiveArticle->id }}">
                                {{ $allExecutiveArticle->section }}
                                </a>
                                           
            @endforeach 
                    <input type="hidden" id="executive_act_contents" value="<?php echo json_encode($ids); ?>" /> 

                    </div>
                </div>
            </div>

        </div>

        
