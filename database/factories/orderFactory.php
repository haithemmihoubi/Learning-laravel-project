<?php

namespace Database\Factories;

use App\Models\Costumer;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class orderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'order_number'=>$this->faker->randomNumber() ,
            'payment_id'=>$this->faker->randomNumber() ,
            'order_date'=>$this->faker->date() ,
            'ship_date'=>$this->faker->date() ,
            'costumer_id'=>Costumer::all('id')->random()


        ];
    }
}
