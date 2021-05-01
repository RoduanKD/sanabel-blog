<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Post;
use App\Models\Tag;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{

    public function show($id) {
        $post = Post::findorFail($id);
        return view('pages.showpost' , ['post'=>$post]);

    public function create ()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', ['categories' => $categories, 'tags' => $tags]);

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

            'title'             => 'required|min:4|max:255',
            'featured_image'    => 'required|url',
            'content'           => 'required|min:4',
            'category_id'       => 'required|numeric|exists:categories,id',
            'tags'              => 'array',
        ]);


        ]);
        $post = new Post;
        $post->title = $request->title;
        $post->img = $request->img;
        $post->body = $request->body;
        $post->save();


        return redirect("/posts/{$post->id}");


        $post->tags()->sync($request->tags);

        // $post = Post::create($request->all());

        return redirect()->route('posts.show', $post);

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
