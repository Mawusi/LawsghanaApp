    
    <div class="navbar bg-header-color">
        {{ menu('post_1992_legislation_menu', 'bootstrap') }}

        {{-- <form action="{{ url('index_search') }}" method="get">
            {{ csrf_field() }}
            <input  name="search_text" type="text"/>
            <input type="submit"/>
        </form> --}}

        {{-- <form action="{{ url('post_index_search') }}" method="GET" class="pull-right search-form">
            {{ csrf_field() }}
            <div class="form-group form-group-customised has-feedback">
                <label for="search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="search_text" id="search" placeholder="Search Any Word">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>
        </form> --}}

        <form action="{{ url('post_index_search') }}" method="GET">
            {{ csrf_field() }}
            <div class="box pull-right">
                <div class="container-2">
                    <span class="icon"><i class="fa fa-search"></i></span>
                    <input type="search" id="search" name="search_text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search Any Word..." />
                    {{-- <span class="glyphicon glyphicon-search form-control-feedback"></span> --}}
                </div>
            </div>
        </form>
    </div>

    


    {{-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            {{ menu('post_1992_legislation_menu', 'bootstrap') }}   
              <form action="" class="pull-right search-form">
                  <div class="form-group has-feedback">
                      <label for="search" class="sr-only">Search</label>
                      <input type="text" class="form-control" name="search" id="search" placeholder="What do you want?">
                      <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  </div>
              </form>
        </div> --}}