<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(20),
            'detail' => $this->faker->text(),
            'price' => $this->faker->randomDigit(),
        ];
    }
//use composer dump-autoload and php artisan tinker after this Product::factory()->make(); to check its correct if its correct do
//Product::factory()->count(how much u want)->create();
}
