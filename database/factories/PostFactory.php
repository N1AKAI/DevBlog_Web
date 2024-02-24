<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'img' => $this->faker->imageUrl(),
            'description' => $this->faker->text(200),
            'content' => $this->faker->text(1000),
            'published' => 1,
            'tags' => 'dev, oop, php',
        ];
    }
}
