<?php

namespace Domain\Auth\Admin\Database\Factories;

use Domain\Auth\Admin\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{

    protected  $model = Admin::class;

    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->email,
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'active' => true,
            'remember_token' => Str::random(10),
        ];
    }
}
