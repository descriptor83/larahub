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
            'author_id' => User::factory(),
            'category_id' => $this->faker->randomElement([1,2,3,4]),
            'created_at' => now(),
            'excerpt' => $this->faker->text(20),
            'body' => $this->faker->text(),
            'title' => $this->faker->sentence()
            

        ];
    }
}
