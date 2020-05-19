@extends('layouts/master')

@section ('title')

 Posts 

@endsection('title')


@section ('bodyContent') 


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a>Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create a Blog</li>
  </ol>
</nav>

 <main role="main" class="container">
      <div class="row"> 
        <div class="col-md-8 blog-main">   
 

<form method="POST" action="{{ config('constants.sub_dir_path') }}/posts">

   {{ csrf_field() }}

  <h1> Create a Blog </h1>

  <hr>

 @include('layouts/errors_div')
 
  <div class="form-group">
    <label for="exampleInputEmail1">Blog Title</label>
    <input type="title" required class="form-control" id="title" name="title" aria-describedby="titleHelp" placeholder="Enter title"> 
  </div> 


  <div class="form-group">
    <label for="exampleTextarea">Blog Body</label>
    <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
  </div> 


 <div class="form-group">
    <label for="exampleInputEmail1">Tag</label>
    <input type="tag" class="form-control" id="tag" name="tag" aria-describedby="titleHelp" placeholder="Enter Tag (optional)"> 
  </div> 


  <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Publish 
    </label>
  </div>

  <button type="submit" class="btn btn-primary">Post Blog</button>

</form>


        </div><!-- /.blog-main -->

           @include ('layouts/sidebar')

      </div><!-- /.row -->

    </main><!-- /.container -->

@endsection('bodyContent')

 