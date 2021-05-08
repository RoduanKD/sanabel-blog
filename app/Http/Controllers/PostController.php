<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;
// use Request;

class PostController extends Controller
{
//     protected $request;

//    public function __construct(\Illuminate\Http\Request $request)
//    {
//        $this->request = $request;
//    }
    public function create ()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', ['categories' => $categories, 'tags' => $tags]);
    }

    // public function show ($id) {
    //     $post = Post::findOrFail($id);
    //     return view('post.show', ['post' => $post]);
    // }
    public function show(Post $post)
    {
        return view('post.show', ['post' => $post]);
    }

    public function store (Request $request) {
        $request->validate([
            'title'             => 'required|min:4|max:255',
            'featured_image'    => 'required',
            'content'           => 'required|min:4',
            'category_id'       => 'required|numeric|exists:categories,id',
            'tags'              => 'array',
        ]);

        // $post = new Post();
        // $post->title = $request->title;
        // $post->featured_image = $request->featured_image;
        // $post->content = $request->content;
        // $post->category_id = $request->category_id;
        $post = Post::create($request->all());
        $post->tags()->sync($request->tags);
        // return redirect()->route('posts.show', $post);
        //return redirect("/posts/{$post->id}");
        return redirect()->route('posts.show', $post)->with('success', 'The post was created successfully');

    }

    public function edit(Post $post)
    {
        // $post = Post::findOrFail($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', ['post' => $post,'categories' => $categories,'tags' => $tags]);
    }

    public function update(Post $post, Request $request)
    {
        $request->validate([
            'title'             => 'required|min:4|max:255',
            'featured_image'    => 'required',
            'content'           => 'required|min:4',
             'category_id'       => 'required|numeric|exists:categories,id',
            'tags'              => 'array'
        ]);
        // $post->title = $request->title;
        // $post->featured_image = $request->featured_image;
        // $post->content = $request->content;
        //  $post->category_id = $request->category_id;
         $post->update($request->all());
        $post->tags()->sync($request->tags);
        return redirect()->route('posts.show', $post)->with('success', 'The post was updated successfully');

    }

    public function destroy($id)
    {
        $post = Post::where('id', $id)->firstorfail()->delete();
        // $post->delete();
        // $post->save();
        // return view('post.destroy');
        return redirect()->route('home')->with('success', 'The post was deleted successfully');

    }
}
