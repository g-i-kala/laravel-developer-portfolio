<x-layout>
    <x-sections.section id="hero">
        <h1 class="text-2xl font-bold">Hi, I’m {{ $developer->full_name ?? 'Jane Doe' }} </h1>
        <h2 class="text-4xl font-bold">Creative Full-Stack Developer </h2>

        <div class="w-full sm:w-1/2 my-4">
            <p class="text-xl mt-4 text-secondary text-left" data-aos="fade-right" data-aos-delay="400">From syntax to
                style, </p>
            <p class="text-xl mt-4 text-secondary text-center" data-aos="fade" data-aos-delay="600">I build modern web
                experiences </p>
            <p class="text-xl mt-4 text-secondary text-right" data-aos="fade-left" data-aos-delay="800">with Laravel,
                PHP & WordPress.</p>
        </div>
        <div class="mt-6 flex justify-center gap-4">
            <x-link-button href="#projects" class="btn">View Projects</x-link-button>
            <x-link-button href="/resume/Ankiewicz_CV.pdf" class="btn-secondary">Download Resume</x-link-button>
        </div>
    </x-sections.section>

    <x-sections.section id="projects">
        <x-sections.h2>Featured Projects</x-sections.h2>
        <p class="text-center mt-2 text-gray-600">Some of my latest and favorite builds.</p>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 my-10">
            @foreach ($featuredProjects as $project)
                <x-project-card :project='$project' />
            @endforeach
        </div>
        <x-link-button href="/projects/index"> View all Projects </x-link-button>
    </x-sections.section>

    <section id="techstack" class="py-20">
        <h2 class="text-3xl font-bold text-center">Tech Stack</h2>
        <p class="text-center mt-2 text-gray-600">Technologies I love working with.</p>

        <ul class="flex flex-wrap justify-center gap-6 mt-8 text-center">
            <li class="bg-gray-200 rounded px-4 py-2">PHP</li>
            <li class="bg-gray-200 rounded px-4 py-2">Laravel</li>
            <li class="bg-gray-200 rounded px-4 py-2">WordPress</li>
            <li class="bg-gray-200 rounded px-4 py-2">SQL</li>
            <li class="bg-gray-200 rounded px-4 py-2">JavaScript</li>
        </ul>
    </section>

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
            <p>I started as a designer, fell in love with code, and never looked back. I enjoy building web applications
                that blend beautiful UI with solid functionality. My current toolbox includes Laravel, PHP, Tailwind
                CSS, and WordPress — but I’m always exploring new things.</p>
        </div>
    </section>

    <section id="contact" class="py-20">
        <h2 class="text-3xl font-bold text-center">Get In Touch</h2>
        <p class="text-center mt-2 text-gray-600">Have a project or just want to say hi? Let’s connect.</p>

        <form class="max-w-xl mx-auto mt-10 space-y-6">
            <input type="text" placeholder="Your Name" class="w-full p-3 border rounded">
            <input type="email" placeholder="Email Address" class="w-full p-3 border rounded">
            <textarea placeholder="Your Message" class="w-full p-3 border rounded h-32"></textarea>
            <button type="submit" class="btn w-full">Send Message</button>
        </form>
    </section>

</x-layout>
