@props(['featuredProjects'])
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
