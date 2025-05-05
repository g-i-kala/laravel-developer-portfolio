<?php

namespace Database\Seeders;

use App\Models\SkillCategory;
use Illuminate\Database\Seeder;

class SkillCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SkillCategory::factory()
            ->count(5)
            ->create();

    }
}
