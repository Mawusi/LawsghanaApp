    <div class="navbar bg-header-color">
        {{ menu('post_1992_legislation_menu', 'bootstrap') }}

        <form action="/keyword-search" method="GET" class="pull-right search-form" style="padding-top: 5px;">
            {{ csrf_field() }}
            <div class="form-group has-feedback">
                <label for="search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="q" id="search" placeholder="keyword search">
                <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>
        </form>
        <!-- Brand and toggle get grouped for better mobile display -->
        <!-- Collect the nav links, forms, and other content for toggling -->

            <!-- <div class="collapse navbar-collapse container-fluid" id="bs-example-navbar-collapse-1">
            </div> -->
      
    </div>


    <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            {{ menu('post_1992_legislation_menu', 'bootstrap') }}   
              <form action="" class="pull-right search-form">
                  <div class="form-group has-feedback">
                      <label for="search" class="sr-only">Search</label>
                      <input type="text" class="form-control" name="search" id="search" placeholder="What do you want?">
                      <span class="glyphicon glyphicon-search form-control-feedback"></span>
                  </div>
              </form>
        </div> -->