<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DefaultAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = config('services.admin.email');

        if (!User::where('email', $email)->exists()) {
            User::create([
                'name' => config('services.admin.name'),
                'email' => $email,
                'password' => bcrypt(config('services.admin.password')),
                'is_admin' => true
            ]);
        }
    }
}
