  <div class="navbar bg-header-color">
      {{ menu('ghana_judgement_menu', 'bootstrap') }} 

    {{-- <form action="{{ url('cases_index_search') }}" method="GET" class="pull-right search-form">
      {{ csrf_field() }}
      <div class="form-group form-group-customised has-feedback">
          <label for="search" class="sr-only">Search</label>
          <input type="search" class="form-control" name="search_text" id="search" placeholder="What do you want">
          <span class="glyphicon glyphicon-search form-control-feedback"></span>
      </div>
    </form> --}}

    <form action="{{ url('cases_index_search') }}" method="GET">
      {{ csrf_field() }}
      <div class="box pull-right">
          <div class="container-2">
              <span class="icon"><i class="fa fa-search"></i></span>
              <input type="search" id="search" name="search_text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search Any Word..." />
          </div>
      </div>
  </form>

  </div>
