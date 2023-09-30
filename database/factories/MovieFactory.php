<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie;>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description'=>fake()->realText($maxNbChars = 200, 1),
            'quality'=>fake()->randomElement(['Cam', 'FullHD', '720p','1080p','4K']),
            'image' => fake()->imageUrl(400, 200, 'movie'),
            'release_year' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'reproduction_number'=>fake()->numberBetween($min = 0, $max = 5000),
            'language'=>fake()->languageCode,
            'video_link'=>fake()->url,
            'download_link'=>fake()->url,
            'category_id'=>fake()->numberBetween($min = 1, $max = 15),
            'user_id'=>fake()->numberBetween($min = 1, $max = 17),

        ];
    }
}
