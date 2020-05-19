 <aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">The PHP Blog application For Web Artisans</p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
       
              @foreach ($archives as $state) 
 
                  <li><a href="{{ config('constants.sub_dir_path') }}/?month={{$state->monthname}}&year={{$state->year}}">{{$state->monthname}} {{$state->year}}</a></li>

              @endforeach 
        
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Tags</h4>
            <ol class="list-unstyled">

              @foreach ($tags as $tag)
              
              <li><a href="{{config('constants.sub_dir_path')}}/posts/tags/{{$tag}}">{{$tag}}</a></li>
              
              @endforeach

            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->