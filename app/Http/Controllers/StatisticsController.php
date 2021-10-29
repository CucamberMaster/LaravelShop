<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;

class StatisticsController extends Controller
{
    protected $category;

    protected $product;

    /**
     * Display the specified resource.
     *
     * @param  \App\Category $category
     * @param  \App\Product $product
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $productsCounts = Category::withCount('products')->orderBy('products_count', 'desc')->get();
        $lowPrice = Product::take(5)->orderBy('price', 'asc')->get();
        $highPrice = Product::orderBy('price', 'DESC')->limit(10)->get();

        $stats = [];
        foreach (Category::all() as $category) {
            $products = $category->products()->orderBy('price', 'desc')->get();
            $product = $products->first();
            $stats[] = [
                'name_category' => $category->name_category,
                'avg' => $products->avg('price'),
                'product_name' => $product ? $product->name : 'brak produktow',
            ];
        }
        return view('products.statistics.index')->with(
            compact('productsCounts', 'lowPrice', 'highPrice', 'stats')
        );
    }
}