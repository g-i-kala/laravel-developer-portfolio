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
        $now = now();

        DB::table('skills')->upsert([
            [
                'name' => 'PHP 7.4–8.2 (OOP, MVC)',
                'skill_category_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Laravel, basic Symfony',
                'skill_category_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'MySQL, PostgreSQL (database design, query optimization)',
                'skill_category_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'REST API (implementation and integrations)',
                'skill_category_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Security: XSS, CSRF, SQL Injection (basic protections)',
                'skill_category_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Testing: PHPUnit, Pest – basics',
                'skill_category_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'name' => 'HTML5, CSS3, JavaScript (Vanilla, Alpine.js), Vue.js (basics)',
                'skill_category_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Vue + Inertia (KaroTaro project)',
                'skill_category_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Tailwind, Bootstrap, Sass',
                'skill_category_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'name' => 'Git, GitHub, GitLab, Bitbucket',
                'skill_category_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Docker, Composer, NPM',
                'skill_category_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Jira, CI/CD, dev/stage/prod environments',
                'skill_category_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'name' => 'WordPress (Gutenberg, ACF, Oxygen)',
                'skill_category_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ],

            [
                'name' => 'Claude, Copilot-like tools, Vibe Coding, Cursor',
                'skill_category_id' => 7,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Legacy code analysis, refactoring, test generation, speeding up work',
                'skill_category_id' => 7,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ], ['name', 'skill_category_id'], ['updated_at']);


    }
}
