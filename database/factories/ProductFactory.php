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
            'nombre' => $this->faker->sentence(4),
            'precio'=> $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
            'categoria' => $this->faker->randomElement($array = array ('Celulares','Desktop','Accesorios')),
            'imagen' => $this->faker->image('public/storage/products', 400, 300, null, false),
            'cantidad' => 1,
        ];
    }
}
