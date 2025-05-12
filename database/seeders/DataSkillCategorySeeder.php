<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skill_categories')->insert([
            ['id' => 1, 'name' => '🔧 Back-End & Database', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'name' => '🎨 Front-End Development', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 3, 'name' => '🧰 Workflow & Dev Tools', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 4, 'name' => '📦 WordPress & CMS', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 5, 'name' => '💬 Soft Skills', 'created_at' => now(), 'updated_at' => now()],
            ['id' => 6, 'name' => '🌀 Interests', 'created_at' => now(), 'updated_at' => now()],
]);
    }
}
