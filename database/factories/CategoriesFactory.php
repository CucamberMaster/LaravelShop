<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_category' => $this->faker->text(5),
        ];
    }
//use composer dump-autoload and php artisan tinker after this Category::factory()->make(); to check its correct if its correct do
//Category::factory()->count(how much u want)->create();
}
