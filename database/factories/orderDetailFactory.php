<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class orderDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_id' =>Order::all('id')->random(),
            'product_id'=>Order::all('id')->random(),
            'order_number'=> $this->faker->randomDigit(),
            'price'=> $this->faker->randomFloat() ,
            'quantity'=> $this->faker->randomDigit(),
            'total'=> $this->faker->randomFloat(),
            'size'=>$this->faker->word(),
            'color'=>$this->faker->colorName()

        ];
    }
}
