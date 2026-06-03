<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RealDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            DB::statement('TRUNCATE TABLE skills, skill_categories RESTART IDENTITY CASCADE');

            $now = now();

            DB::table('skill_categories')->insert([
                ['id' => 1, 'name' => '🔧 Back-End & Database', 'created_at' => $now, 'updated_at' => $now],
                ['id' => 2, 'name' => '🎨 Front-End & UI', 'created_at' => $now, 'updated_at' => $now],
                ['id' => 3, 'name' => '🧰 Workflow & Dev Tools', 'created_at' => $now, 'updated_at' => $now],
                ['id' => 4, 'name' => '📦 WordPress & CMS', 'created_at' => $now, 'updated_at' => $now],
                ['id' => 5, 'name' => '💬 Soft Skills', 'created_at' => $now, 'updated_at' => $now],
                ['id' => 6, 'name' => '🌀 Interests', 'created_at' => $now, 'updated_at' => $now],
                ['id' => 7, 'name' => '🤖 AI in Development', 'created_at' => $now, 'updated_at' => $now],
            ]);

            DB::table('skills')->insert([
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
            ]);
        });
    }
}
