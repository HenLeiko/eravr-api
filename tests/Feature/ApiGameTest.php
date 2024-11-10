<?php

it('can get list of games', function () {
    $token ="4|NUr8ejdkvbonqxHhr43ab9j12NOOD9OE3lwmWjXzacfcc5c3";
    $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->get('/api/games');
    $response->assertStatus(200);
});

it('can get a game', function () {
   $token ="4|NUr8ejdkvbonqxHhr43ab9j12NOOD9OE3lwmWjXzacfcc5c3";
   $response = $this->withHeaders([
       'Authorization' => 'Bearer ' . $token,
   ])->get('/api/games/1');
   $response->assertStatus(200);
});

it('can add a game', function () {
   $token ="4|NUr8ejdkvbonqxHhr43ab9j12NOOD9OE3lwmWjXzacfcc5c3";
   $response = $this->withHeaders([
       'Authorization' => 'Bearer ' . $token,
   ])->post('/api/games', [
       'name' => 'Game 1',
       'description' => 'Game 1 description',
   ]);
   $response->assertStatus(201);
});

it('can update a game', function () {
    $token = '4|NUr8ejdkvbonqxHhr43ab9j12NOOD9OE3lwmWjXzacfcc5c3';
    $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->patch('/api/games/1', [
        'name' => 'Game 2',
    ]);

    $response->assertStatus(200);
});

it('can delete a game', function () {
    $token = '4|NUr8ejdkvbonqxHhr43ab9j12NOOD9OE3lwmWjXzacfcc5c3';
    $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $token,
    ])->delete('/api/games/2');
    $response->assertStatus(204);
});
