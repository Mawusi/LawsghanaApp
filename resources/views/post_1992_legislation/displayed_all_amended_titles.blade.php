<table class="table table-striped table-condensed" id="amend_datatable">
    <thead>
        <tr>
            <th>Amendments on <b>{{ $allPost1992Act['title'] }}</b></th>
            <th>Year</th>
        </tr>
    </thead>
    <tbody>
    @foreach($amendedActs as $amendedAct)
        <tr>
            <td>
                <a class="amended_link" href="/post_1992_legislation/amended_act_table_of_content/{{$amendedAct->post_category}}/{{$amendedAct->title}}/{{ $amendedAct->id }}" ><li style="list-style: none;">{{ $amendedAct->title }}</li></a>
            </td> 
            <td>{{ $amendedAct->year }}</td>  
        </tr>
    @endforeach
    </tbody>
</table>




            


                