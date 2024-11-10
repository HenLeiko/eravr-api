<?php

namespace Database\Seeders;

use App\Providers\Models\Game;
use App\Providers\Models\Tag;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         User::factory(10)->create();
         Game::factory(150)->create();
         Tag::factory(30)->create();

//        User::factory()->create([
//            'name' => Str::random(10),
//            'email' => Str::random(10) . '@example.com',
//            'password' => Hash::make('password'),
//        ]);
//        DB::table('users')->insert([
//            'name' => Str::random(10),
//            'email' => Str::random(10).'@gmail.com',
//            'password' => Hash::make('password'),
//        ]);
    }
}
