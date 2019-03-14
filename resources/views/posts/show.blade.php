 @extends('layouts.app')

 @section('content')
 <a href="{{route('posts.index')}}" class="btn btn-danger">Back</a>

 {{-- {{$post->user}} --}}
 <div class="card">
  <div class="card-header">
    Information
  </div>
  <div class="card-body">
    <h5 class="card-title"> Title : {{$post->title}}</h5>
    <p class="card-text"> Description: {{$post->description}}</p>
    <hr>
    @if( isset($post->user)  )
    <div class="card-header">
    Post Owner
    <p class="card-text"> Name: {{ $post->user->name}}</p>
    <p class="card-text"> email: {{$post->user->email}}</p>
    @endif
</div>
  </div>
</div>
 @endsection
