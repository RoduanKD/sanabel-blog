<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('category.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('category.create', ['categories' => $categories]);
        // TODO: return category create view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: validate the request
        // TODO: make new category using create method
        // TODO: return reidrect to categories index
        $request->validate([
            'name'             => 'required|min:4|max:15',
            'icon'    => 'required|url',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->icon = $request->icon;
        $category->save();

        return redirect()->route('home')->with('success', 'Created Successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // dd($category);

        $post=POST::all();
        return view('category.show', ['categories' => $category , 'posts'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        // TODO: return edit view with $category var
        $categories = Category::all();
        return view('category.edit', ['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // TODO: validate the request
        // TODO: update the category using update method
        // TODO: return reidrect to categories index
        $request->validate([
            'name'             => 'required|min:4|max:15',
            'icon'    => 'required|url',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->icon = $request->icon;
        $category->save();

        return redirect()->route('home')->with('success', 'Updated Successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // TODO: look for this
    }
}
