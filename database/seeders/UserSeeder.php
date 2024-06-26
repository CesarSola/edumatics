<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@material.com',
            'password' => Hash::make('secret'), // Asegúrate de cifrar la contraseña
            'email_verified_at' => now(), // Establece la fecha y hora actual como verificada
        ]);

        $admin->assignRole('Admin');

        $admin = User::create([
            'name' => 'Angel',
            'email' => 'test@material.com',
            'password' => Hash::make('12345'), // Asegúrate de cifrar la contraseña
            'email_verified_at' => now(), // Establece la fecha y hora actual como verificada
        ]);

        $admin->assignRole('User');

        $admin = User::create([
            'name' => 'Jose',
            'email' => 'test2@material.com',
            'password' => Hash::make('12345'), // Asegúrate de cifrar la contraseña
            'email_verified_at' => now(), // Establece la fecha y hora actual como verificada
        ]);

        $admin->assignRole('User');
    }
}
