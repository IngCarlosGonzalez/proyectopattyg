<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user1 = User::create(
            [
                'name' => 'CALINMX',
                'email' => 'cegcdeveloper@gmail.com',
                'password' => Hash::make('rufirufi'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'profile_photo_path' => 'logos/carlos.jpg',
            ]
        )->assignRole('superusuario');
        $user2 = User::create(
            [
                'name' => 'USUARIO1',
                'email' => 'calin_mx@hotmail.com',
                'password' => Hash::make('secreta1'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'profile_photo_path' => 'logos/USUARIO.jpg',
            ]
        )->assignRole('usuariocomun');
    }
}
