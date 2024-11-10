<?php
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
