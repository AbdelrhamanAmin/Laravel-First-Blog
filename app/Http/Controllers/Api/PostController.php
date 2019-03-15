<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Http\Resources\PostResource;
use App\Http\Requests\Post\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {
        // return Post::all() ;
        return PostResource::collection(Post::paginate(3));
    }

    public function show($post)
    {
        $post = Post::findorfail($post);
        // return $post;
        return new PostResource($post);
    }

    public function store(StorePostRequest $request)
    {
        Post::create($request->all());
        return response()->json([
            'message' =>' Post Created Successfully'
        ], 201);
        // return return response()->json($data, 200, $headers);
    }
}
