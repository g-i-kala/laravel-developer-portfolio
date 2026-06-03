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
            $driver = DB::connection()->getDriverName();

            if ($driver === 'mysql') {
                DB::statement('SET FOREIGN_KEY_CHECKS=0');

                DB::table('skills')->truncate();
                DB::table('skill_categories')->truncate();

                DB::statement('SET FOREIGN_KEY_CHECKS=1');
            } elseif ($driver === 'pgsql') {
                DB::statement('TRUNCATE TABLE skills, skill_categories RESTART IDENTITY CASCADE');
            }

            $now = now();

            DB::table('skill_categories')->insert([
                ['id' => 1, 'name' => '🔧 Back-End & Database', 'created_at' => $now, 'updated_at' => $now],
                ['id' => 2, 'name' => '🎨 Front-End Development', 'created_at' => $now, 'updated_at' => $now],
                ['id' => 3, 'name' => '🧰 Workflow & Dev Tools', 'created_at' => $now, 'updated_at' => $now],
                ['id' => 4, 'name' => '📦 WordPress & CMS', 'created_at' => $now, 'updated_at' => $now],
                ['id' => 5, 'name' => '🤖 AI in Development', 'created_at' => $now, 'updated_at' => $now],
                ['id' => 6, 'name' => '💬 Soft Skills', 'created_at' => $now, 'updated_at' => $now],
            ]);

            DB::table('skills')->insert([
                [
                    'name' => 'PHP 7.4–8.2, OOP, MVC, Laravel, basic Symfony',
                    'skill_category_id' => 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'MySQL / PostgreSQL: schema design, indexing, query optimization',
                    'skill_category_id' => 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'REST API development and integrations',
                    'skill_category_id' => 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Security basics: XSS, CSRF, SQL Injection',
                    'skill_category_id' => 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'PHPUnit / Pest basics, debugging, refactoring',
                    'skill_category_id' => 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],

                [
                    'name' => 'HTML5, CSS3, JavaScript, jQuery, Alpine.js, Vue.js basics',
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
                    'name' => 'WordPress Gutenberg block layouts',
                    'skill_category_id' => 2,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'ACF integration and responsive layouts',
                    'skill_category_id' => 2,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Responsive Web Design (RWD), WCAG and accessibility basics',
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
                    'name' => 'PHP version upgrades, migrations, application maintenance',
                    'skill_category_id' => 3,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Code review, shared branches, feature branching',
                    'skill_category_id' => 3,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],

                [
                    'name' => 'WordPress custom themes and simple plugins',
                    'skill_category_id' => 4,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Hooks: actions, filters, template customization',
                    'skill_category_id' => 4,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'WooCommerce',
                    'skill_category_id' => 4,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Advanced Custom Fields (ACF), CPT, WP REST API',
                    'skill_category_id' => 4,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Oxygen Builder, Elementor',
                    'skill_category_id' => 4,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],

                [
                    'name' => 'Claude, Copilot-like tools, Cursor',
                    'skill_category_id' => 5,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'AI-assisted code analysis and refactoring',
                    'skill_category_id' => 5,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Test generation and workflow acceleration',
                    'skill_category_id' => 5,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Used with full code understanding and control',
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
                    'name' => 'Strong communication and teamwork',
                    'skill_category_id' => 6,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Independence and curiosity',
                    'skill_category_id' => 6,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Fast learner, open to new technologies',
                    'skill_category_id' => 6,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                [
                    'name' => 'Comfortable in corporate and freelance environments',
                    'skill_category_id' => 6,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
            ]);
        });
    }
}
