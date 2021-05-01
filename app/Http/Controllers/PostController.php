<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function show($id) {
        $post = Post::findorFail($id);
        return view('pages.showpost' , ['post'=>$post]);
    }

    public function create() {
        $categories = Category::all();
        return view('post.create',['categories' => $categories]);
    }

    public function store(Request $request) {

        $request->validate([
            'title' => 'required|min:4|max:255',
            'img' => 'required|url',
            'body' => 'required|min:4',

        ]);
        $post = new Post;
        $post->title = $request->title;
        $post->img = $request->img;
        $post->body = $request->body;
        $post->save();

        return redirect("/posts/{$post->id}");

    }

    public function edit($id){
            $post = Post::findOrFail($id);

            return view('post/edit',['post' => $post]);
    }

    public function update($id, Request $request){

        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required|min:4|max:255',
            'img' => 'required|url',
            'body' => 'required|min:4',

        ]);

        $post->title = $request->title;
        $post->img = $request->img;
        $post->body = $request->body;
        $post->save();

        return redirect("/posts/{$post->id}");

    }
}
