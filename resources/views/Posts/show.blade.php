@extends('layouts/master')


@section ('title')
  Blog Details
@endsection('title')

 

@section ('bodyContent') 
  
 <div class="container"> 
  <h1> Blog </h1>
  <hr>
  <div class="jumbotron">
    <h2>{{$post->title}}</h2> 
    <div class="well well-lg">{{$post->body}}</div>  
  </div>  
  
  <div align="right"> 
  <form class="delete" method="POST" action="{{ config('constants.sub_dir_path') }}/posts/{{ $post->id }}/delete">
  {{ method_field('delete') }} 
    {!! csrf_field() !!}  
 <button class="btn btn-danger" title="Delete" type="submit"> <i class="fa fa-trash-o fa-lg" aria-hidden="true"> </i> </button>
  </form>
</div>
 


</div> 

<form method="POST" action="{{ config('constants.sub_dir_path') }}/posts/{{ $post->id }}/comments">

   {{ csrf_field() }}

  <h3> <i class="fa fa-comments" aria-hidden="true"></i>
 Add a Comment </h3>

  <hr>

   @include('layouts/errors_div') 

  <div class="form-group"> 
    <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Add your comments" required></textarea>
  </div>  

  <button type="submit" class="btn btn-primary ">Add Comment</button> 

</form>

<hr>

<div class="container">   
  
  @foreach ($post->comments as $comment)  

  <div class="media">
     <div class="media-left media-top">
        <span class="glyphicon glyphicon-envelope"></span>
        <img src="{{ config('constants.sub_dir_path') }}/images/img_avatar5.png" class="media-object" style="width:45px">
      </div>
      <div class="media-body">
        <h4 class="media-heading">  &nbsp; <small><i>Posted on {{ $comment->created_at->diffForHumans() }} by  </i></small> <a href="#">{{ $comment->user->name}}</a> </h4>
        <p>  &nbsp; {{$comment->body}}</p>
      </div>
    </div> 
  <hr>

  @endforeach

 </div> 

@endsection('bodyContent')

 