<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title' => ucwords($this->faker->words(4, true)),
            'body' => $this->faker->sentence(10),
            'created_at' => $this->faker->dateTimeBetween(now()->subYears(1), now()),
        ];
    }
}
