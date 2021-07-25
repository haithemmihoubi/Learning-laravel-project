<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class productFactory extends Factory
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
            'product_name'=> $this->faker->word() ,
            'product_description' =>$this->faker->sentence() ,
            'unit_price'=> $this->faker->randomFloat(3),
            'msrp'=>$this->faker->randomDigit(),
            'size' => $this->faker->randomElement(['XS', 'S', 'M', 'L', 'XL', '2XL', '3XL']),
            'color'=>$this->faker->colorName() ,
            'category_id'=> Category::all('id')->random(),

        ];
    }
}
