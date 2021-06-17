<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        return view('site.category.index', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('site.category.show', ['category' => $category->load('products')]);
    }
}