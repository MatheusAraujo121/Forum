<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Moderador',
            'email' => 'moderador@gmail.com',
            'password' => Hash::make('12345678'),
            'photo' => 'uploads/shrek.jpeg',
        ]);
        User::create([
            'name' => 'Denki',
            'email' => 'denki@gmail.com',
            'password' => Hash::make('12345678'),
            'photo' => 'uploads/defaultPhoto.jpg',
        ]);
        User::create([
            'name' => 'Alice',
            'email' => 'alice@gmail.com',
            'password' => Hash::make('12345678'),
            'photo' => 'uploads/a.jpg',
        ]);
        User::create([
            'name' => 'Bernardo',
            'email' => 'bernardo@gmail.com',
            'password' => Hash::make('12345678'),
            'photo' => 'uploads/b.jpg',
        ]);
        User::create([
            'name' => 'Carlos',
            'email' => 'carlos@gmail.com',
            'password' => Hash::make('12345678'),
            'photo' => 'uploads/c.jpg',
        ]);
        User::create([
            'name' => 'Daniela',
            'email' => 'daniela@gmail.com',
            'password' => Hash::make('12345678'),
            'photo' => 'uploads/d.jpg',
        ]);
        User::create([
            'name' => 'Estefani',
            'email' => 'estefani@gmail.com',
            'password' => Hash::make('12345678'),
            'photo' => 'uploads/defaultPhoto.jpg',
        ]);
    }
}
