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
    }
}
