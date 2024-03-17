<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PetMaintenance>
 */
class PetMaintenanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'pet_id' => $this->faker->numberBetween(1, 10),
            'type' => $this->faker->numberBetween(0, 3),
            'date' => $this->faker->date(),
            'notes' => $this->faker->sentences(3, true)
        ];
    }
}
