 @extends('layouts.app')

 @section('content')
 <a href="{{route('posts.index')}}" class="btn btn-danger">Back</a>

 {{-- {{$post->user}} --}}
 <div class="card">
  <div class="card-header">
   <h2><strong> Post Information</strong></h2>
  </div>
  <div class="card-body">
    <h5 class="card-title"><strong> Title : </strong> {{$post->title}}</h5>
    <p class="card-text"><strong> Description: </strong>{{$post->description}}</p>
    <hr>
       <h2><strong> Post Creator Info</strong></h2>
    @if( isset($post->user)  )
    <div class="card-header">
    <p class="card-text"><strong> Name:</strong> {{ $post->user->name}}</p>
    <p class="card-text"><strong> email:</strong> {{$post->user->email}}</p>
    <p class="card-text"><strong> Created :</strong> {{$post->human_readable_date}}</p>

    @endif
</div>
  </div>
</div>
 @endsection
