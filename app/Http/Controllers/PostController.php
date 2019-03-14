<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            // 'posts' => Post::all()
            'posts' => Post::paginate(3)

        ]);
    }

    public function create()
    {
        $users = User::all();
        // dd($users);
        return view('posts.create', [
            'users' => $users,
        ]);
    }

    public function store(StorePostRequest $request)
    {
        // dd(request()->all());
        // Post::create(request()->all());

        Post::create($request->all());

        return redirect()->route('posts.index');
    }


    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit', [
                'post' => $post,
            ]);
    }

    public function update($id, UpdatePostRequest $request)
    {
        $post = Post::find($id);
        $post->update($request->all());
        // dd($post);
        // return view ('posts.index');
        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        // dd($post);
        // return view ('posts.index');
        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = Post::find($id);

        return view('posts.show', [
            'post' => $post,
        ]);
    }
}
