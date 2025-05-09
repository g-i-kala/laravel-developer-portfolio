<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\Developer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Developer::factory(10)
            ->create()
            ->each(function ($developer) {
                // Attach 5 random skills to each developer
                $skills = Skill::inRandomOrder()->limit(5)->get();  // Limit to 5 skills
                foreach ($skills as $skill) {
                    $developer->skills()->attach($skill->id, [
                        'level' => collect([1,2,3,4,5])->random(),
                    ]);
                }
            });
    }
}
