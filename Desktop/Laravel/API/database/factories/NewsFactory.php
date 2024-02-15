<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(2),
            'description' => $this->faker->text(100),
            'content' => $this->faker->realText(300),
            'image' => $this->faker->imageUrl(),
            'likes_count' => $this->faker->numberBetween(0, 2000000)
        ];
    }
}
