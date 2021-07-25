<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Costumer;
class costumerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Costumer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_Name' => $this->faker->firstName()   ,
            'last_Name'=> $this->faker->lastName(),
            'Room' =>$this->faker->name(),
            'address'=>$this->faker->address() ,

            'city' =>$this->faker->city() ,
            'state'=>$this->faker->streetAddress(),
            'country'=>$this->faker->country(),
            'email'=>$this->faker->email()
        ];
    }
}
