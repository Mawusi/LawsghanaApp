@extends('layouts.app')

@section('assets')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
<div class="container mt-3">

        <div id="app">
            @include('flash-message')
            @yield('content')
        </div>

        @include('user_dashboard.accounts_dropdown')

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">My Bookmarks</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table width="100%" id="datatable" class="table table-bordered table-sm">
                            <col style="width:1%">
                            <col style="width:70%">
                            <col style="width:19%">
                            <col style="width:10%">
                            
                            <thead class="text-primary thead-light">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Article</th>
                                    <th scope="col">Date Added</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($order_by_dates as $order_by_date)
                                <tr>
                                    <th style="visibility: hidden">{{$order_by_date->id}}</th>
                                    <td>
                                        @if($order_by_date->act_group == 'Judiciary')
                                            <a href="/post-1992-legislation/constitutional-acts-table-of-content/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                            <br>{{$order_by_date->act_title}}



                                            @elseif($order_by_date->act_group == 'Acts of Parliament')
                                                <a href="/post-1992-legislation/table-of-content/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                <br>{{$order_by_date->act_title}}



                                            @elseif($order_by_date->act_group == 'Legislative Instruments')
                                                <a href="/post_1992_legislation/regulation_acts_table_of_content/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                <br>{{$order_by_date->act_title}}



                                            @elseif($order_by_date->act_group == 'First Republic')
                                                <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                <br>{{$order_by_date->act_title}}

                                            @elseif($order_by_date->act_group == 'Second Republic')
                                                <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                <br>{{$order_by_date->act_title}}

                                            @elseif($order_by_date->act_group == 'Third Republic')
                                                <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                <br>{{$order_by_date->act_title}}

                                            @elseif($order_by_date->act_group == 'NLC Decree')
                                                <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                <br>{{$order_by_date->act_title}}

                                            @elseif($order_by_date->act_group == 'NRC Decree')
                                                <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                <br>{{$order_by_date->act_title}}

                                            @elseif($order_by_date->act_group == 'SMC Decree')
                                                <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                <br>{{$order_by_date->act_title}}

                                            @elseif($order_by_date->act_group == 'AFRC Decree')
                                                <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                <br>{{$order_by_date->act_title}}

                                            
                                            
                                            @else
                                                <a href="/post-1992-legislation/executive-acts-table-of-content/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank">{{$order_by_date->act_section}}</a>
                                                <br>{{$order_by_date->act_title}}

                                        @endif
                                    </td>
                                    <td>{{ date("F j, Y, g:i a", strtotime($order_by_date->created_at)) }}</td>
                                    <td>
                                        
                                        @if($order_by_date->act_group == 'Judiciary')
                                            <a href="/post-1992-legislation/constitutional-acts-table-of-content/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>

                                            @elseif($order_by_date->act_group == 'Acts of Parliament')
                                                <a href="/post-1992-legislation/table-of-content/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>

                                            @elseif($order_by_date->act_group == 'Legislative Instruments')
                                                <a href="/post_1992_legislation/regulation_acts_table_of_content/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>

                                            @elseif($order_by_date->act_group == 'First Republic')
                                                <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>

                                            @elseif($order_by_date->act_group == 'Second Republic')
                                                <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>

                                            @elseif($order_by_date->act_group == 'Third Republic')
                                                <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>

                                            @elseif($order_by_date->act_group == 'NLC Decree')
                                                <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>

                                            @elseif($order_by_date->act_group == 'NRC Decree')
                                                <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>

                                            @elseif($order_by_date->act_group == 'SMC Decree')
                                                <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>

                                            @elseif($order_by_date->act_group == 'AFRC Decree')
                                                <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>

                                            @else
                                                <a href="/pre_1992_legislation/{{$order_by_date->act_group}}/{{$order_by_date->act_title}}/{{$order_by_date->act_id}}" target="_blank"" class="btn btn-sm btn-outline-secondary">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>

                                        @endif

                                        <a href="#" class="btn btn-sm btn-outline-danger delete">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>
                                        
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                        </table>
                    </div>
                </div> 
                {{-- end of body --}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            var table = $('#datatable').DataTable();
            table.on('click', '.delete', function(){
                $tr = $(this).closest('tr');
                if($($tr).hasClass('child')){
                    $tr = $tr.prev('.parent');
                }
                var data = table.row($tr).data();
                console.log(data);
                $('#deleteForm').attr('action', '/bookmarks/'+data[0]);
                $('#deleteModal').modal('show');
            });
        });
   </script>
@endsection