<?php

namespace Database\Factories;

use App\Models\CDocument;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<CDocument>
 */
class CDocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->title,
            'content' => implode('. ', fake()->sentences(8))
        ];
    }
}
