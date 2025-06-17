<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

class ProjectFactory extends Factory
{
    public function definition(): array
    {
        return [
            'tenant_id' => 1,
            'title' => fake()->sentence(4),
            'description' => fake()->paragraph(),
            'image_url' => asset('storage/images/' . collect(File::files(storage_path('app/public/projetos')))->random()->getFilename()),
            'published_at' => fake()->date(),
            'category' => fake()->randomElement(['Web Design    ', 'Mobile App', 'Graphic Design']),
            'comments_count' => fake()->numberBetween(0, 100),
            'is_featured' => fake()->boolean(20),
        ];
    }
}
