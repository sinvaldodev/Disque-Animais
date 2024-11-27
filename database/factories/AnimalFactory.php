<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'image' => $image = $this->faker->image('public/assets/images/animals', 640, 480, null, false),
            'name' => $this->faker->name(),
            'age' => $this->faker->numberBetween(1, 20),
            'description' => $this->faker->text(),
            'type' => $this->faker->word(),
            'breed' => $this->faker->word(),
            'location' => $this->faker->address(),
            'contact' => $this->faker->phoneNumber(),
            'status' => $this->faker->boolean(),
        ];
    }
}
