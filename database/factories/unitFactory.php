<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Log;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\unit>
 */
class unitFactory extends Factory
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
            'econ' => $this->faker->sentence(),
            'operador' => $this->faker->text(),
            'image' => $image,
            'pdf' => $image,

        ];
    }
}
