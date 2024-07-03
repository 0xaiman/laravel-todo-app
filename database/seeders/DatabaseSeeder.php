<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Note;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run():void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\
        User::factory()->create([
            'id'=>1,
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password'=>bcrypt('password')
        ]);

        Note::factory(100)->create();
    }
}
