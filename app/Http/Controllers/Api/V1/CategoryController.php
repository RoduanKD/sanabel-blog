<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use App\Notifications\CategoryPublished;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class CategoryController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Category::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|min:4|max:255',
            // 'icon'  => 'required|url',
            'slug'  => 'required|min:4|string',
            'icon_url'  =>  'required_without:icon_upload|url|nullable',
            'icon_upload'  =>  'required_without:icon_url|file|image'
        ]);

        // TODO: Handel file upload for icon
         $category = new Category();
         $category->name = $request->name;
         $category->slug = $request->slug;
        if ($request->has('icon_upload')) {
            $icon = $request->icon_upload;
            $path = $icon->store('category-icon', 'public');
            $category->icon = $path;
        } else {
            $category->icon = $request->icon_url;
        }
      //  Category::create($request->all());


      $category->save();
      Notification::send(User::all() , new CategoryPublished($category));
        // Category::create($request->all());

        return ['message' => 'category created', 'data' => $category];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return $category;
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
        $category->update($request->all());

        return $category;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
