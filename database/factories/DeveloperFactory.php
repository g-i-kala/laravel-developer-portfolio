<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Skill;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Developer>
 */
class DeveloperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::factory()->create();
        $skills = Skill::inRandomOrder()->take(5)->get();

        return [
            'user_id'    => $user->id,
            'full_name'  => $user->name,
            'handle'     => Str::slug(fake()->userName()),
            'title'      => fake()->jobTitle(),
            'bio'        => fake()->paragraph(3),
            'location'   => fake()->city(),
            'website'    => fake()->url(),
            'github'     => 'https://github.com/' . fake()->userName(),
            'linkedin'   => 'https://linkedin.com/in/' . fake()->userName(),
            'avatar'     => 'https://i.pravatar.cc/150?img=' . rand(1, 70),
        ];
    }
}
