<?php

use App\Providers\Models\Game;
use Faker\Factory as FakerFactory;

it('can get list of games', function () {
    $token = getAuthToken();
    Game::factory()->create();
    $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->get('/api/games');
    $response->assertStatus(200);
});

it('can get a game', function () {
   $token = getAuthToken();
   $game = Game::factory()->create();
   $response = $this->withHeaders([
       'Authorization' => 'Bearer ' . $token,
   ])->get('/api/games/' . $game->id);
   $response->assertStatus(200);
});

it('can add a game', function () {
   $token = getAuthToken();
   $faker = FakerFactory::create();
   $response = $this->withHeaders([
       'Authorization' => 'Bearer ' . $token,
   ])->post('/api/games', [
       'name' => $faker->name(),
       'description' => $faker->text(),
   ]);
   $response->assertStatus(201);
});

it('can update a game', function () {
    $token = getAuthToken();
    $faker = FakerFactory::create();
    $game = Game::factory()->create();
    $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->patch('/api/games/' . $game->id, [
        'name' => $faker->name(),
    ]);
    $response->assertStatus(200);
});

it('can delete a game', function () {
    $token = getAuthToken();
    $game = Game::factory()->create();
    $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->delete('/api/games/' . $game->id);
    $response->assertStatus(204);
});
