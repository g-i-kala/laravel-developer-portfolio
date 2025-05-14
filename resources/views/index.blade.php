<x-layout>

    <x-sections.hero />

    <x-sections.projects :featuredProjects="$featuredProjects" />

    <x-sections.tech-stack :techStacks="$techStacks" />

    <x-sections.skills />

    <x-sections.section id="about">
        <h2 class="text-3xl font-bold text-center">About Me</h2>
        <p class="text-center mt-2 text-gray-600">I’m passionate about building creative and maintainable web systems.
        </p>

        <div class="max-w-3xl mx-auto mt-10 text-gray-700 text-lg">
            <p>{{ $developer->bio ?? 'A regular country girl with a soft spot for coding.' }}</p>
        </div>
    </x-sections.section>

    <x-sections.section id="contact">
        <h2 class="text-3xl font-bold text-center">Get In Touch</h2>
        <p class="text-center mt-2 text-gray-600">Have a project or just want to say hi? Let’s connect.</p>

        <form class="max-w-xl mx-auto mt-10 space-y-6">
            <input type="text" placeholder="Your Name" class="w-full p-3 border rounded">
            <input type="email" placeholder="Email Address" class="w-full p-3 border rounded">
            <textarea placeholder="Your Message" class="w-full p-3 border rounded h-32"></textarea>
            <x-button type="submit" class="btn w-full">Send Message</x-button>
        </form>
    </x-sections.section>

</x-layout>
