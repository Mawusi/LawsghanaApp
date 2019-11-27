<?php $oldpart = ''; $c=1; $closure = ''; ?>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="false">
            @foreach($allPost1992Articles as $allPost1992Article )    
                    <?php
                    
                        $ids[] = $allPost1992Article->id;
                        $closure = ($oldpart !== '' && $oldpart !== $allPost1992Article->part)?"</div></div></div>":"";
                        if ($oldpart !== $allPost1992Article->part){
                            $c++;
                            echo $closure;
                    ?>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading{{$c}}">
                    <p style="white-space:normal; line-height: 0.3cm;" class="panel-title"> 
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{ $c }}" aria-expanded="true" aria-controls="collapse_{{$c}}"> <b class="small">{{($allPost1992Article->part == '')? 'SECTIONS':$allPost1992Article->part}}</b>
                    </a>
                    </p>
                </div>
                <div id="collapse_{{$c}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$c}}">
                    <div class="panel-body" style="padding:0em;">
            <?php }
                                $oldpart = $allPost1992Article->part;
            ?>
                             
                                <a data-scroll-to="body"
                                data-scroll-focus="body"
                                data-scroll-speed="400"
                                data-scroll-offset="-60" class="content_link list-group-item" style="white-space:normal; line-height: 0.3cm;" sid="{{ $allPost1992Article->id }}"  href="/post_1992_legislation/content/{{ $allPost1992Article->id }}">
                                {{ $allPost1992Article->section }}
                                </a>
                                           
            @endforeach 
                    <input type="hidden" id="act_contents" value="<?php echo json_encode($ids); ?>" /> 

                    </div>
                </div>
            </div>

        </div>

        
