<?php

namespace Domain\Auth\Admin\Database\Seeders;

use Domain\Admin\Models\Admin;
use Domain\Auth\Admin\Database\Factories\AdminFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends  Seeder
{
    public function run(): void
    {
        AdminFactory::new([
            'first_name' => 'System',
            'last_name' => 'Administrator',
            'email' => 'system@administrator.com',
            'password' => Hash::make('password123')
        ])->create();

    }
}
