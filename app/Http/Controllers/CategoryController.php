<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('products.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'name_category' => 'required|regex:/^[a-zA-Z]+$/u|unique:categories|min:2',
            ]
        );
        Category::create($request->all());
        // $product->categories()->attach($categories);
        return redirect()->route('products.index')
            ->with('success', 'Category created successfully.');
    }

}