
<div class="navbar bg-header-color">
    {{ menu('pre_1992_legislation_menu', 'bootstrap') }}

    <form action="{{ url('pre_4th_index_search') }}" method="GET" class="pull-right search-form">
        {{ csrf_field() }}
        <div class="form-group form-group-customised has-feedback">
            <label for="search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="search_text" id="search" placeholder="What do you want?">
            <span class="glyphicon glyphicon-search form-control-feedback"></span>
        </div>
    </form>
  
</div>
