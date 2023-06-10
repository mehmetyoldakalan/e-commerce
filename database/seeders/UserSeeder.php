<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name' => 'SUPER USER',
            'email' => 'superuser@root.com',
            'password' => Hash::make('superuser'),
            'role_id' => RoleEnum::SUPER_USER,
            'email_verified_at' => Carbon::now(),
            'phone' => '+90PHONE_NUMBER'
        ]);
    }
}
