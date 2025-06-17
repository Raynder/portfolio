<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SocialLinkFactory extends Factory
{
    public function definition(): array
    {
        return [
            'tenant_id' => 'test',
            'platform' => fake()->randomElement(['t', 'f', 'l', 'i']),
            'url' => fake()->url(),
        ];
    }
}
