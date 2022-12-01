<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\Category;
use App\Models\LocationRack;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => bcrypt('password')
        // ]);

        // Category::factory(10)->create();
        // Author::factory(10)->create();
        // LocationRack::factory(10)->create();

        Setting::factory()->create([
            'library_name' => 'ABCD LIBRARY',
            'library_address' => 'Dhaka, Bangladesh',
            'library_phone' => '+8801679487265',
            'library_email' => 'abcd@gmail.com',
            'fines' => '50',
        ]);
    }
}
