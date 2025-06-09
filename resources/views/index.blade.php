<x-layout>

    <x-sections.hero />

    <x-sections.projects :featuredProjects="$featuredProjects" />

    <x-sections.tech-stack :techStacks="$techStacks" />

    <x-sections.skills />

    <x-sections.section id="about">
        <h2 class="text-3xl font-bold text-center">About Me</h2>
        <p class="text-center mt-2 text-gray-600">I’m passionate about building creative and maintainable web systems.
        </p>

        <div class="max-w-3xl mx-auto mt-10 text-gray-700 text-md">
            <p>{{ $developer->bio ?? 'A regular country girl with a soft spot for coding.' }}</p>
        </div>
    </x-sections.section>

    <x-sections.contact />

</x-layout>
