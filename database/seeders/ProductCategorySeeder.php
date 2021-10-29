<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::all()->each(
            function ($category) {
                $category->products()->sync(
                    Product::all()->random(rand(0, 10))
            );
            }
        );
    }
}
// Lunch seeder php artisan db:seed --class=CategoriesSeeder
