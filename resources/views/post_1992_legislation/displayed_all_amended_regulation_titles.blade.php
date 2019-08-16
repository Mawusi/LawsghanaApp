
<table class="table table-striped table-condensed" id="amend_datatable">
    <thead>
        <tr>
            <th>All Amendments on <b>{{ $allRegulation['title'] }}</b></th>
            <th>Year</th>
        </tr>
    </thead>
    <tbody>
    @foreach($amendedRegulationActs as $amendedRegulationAct)
        <tr>
            <td>
                <a href="/post_1992_legislation/amended_regulation_act_table_of_content/{{$amendedRegulationAct->act_category}}/{{$amendedRegulationAct->title}}/{{ $amendedRegulationAct->id }}" class="amended_for_regulation_link"><li style="list-style: none;">{{ $amendedRegulationAct['title'] }}</li></a>
            </td> 
            <td>{{ $amendedRegulationAct->year }}</td>  
        </tr>
    @endforeach
    </tbody>
</table>




            


                