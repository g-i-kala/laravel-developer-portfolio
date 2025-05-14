@props(['techStacks'])
<x-sections.section id="techstack">
    <h2 class="text-3xl font-bold text-center">Tech Stack</h2>
    <p class="text-center mt-2 text-gray-600">Technologies I work with.</p>

    <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-center gap-6 mt-8 text-center">
        @foreach ($techStacks as $techStack)
            <x-tech-stack :$techStack>[ {{ $techStack->name }} ]</x-tech-stack>
        @endforeach
    </ul>

</x-sections.section>
