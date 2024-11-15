<?php

namespace Database\Seeders;

use App\Providers\Models\Game;
use App\Providers\Models\Tag;
use App\Providers\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
         User::factory(10)->create();
         Game::factory(15)->create();
         Tag::factory(3)->create();

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
