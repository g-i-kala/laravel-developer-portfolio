<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\SkillCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = SkillCategory::all();

        $categories->each(function ($category) {
            Skill::factory()
                ->count(10)
                ->create([
                    'skill_category_id' => $category->id,
            ]);
        });
    }
}
