 @extends('layout.app')

 @section('content')
 <a href="{{route('posts.index')}}" class="btn btn-danger">Back</a>
 <hr>

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea name="description" class="form-control" placeholder="Write your description"></textarea>
        </div>

         <div class="form-group">
            <label for="exampleInputPassword1">Post Creator</label>
            <select class="form-control" name="user_id">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>
    <hr>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
 