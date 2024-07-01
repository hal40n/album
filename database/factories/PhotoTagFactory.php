<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\PhotoTag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PhotoTag>
 */
class PhotoTagFactory extends Factory
{
    protected $model = PhotoTag::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'photo_id' => Photo::factory(),
            'tag' => $this->faker->word(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}