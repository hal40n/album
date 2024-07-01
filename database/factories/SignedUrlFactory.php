<?php

namespace Database\Factories;

use App\Models\SignedUrl;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SignedUrl>
 */
class SignedUrlFactory extends Factory
{
    protected $model = SignedUrl::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'url' => $this->faker->url(),
            'expiration' => now()->addDays(7),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
