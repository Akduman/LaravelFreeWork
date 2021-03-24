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
            'id' => $this->faker->numerify(),
            'name' => $this->faker->name(),
            'title' => $this->faker->sentence(5),
            'description' => $this->faker->paragraph(), // password
            'value' =>$this->faker->numerify(),
        ];
    }
}
