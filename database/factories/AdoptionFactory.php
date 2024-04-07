<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adoption>
 */
class AdoptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'pet_id' => $this->faker->numberBetween(1, 10),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email_address' => $this->faker->email(),
            'phone_number' => $this->faker->phoneNumber(),
            'house_number' => $this->faker->numberBetween(1, 30),
            'street' => $this->faker->streetName(),
            'city' => $this->faker->city()
        ];
    }
}
