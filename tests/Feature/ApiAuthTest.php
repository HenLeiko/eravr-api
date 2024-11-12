<?php

use App\Providers\Models\User;
use Faker\Factory as Faker;

it('register successfully', function () {
    $faker = Faker::create();
    $password = $faker->password;
    $response = $this->post('/api/register', [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => $password,
        'password_confirmation' => $password,
    ]);

    $response->assertStatus(201);
});

it('login successfully', function () {
    $password = 'testPassword';
    $user = User::factory()->create([
        'password' => Hash::make($password),
    ]);
    $response = $this->post('/api/login', [
        'email' => $user->email,
        'password' => $password,
    ]);
    $response->assertStatus(200);
});

it('logout user', function () {
    $password = 'testPassword';
    $user = User::factory()->create([
        'password' => Hash::make($password),
    ]);
    $responseLogin = $this->post('/api/login', [
        'email' => $user->email,
        'password' => $password,
    ]);
    $response = $this->withHeaders([
        'Authorization' => 'Bearer ' . $responseLogin->json('access_token'),
    ])->post('/api/logout');
    $response->assertStatus(200);
});
