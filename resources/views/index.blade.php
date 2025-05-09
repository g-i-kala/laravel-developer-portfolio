<x-layout :$developer>

    <x-sections.hero :developer="$developer" />

    <x-sections.projects :featuredProjects="$featuredProjects" />

    <x-sections.tech-stack :techStacks="$techStacks" />

    <section id="skills" class="py-20">
        <h2 class="text-3xl font-bold text-center mb-4">Skills & Toolset</h2>
        <p class="text-center text-gray-600 mb-12">Things I use to build, debug, and ship projects.</p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto text-sm leading-relaxed text-gray-800">

            <div>
                <h3 class="font-semibold text-lg border-b pb-1 mb-2">🔧 Back-End & Database</h3>
                <ul class="list-disc list-inside space-y-1">
                    <li>PHP (OOP, MVC, basic Laravel)</li>
                    <li>MySQL, PostgreSQL, REST API</li>
                    <li>Basic unit testing with PhpUnit / Pest</li>
                    <li>Debugging, performance, and security (XSS, CSRF, SQL Injection)</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-lg border-b pb-1 mb-2">🎨 Front-End Development</h3>
                <ul class="list-disc list-inside space-y-1">
                    <li>HTML5, CSS3, JavaScript, jQuery</li>
                    <li>Tailwind CSS, Bootstrap, Sass</li>
                    <li>Responsive Web Design (RWD)</li>
                    <li>Accessibility & WCAG standards</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-lg border-b pb-1 mb-2">🧰 Workflow & Dev Tools</h3>
                <ul class="list-disc list-inside space-y-1">
                    <li>Git, GitHub, Docker, Composer, NPM</li>
                    <li>Jira, basic CI/CD understanding</li>
                    <li>PHP version upgrades, dev environments, migrations</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-lg border-b pb-1 mb-2">📦 WordPress & CMS</h3>
                <ul class="list-disc list-inside space-y-1">
                    <li>WordPress, WooCommerce</li>
                    <li>Custom themes & plugin development</li>
                    <li>Oxygen Builder, Elementor</li>
                    <li>Advanced Custom Fields (ACF), CPT, WP REST API</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-lg border-b pb-1 mb-2">💬 Soft Skills</h3>
                <ul class="list-disc list-inside space-y-1">
                    <li>Analytical thinking</li>
                    <li>Independence & problem-solving</li>
                    <li>Attention to visual detail & clean UI</li>
                    <li>Curious & always learning new tech</li>
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-lg border-b pb-1 mb-2">🌀 Interests</h3>
                <ul class="list-disc list-inside space-y-1">
                    <li>Kitesurfing coaching & freestyle</li>
                    <li>Music production</li>
                    <li>Reiki & mindfulness practices</li>
                    <li>Graphic design</li>
                </ul>
            </div>

        </div>
    </section>



    <section id="about" class="py-20">
        <h2 class="text-3xl font-bold text-center">About Me</h2>
        <p class="text-center mt-2 text-gray-600">I’m passionate about building creative and maintainable web systems.
        </p>

        <div class="max-w-3xl mx-auto mt-10 text-gray-700 text-lg">
            <p>{{ $developer->bio ?? 'A regular country girl with a soft spot for coding.' }}</p>
        </div>
    </section>

    <section id="contact" class="py-20">
        <h2 class="text-3xl font-bold text-center">Get In Touch</h2>
        <p class="text-center mt-2 text-gray-600">Have a project or just want to say hi? Let’s connect.</p>

        <form class="max-w-xl mx-auto mt-10 space-y-6">
            <input type="text" placeholder="Your Name" class="w-full p-3 border rounded">
            <input type="email" placeholder="Email Address" class="w-full p-3 border rounded">
            <textarea placeholder="Your Message" class="w-full p-3 border rounded h-32"></textarea>
            <x-button type="submit" class="btn w-full">Send Message</x-button>
        </form>
    </section>

</x-layout>
