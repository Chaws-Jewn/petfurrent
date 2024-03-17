<?php

namespace Database\Seeders;

use App\Models\Adoption;
use App\Models\Pet;
use App\Models\PetCareDetails;
use App\Models\PetCareImage;
use App\Models\PetMaintenance;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Pet::factory(10)->create();
        PetCareDetails::factory(10)->create();
        PetCareImage::factory(10)->create();
        PetMaintenance::factory(10)->create();
        Adoption::factory(10)->create();
        
    }
}
