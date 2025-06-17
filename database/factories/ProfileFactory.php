<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

class ProfileFactory extends Factory
{
    public function definition(): array
    {
        return [
            'tenant_id' => 'test',
            'name' => fake()->name(),
            'profession' => fake()->jobTitle(),
            'email' => fake()->unique()->safeEmail(),
            'phone' => fake()->phoneNumber(),
            'bio' => fake()->paragraph(),
            'photo_url' => asset('storage/perfil/' . collect(File::files(storage_path('app/public/perfil')))->random()->getFilename()),
            'address' => fake()->city() . ' ' . fake()->stateAbbr(),
        ];
    }
}
