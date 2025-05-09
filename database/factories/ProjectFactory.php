<?php

namespace Database\Factories;

use App\Models\Developer;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'developer_id' => Developer::factory(),
            'title'        => ucfirst(fake()->words(3, true)),
            'description'  => fake()->paragraph(4),
            'company'      => fake()->company(),
            'location'     => fake()->city(),
            'image'        => 'https://picsum.photos/id/' . rand(1, 1000) . '/600/300',
            'image_alt'    => fake()->sentence(3),
            'featured'     => fake()->boolean(30),
            'url_github'   => 'https://github.com/g-i-kala/' . Str::slug(fake()->words(3, true)),
            'url_demo'     => fake()->url(),
            'created_at'   => fake()->dateTimeBetween('-2 years'),
            'updated_at'   => now(),
        ];
    }
}
