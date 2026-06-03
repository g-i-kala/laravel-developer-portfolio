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
                ['id' => 5, 'name' => '🤖 AI in Development', 'created_at' => $now, 'updated_at' => $now],
                ['id' => 6, 'name' => '💬 Soft Skills', 'created_at' => $now, 'updated_at' => $now],
            ]);

            DB::table('skills')->insert([
                [
                    'name' => 'PHP (OOP, MVC), Laravel',
                    'skill_category_id' => 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Symfony – basics, currently learning',
                    'skill_category_id' => 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'MySQL, PostgreSQL – database design, query optimization, indexing',
                    'skill_category_id' => 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'REST API – implementation and integrations, GraphQL – basics',
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
                    'name' => 'Security: XSS, CSRF, SQL Injection protection, basic hardening practices',
                    'skill_category_id' => 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Debugging and refactoring in complex codebases (legacy + new modules)',
                    'skill_category_id' => 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],

                [
                    'name' => 'HTML5, CSS3, JavaScript (Vanilla JS, Alpine.js, Vue.js basics)',
                    'skill_category_id' => 2,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Tailwind CSS, Bootstrap, Sass',
                    'skill_category_id' => 2,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Responsive Web Design (RWD), basic WCAG and accessibility',
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
                    'name' => 'Team collaboration: code review, shared branches, feature branching',
                    'skill_category_id' => 3,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Classic custom themes, simple plugins, hooks (actions/filters)',
                    'skill_category_id' => 4,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Gutenberg – block themes/layouts, ACF integration',
                    'skill_category_id' => 4,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Optimizing WordPress site performance',
                    'skill_category_id' => 4,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Using AI tools such as Claude, Copilot-like assistants, and Vibe Code',
                    'skill_category_id' => 5,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'AI-assisted code analysis, refactoring suggestions, and work acceleration',
                    'skill_category_id' => 5,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Maintaining full understanding and control over the code while using AI tools',
                    'skill_category_id' => 5,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],

                [
                    'name' => 'Analytical thinking and problem-solving',
                    'skill_category_id' => 6,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Communication and effective teamwork',
                    'skill_category_id' => 6,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'High level of independence and curiosity',
                    'skill_category_id' => 6,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Strong motivation to learn and explore new technologies',
                    'skill_category_id' => 6,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Comfortable in both structured corporate environments and flexible freelance projects',
                    'skill_category_id' => 6,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            ]);
        });
    }
}
