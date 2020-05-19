@extends('layouts/master')

@section ('title')

 Posts 

@endsection('title')


@section ('bodyContent') 

 <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Top Blogs of the month around the World.
          </h3> 


 <!-- Jumbotron -->
        <div class="jumbotron">
          <h1>The PHP Blog application For Web Artisans</h1>
          <p class="lead">Laravel,  An amazing ORM, painless routing, powerful queue library, and simple authentication give you the tools you need for modern, maintainable PHP. Using Laravel created small app post blog and amazing applications..</p>
          <p><a class="btn btn-lg btn-success fa fa-pencil-square-o" aria-hidden="true" href="{{ config('constants.sub_dir_path') }}/posts/create" role="button"> &nbsp; Get Post Articles</a></p>
        </div>


          @foreach ($posts as $post)  
          <div class="blog-post">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta"><i class="fa fa-clock-o fa-1x" aria-hidden="true"></i> {{ $post->created_at->toFormattedDateString() }}  by <a href="#">{{ $post->user->name}}</a></p>

            <p> {{ str_limit($post->body , 320) }} </p>

            <p> <a class="btn btn-primary" href="posts/{{ $post->id }}" role="button">View details &raquo;</a></p>

          </div><!-- /.blog-post -->
          
          @endforeach



          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->

           @include ('layouts/sidebar')

      </div><!-- /.row -->

    </main><!-- /.container -->

@endsection('bodyContent')

 