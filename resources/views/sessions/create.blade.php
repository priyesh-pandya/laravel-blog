@extends('layouts/master')

@section ('title')
 Sign- In
@endsection('title')

@section ('bodyContent')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb"> 
    <li class="breadcrumb-item"><a>Sign-in</a></li> 
  </ol>
</nav>
<form method="POST" action="{{ config('constants.sub_dir_path') }}/login">

   {{ csrf_field() }}
 
  <hr>

 @include('layouts/errors_div')  

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" required class="form-control" id="email" name="email" aria-describedby="titleHelp" placeholder="Enter email"> 
  </div>  

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" required class="form-control" id="password" name="password" aria-describedby="titleHelp" > 
  </div>  

  <button type="submit" class="btn btn-primary">Sign In</button>

</form>

@endsection('bodyContent')

