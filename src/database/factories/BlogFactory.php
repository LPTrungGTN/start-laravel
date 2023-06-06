<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => $this->faker->text(14),
            'content' => $this->faker->text(200),
            'type' => $this->faker->randomElement(['generate', 'customer']),
        ];
    }
}
