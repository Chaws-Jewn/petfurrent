<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetCareImage>
 */
class PetCareImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pet_care_id' => $this->faker->numberBetween(1, 10),
            'file_name' => $this->faker->filePath()
        ];
    }
}
