<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\SkillCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            ['name' => 'PHP (OOP, MVC, basic Laravel)', 'skill_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'MySQL, PostgreSQL, REST API', 'skill_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HTML5, CSS3, JavaScript, jQuery, Alpine.js', 'skill_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Tailwind CSS, Bootstrap, Sass', 'skill_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Git, GitHub, Docker, Composer, NPM', 'skill_category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jira, basic CI/CD understanding', 'skill_category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'WordPress, WooCommerce', 'skill_category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Custom themes & plugin development', 'skill_category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Analytical thinking', 'skill_category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Independence & problem-solving', 'skill_category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kitesurfing coaching & freestyle', 'skill_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Teamwork and communication', 'skill_category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Basic unit testing with PhpUnit / Pest', 'skill_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Debugging, performance, and security (XSS, CSRF, SQL Injection)', 'skill_category_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Responsive Web Design (RWD)', 'skill_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Accessibility & WCAG standards', 'skill_category_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'PHP version upgrades, dev environments, migrations', 'skill_category_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Oxygen Builder, Elementor', 'skill_category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Advanced Custom Fields (ACF), CPT, WP REST API', 'skill_category_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Attention to visual detail & clean UI', 'skill_category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Curious & always learning new tech', 'skill_category_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Music production', 'skill_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Graphic design', 'skill_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Reiki & mindfulness practices', 'skill_category_id' => 6, 'created_at' => now(), 'updated_at' => now()],
]);
    }
}
