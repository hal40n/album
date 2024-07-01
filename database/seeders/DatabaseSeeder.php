<?php

namespace Database\Seeders;

use App\Models\ContactRequest;
use App\Models\Download;
use App\Models\Photo;
use App\Models\PhotoTag;
use App\Models\SignedUrl;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Photo::factory()->count(50)->create();
        PhotoTag::factory()->count(100)->create();
        Download::factory()->count(100)->create();
        ContactRequest::factory()->count(100)->create();
        SignedUrl::factory()->count(100)->create();
    }
}