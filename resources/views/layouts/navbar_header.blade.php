 
     <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">

          <div class="col-4 pt-1">
            
            @if (Auth::check())  

           <div class="dropdown show float-left">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fa fa-user-circle" aria-hidden="true"> {{ ucfirst(Auth::user()->name)}} </i> 
            </a>

           <div class="dropdown-menu" aria-labelledby="dropdown01">
               <a class="dropdown-item" href="{{ config('constants.sub_dir_path') }}/logout">Logout</a> 
            </div> 
            </div> 

          @else   
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              <a class="btn btn-sm btn-outline-secondary" href="{{ config('constants.sub_dir_path') }}/login">Sign In</a> 
              <a class="btn btn-sm btn-outline-secondary" href="{{ config('constants.sub_dir_path') }}/register">Register</a>  
              </div> 
            </div> 
          @endif 

          </div>
          <div class="col-4 text-center"> 
            <a class="blog-header-logo text-dark" href="{{ config('constants.sub_dir_path') }}/">
              <img src="/images/blog-content-logo.png" width="175" height="75" class="d-inline-block align-top" alt=""> 
            </a>
          </div>
         <div class="col-4 d-flex justify-content-end align-items-center"> 

            <a class="btn btn-sm btn-outline-secondary" href="{{ config('constants.sub_dir_path') }}/aboutus">About Us</a>
          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="{{ config('constants.sub_dir_path') }}/">Home</a>
          <a class="p-2 text-muted" href="{{ config('constants.sub_dir_path') }}/posts/create">Create Blog</a>
          <a class="p-2 text-muted" href="#">Technology</a>
          <a class="p-2 text-muted" href="#">Design</a>
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="#">Business</a>
          <a class="p-2 text-muted" href="#">Politics</a>
          <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
          <a class="p-2 text-muted" href="#">Style</a>
          <a class="p-2 text-muted" href="#">Travel</a>
        </nav>
      </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom"> </div>
       