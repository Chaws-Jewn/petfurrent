<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dog>
 */
class DogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName(),
            'breed' => $this->faker->randomElement(['Poodle', 'Golden Retriever', 'Labrador Retriever', 'German Shepherd', 'Bulldog', 'Beagle', 'Pug', 'Rottweiler', 'Yorkshire Terrier', 'Boxer']),
            'age' => $this->faker->numberBetween(1, 20),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'description' => $this->faker->sentence(),
         ];
    }
}
