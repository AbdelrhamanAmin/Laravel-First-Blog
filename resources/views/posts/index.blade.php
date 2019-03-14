@extends('layouts.app')
@section('content')
 <a href="{{route('posts.create')}}" class="btn btn-primary">Create Post</a>

 <table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Creator Name</th>
            <th> Created at</th>
            <th> Last Update</th>
            <th> Slug </th>
            <th> Action </th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
        <th scope="row">{{$post->id}}</th>
        <td> {{$post->title}} </td>
        <td> {{$post->description}}</td>
        <td> {{ isset($post->user) ? $post->user->name : 'Not Found'}}</td>
        <td> {{$post->created_at->toDateString()}}</td>
        <td> {{$post->updated_at->diffForHumans()}}</td>
        <td> {{$post->slug}}</td>
        <td>
            <a href="{{route('posts.edit' ,[$post->id   ]) }}" class="btn btn-primary"> Edit</a>
            <a href="{{route('posts.show', $post->id)}}" class="btn btn-primary">View</a>
            <form action="{{route('posts.destroy', $post->id)}}" method="POST" style="display:inline-block">
                @csrf
                @method("DELETE	")
                <input type="submit" value="Delete" class="btn btn-primary"  onclick="return confirm('You are ')">
             </form>

          </td>
    </tr>
    @endforeach




  </tbody>
</table>
<center>
{{$posts->links()}}
</center>
@endsection
