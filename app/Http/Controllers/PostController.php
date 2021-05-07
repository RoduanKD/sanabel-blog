<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', ['categories' => $categories, 'tags' => $tags]);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('post.show', ['post' => $post]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'             => 'required|min:4|max:255',
            'featured_image'    => 'required|url',
            'content'           => 'required|min:4',
            'category_id'       => 'required|numeric|exists:categories,id',
            'tags'              => 'array',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->featured_image = $request->featured_image;
        $post->content = $request->content;
        $post->category_id = $request->category_id;
        $post->save();

        $post->tags()->sync($request->tags);

        // $post = Post::create($request->all());

        return redirect()->route('posts.show', $post)->with('success', 'Created Successfuly');;
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        return view('post.edit', ['post' => $post]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title'             => 'required|min:5|max:200',
            'featured_image'    => 'required|url',
            'content'           => 'required|min:10',

        ]);
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->featured_image = $request->featured_image;
        $post->content = $request->content;
        $post->save();

        return redirect()->route('posts.update', $post)->with('success', 'edited Successfuly');;
    }
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('home',$post)->with('success', 'Post Deleted');
    }
}
