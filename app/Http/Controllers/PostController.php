<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;


class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            // 'posts' => Post::all()   
            'posts' => Post::paginate(5)

        ]);
    }

    public function create(){
        $users = User::all();
        // dd($users);
        return view('posts.create',[
            'users' => $users,
        ]);
    }

        public function store()
    {
        // dd(request()->all());
        Post::create(request()->all());

        return redirect()->route('posts.index');
    }

    public function edit( $id)
    {
        $post = Post::find($id);
        return view('posts.edit', [
            'post' => $post,
        ]);

    }
    public function update( $id )
    {
        $post = Post::find($id);
        $post->update(request()->all());
        // dd($post);
        // return view ('posts.index');
        return redirect()->route('posts.index');
    }

    public function destroy( $id )
    {
        $post = Post::find($id);
        $post->delete();
        // dd($post);
        // return view ('posts.index');
        return redirect()->route('posts.index');
    }

    public function show($id){
        $post = Post::find($id);

        return view('posts.show', [
            'post' => $post,
        ]);
    }

}