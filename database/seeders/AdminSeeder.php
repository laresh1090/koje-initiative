<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@kojegroup.com'],
            [
                'name' => 'Koje Admin',
                'password' => Hash::make('KojeAdmin2026!'),
                'is_admin' => true,
            ]
        );
    }
}
