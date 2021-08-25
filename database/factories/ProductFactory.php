<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
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
            'title'=> $this->faker->company(),
            'description'=> $this->faker->realText(),
            'price'=> $this ->faker->numberBetween($min = 5, $max = 30),
            'author'=> $this->faker->name(),
            'editorial'=> $this->faker->name(),
            'isAvailable'=> true,
            'canReserve'=> true,
            'categoryMain'=> $this->faker->name(),
            'image1'=> $this->faker->image(),
            'format'=> 'Test format',
            'pages'=> $this->faker->numberBetween($min = 200, $max = 500)
        ];
    }
}
