@if($order_by_section->act_group == 'Judiciary')
                                                    <a href="/post-1992-legislation/constitutional-acts-table-of-content/{{$order_by_section->act_group}}/{{$order_by_section->act_title}}/{{$order_by_section->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                                    </a>

                                                    @elseif($order_by_section->act_group == 'Acts of Parliament')
                                                        <a href="/post-1992-legislation/table-of-content/{{$order_by_section->act_group}}/{{$order_by_section->act_title}}/{{$order_by_section->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_section->act_group == 'First Republic')
                                                        <a href="/pre_1992_legislation/{{$order_by_section->act_group}}/{{$order_by_section->act_title}}/{{$order_by_section->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_section->act_group == 'Second Republic')
                                                        <a href="/pre_1992_legislation/{{$order_by_section->act_group}}/{{$order_by_section->act_title}}/{{$order_by_section->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_section->act_group == 'Third Republic')
                                                        <a href="/pre_1992_legislation/{{$order_by_section->act_group}}/{{$order_by_section->act_title}}/{{$order_by_section->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_section->act_group == 'NLC Decree')
                                                        <a href="/pre_1992_legislation/{{$order_by_section->act_group}}/{{$order_by_section->act_title}}/{{$order_by_section->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_section->act_group == 'NRC Decree')
                                                        <a href="/pre_1992_legislation/{{$order_by_section->act_group}}/{{$order_by_section->act_title}}/{{$order_by_section->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_section->act_group == 'SMC Decree')
                                                        <a href="/pre_1992_legislation/{{$order_by_section->act_group}}/{{$order_by_section->act_title}}/{{$order_by_section->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_section->act_group == 'AFRC Decree')
                                                        <a href="/pre_1992_legislation/{{$order_by_section->act_group}}/{{$order_by_section->act_title}}/{{$order_by_section->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @elseif($order_by_section->act_group == 'PNDC Law')
                                                        <a href="/pre_1992_legislation/{{$order_by_section->act_group}}/{{$order_by_section->act_title}}/{{$order_by_section->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>

                                                    @else
                                                        <a href="/post-1992-legislation/executive-acts-table-of-content/{{$order_by_section->act_group}}/{{$order_by_section->act_title}}/{{$order_by_section->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </a>
                                                @endif