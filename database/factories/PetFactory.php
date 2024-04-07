<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'type' => $this->faker->numberBetween(0, 1),
            'breed' => $this->faker->word(),
            'name' => $this->faker->firstName(),
            'gender' => $this->faker->numberBetween(0, 1),
            'description' => $this->faker->text(),
            'image' => $this->faker->filePath(),
        ];
    }
}
