<?php

namespace Database\Seeders;

use App\Models\Dog;
use App\Models\Petcare;
use Database\Factories\DogFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'lname' => 'Chaws',
            'fname' => 'Pogi',
            'email' => 'chaws123@gmail.com',
            'password' => bcrypt('123123123'),
        ]);
        
        \App\Models\User::factory()->create([
            'lname' => 'Chaws',
            'fname' => 'Handsome',
            'email' => 'chawsAdmin@gmail.com',
            'password' => bcrypt('123123123'),
            'is_admin' => true,
        ]);

        Dog::factory(10)->create();
        Petcare::factory(12)->create();
    }
}
