<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class RealDataProjectSeeder extends Seeder
{
    public function run()
    {
        $projects = [
            [
                'developer_id' => 1,
                'title' => 'NextStep Collective',
                'description' => 'Developed a comprehensive job board application using Laravel, focusing on robust CRUD operations and advanced search functionalities. Implemented input sanitization and validation with Laravel Form Requests to ensure data integrity. Utilized Blade templating for organized and reusable views, enhancing maintainability and scalability. Integrated a tagging system with scheduled tasks for tag management. Continuously developing new features, including email confirmation, password recovery, user profile management, and social media integration.',
                'company' => 'KaroCreative',
                'location' => 'Remote',
                'image' => 'https://karocreative.pl/wp-content/uploads/2025/05/ns_collective_screen-scaled.webp',
                'image_alt' => 'screenshot next step collective',
                'featured' => true,
                'url_github' => 'https://github.com/g-i-kala/laravel-nextstep-collective',
                'url_demo' => 'https://nextstep-collective-main-groblg.laravel.cloud',
                'tags' => 'Job Board,Laravel,Remote,Tech,Innovation',
                'tech_stack' => 'Laravel,PHP,Eloquent,HTML,Tailwind CSS,Alpine.js',
            ],
            [
                'developer_id' => 1,
                'title' => 'Fitness Pleasure',
                'description' => 'Developed a customizable Wordpress theme with a fully responsive and accessible design, adhering to ARIA and WCAG standards. Implemented custom menu and hero components, integrated WSForm, and optimized for performance and SEO. Enabled translation-ready features and utilized the Theme Customizer API for real-time settings adjustments.',
                'company' => 'Jess Slate Co.',
                'location' => 'Remote',
                'image' => 'https://karocreative.pl/wp-content/uploads/2025/03/fitness_pleasure-scaled.webp',
                'image_alt' => 'screenshot fitness pleasure',
                'featured' => true,
                'url_github' => 'https://github.com/g-i-kala/wp-custom-theme-fitness-pleasure',
                'url_demo' => 'https://srv48890.seohost.com.pl/fitness-pleasure/',
                'tags' => 'Wordpress,SEO,Responsive,Customizable,Fitness',
                'tech_stack' => 'Wordpress,Alpine.js,Tailwind CSS,HTML,MySQL,PHP',
            ],
            [
                'developer_id' => 1,
                'title' => 'Kalissima',
                'description' => 'Engineered a simple blog Wordpress theme with a focus on custom header and footer components. Ensured full responsiveness and accessibility, integrated WSForm, and optimized for SEO. Supported multilingual capabilities and real-time customization using the Theme Customizer API.',
                'company' => 'Kalissima',
                'location' => 'Remote',
                'image' => 'https://karocreative.pl/wp-content/uploads/2025/02/screenshot-scaled.jpg',
                'image_alt' => 'screenshot',
                'featured' => true,
                'url_github' => 'https://github.com/g-i-kala/wp-custom-theme-kalissima',
                'url_demo' => 'https://srv48890.seohost.com.pl/kalissima/',
                'tags' => 'Blog,Wordpress,Custom,Responsive,SEO',
                'tech_stack' => 'Wordpress,PHP,CSS,HTML,jQuery',
            ],
            [
                'developer_id' => 1,
                'title' => '#dajse streetwear',
                'description' => 'Currently developing a project with custom UX/UI design and full mockups. Integrated WooCommerce and Gelato dropshipping. Built with Oxygen Builder, following RWD and WCAG best practices, and ensuring SEO readiness.',
                'company' => 'Dajse',
                'location' => 'Remote',
                'image' => 'https://karocreative.pl/wp-content/uploads/2025/02/dajse_screenshot-scaled.webp',
                'image_alt' => 'dajse screenshot',
                'featured' => false,
                'url_github' => null,
                'url_demo' => 'https://karocreative.pl/dajse/',
                'tags' => 'Streetwear,UX/UI,Design,Woocommerce,Custom',
                'tech_stack' => 'CSS,Generative AI,HTML,JavaScript,PHP,WooCommerce,Wordpress',
            ],
            [
                'developer_id' => 1,
                'title' => 'reikiflow.pl',
                'description' => 'Crafted graphic and logo designs, prototyped in Figma. Built responsive and accessible components in Wordpress using Oxygen Builder. Integrated custom snippets and a booking calendar, optimized for SEO, and ensured security.',
                'company' => 'Reiki Flow',
                'location' => 'Remote',
                'image' => 'https://karocreative.pl/wp-content/uploads/2024/09/reik.png',
                'image_alt' => 'page screenshot',
                'featured' => false,
                'url_github' => null,
                'url_demo' => 'https://reikiflow.pl/',
                'tags' => 'Graphic Design,Logo,Booking,Calendar,Integration',
                'tech_stack' => 'Wordpress,CSS,HTML,JavaScript,MySQL,PHP,AI Driven Data Extraction,Generative AI',
            ],
            [
                'developer_id' => 1,
                'title' => 'joannaduda.eu',
                'description' => 'Designed and implemented a responsive and accessible Wordpress site with custom components using Oxygen Builder. Focused on SEO optimization and analytics integration while maintaining security.',
                'company' => 'Joanna Duda',
                'location' => 'Remote',
                'image' => 'https://karocreative.pl/wp-content/uploads/2024/09/jinx.png',
                'image_alt' => 'page screenshot',
                'featured' => false,
                'url_github' => null,
                'url_demo' => 'https://joannaduda.eu/',
                'tags' => 'Graphic Design,Logo,SEO,Responsive,Secure',
                'tech_stack' => 'Wordpress,HTML,CSS,JavaScript',
            ],
            [
                'developer_id' => 1,
                'title' => 'letgotohaveit.com',
                'description' => 'Developed a responsive and accessible Wordpress site with custom components using Oxygen Builder. Emphasized SEO optimization, analytics integration, and security.',
                'company' => 'LetGoToHaveIt',
                'location' => 'Remote',
                'image' => 'https://karocreative.pl/wp-content/uploads/2024/09/lgth.png',
                'image_alt' => 'page screenshot',
                'featured' => false,
                'url_github' => null,
                'url_demo' => 'https://letgotohaveit.com/',
                'tags' => 'Graphic Design,Logo,WooCommerce,SEO,Secure',
                'tech_stack' => 'Wordpress,AI Batch Processing,CSS,HTML,JavaScript,WooCommerc',
            ],
            [
                'developer_id' => 1,
                'title' => 'kdp books listing',
                'description' => 'Created a minimalistic design with responsive and accessible components in Wordpress, integrated ACF, and built using Oxygen Builder. Focused on SEO optimization and analytics integration, ensuring security.',
                'company' => 'KDP Books',
                'location' => 'Remote',
                'image' => 'https://karocreative.pl/wp-content/uploads/2025/02/kdp_books-scaled.webp',
                'image_alt' => 'page screenshot',
                'featured' => false,
                'url_github' => null,
                'url_demo' => 'https://karocreative.pl/books/',
                'tags' => 'Minimalistic,ACF,Responsive,SEO,Secure',
                'tech_stack' => 'ACF,CSS,HTML,JavaScript,Wordpress',
            ],
            [
                'developer_id' => 1,
                'title' => 'kalafonia.com',
                'description' => 'Designed and implemented a responsive and accessible Wordpress site with custom components using Oxygen Builder. Prioritized SEO optimization, analytics integration, and security.',
                'company' => 'Kalafonia',
                'location' => 'Remote',
                'image' => 'https://karocreative.pl/wp-content/uploads/2024/09/kf.png',
                'image_alt' => 'page screenshot',
                'featured' => false,
                'url_github' => null,
                'url_demo' => 'https://karocreative.pl/kalafonia/',
                'tags' => 'Graphic Design,Logo,SEO,Responsive,Secure',
                'tech_stack' => 'CSS,HTML,JavaScript,Wordpress',
            ]
        ];

        foreach ($projects as $projectData) {
            $tags = $projectData['tags'];
            $techStack = $projectData['tech_stack'];
            unset($projectData['tags'], $projectData['tech_stack']);

            $project = Project::create($projectData);

            if ($tags) {
                foreach (explode(',', $tags) as $tag) {
                    $project->tag($tag);
                }
            }

            if ($techStack) {
                foreach (explode(',', $techStack) as $tech) {
                    $project->techStack($tech);
                }
            }
        }
    }
}
