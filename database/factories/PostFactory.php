<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Log;

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
        $imagePath = storage_path('app/public/posts');

        $image = $this->faker->image($imagePath, 640, 480, null, false);


        Log::info('Generated image: ' . $image);

        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->text(),
            'image' => $image,
        ];
    }
}
