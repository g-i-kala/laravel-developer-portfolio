<?php

namespace Database\Factories;

use App\Models\TechStackType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TechStack>
 */
class TechStackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => fake()->randomElement(['Html', 'Css','Laravel', 'PHP', 'JavaScript','SQL']),
           'tech_stack_type_id' => TechStackType::factory(),
        ];
    }
}
