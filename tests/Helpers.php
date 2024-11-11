<?php

use App\Providers\Models\User;
use Illuminate\Support\Facades\Hash;
use function Pest\Laravel\post;

function getAuthToken(): string
{
    $password = 'testPassword123';

    $user = User::factory()->create([
        'password' => Hash::make($password)
    ]);

    $loginResponse = post('api/login', [
        'email' => $user->email,
        'password' => $password,
    ]);

    return $loginResponse->json()['access_token'];
}
