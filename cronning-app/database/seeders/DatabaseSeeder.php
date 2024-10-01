<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Cron;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Cron::factory(5)->create([
            'title'=>Cron::random(10),
            'script'=>Cron::random(10)
        ]);
    }
}
