<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VisitorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $month = $this->faker->month('+10 weeks');
        if ($month == 12) {
            $year = '2021';
        } else {
            $year = '2021';
        }
        return [
            'ip'            => hash('sha512', $this->faker->ipv4()),
            'created_at'    => $year . '-' . $month . '-' . $this->faker->dayOfMonth('+2 weeks') . ' ' . $this->faker->time(),
            'updated_at'    => $this->faker->date() . ' ' . $this->faker->time()
        ];
    }
}
