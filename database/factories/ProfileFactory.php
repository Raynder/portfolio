<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    public function definition(): array
    {
        return [
            'tenant_id' => 'test',
            'name' => fake()->name(),
            'profession' => fake()->jobTitle(),
            'bio' => fake()->paragraph(),
            'photo_url' => fake()->imageUrl(200, 200, 'people'),
        ];
    }
}
