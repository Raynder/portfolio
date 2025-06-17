<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SocialLink;

class SocialLinkSeeder extends Seeder
{
    public function run(): void
    {
        SocialLink::factory()->count(3)->create();
    }
}
