<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BundleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $id = 1;

        return [
            'register_code' => 'Bundle-3' . sprintf("%03s", $id++),
            'name'          => $this->faker->name(),
            'email'         => $this->faker->email(),
            'ticket'        => 1,
            'phone'         => $this->faker->phoneNumber(),
            'payment'       => 'default.jpg',
            'bundle'        => 3
        ];
    }
}
