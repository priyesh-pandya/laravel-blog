 

@extends('layouts/master')


@section ('title')
 Create a Post 
@endsection('title')


@section ('bodyContent')
 

   {{ csrf_field() }}

  <h1> List of Tasks </h1>

  <hr>

  <div>
  	<ul>

	@foreach ($tasks as $user)
    <li>  <a href="tasks/{{ $user->id}}">{{ $user->body }}</a> </li>
	@endforeach

	  
</ul>
</div>   

@endsection('bodyContent')

