<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TablaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $array = ['bitcoin', 'etherum', 'luna', 'etc'];

        return [
            'name' => $this->faker->text(50),
            'apellidos' => $this->faker->text(50),
            'comment' => $this->faker->text(100),
            'status' => 'backlog',
            'verified' => false
        ];
    }
}
