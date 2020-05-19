@extends('layouts/master')

@section ('title')
 Registrations
@endsection('title') 

@section ('bodyContent')


<nav aria-label="breadcrumb">
  <ol class="breadcrumb"> 
    <li class="breadcrumb-item"><a>Registrations</a></li> 
  </ol>
</nav>

<form method="POST" action="{{ config('constants.sub_dir_path') }}/register">

   {{ csrf_field() }}
 
  <hr>

 @include('layouts/errors_div')
 
  <div class="form-group">
    <label for="name">Username:</label>
    <input type="text" required class="form-control" id="name" name="name" aria-describedby="titleHelp" placeholder="Enter username"> 
  </div> 


  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" required class="form-control" id="email" name="email" aria-describedby="titleHelp" placeholder="Enter email"> 
  </div> 


  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" required class="form-control" id="password" name="password" aria-describedby="titleHelp" > 
  </div> 


  <div class="form-group">
    <label for="password">Password Confirmation :</label>
    <input type="text" required class="form-control" id="password_confirmation" name="password_confirmation" aria-describedby="titleHelp" > 
  </div> 
 

  <button type="submit" class="btn btn-primary">Register</button>

</form>

@endsection('bodyContent')

