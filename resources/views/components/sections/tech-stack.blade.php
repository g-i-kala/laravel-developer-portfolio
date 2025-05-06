@props(['techStacks'])
<x-sections.section id="techstack" class="py-20">
    <h2 class="text-3xl font-bold text-center">Tech Stack</h2>
    <p class="text-center mt-2 text-gray-600">Technologies I love working with.</p>

    <ul class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 justify-center gap-6 mt-8 text-center">
        @foreach ($techStacks as $techStack)
            <li class="rounded px-4 py-2">[ {{ $techStack->name }} ]</li>
        @endforeach
    </ul>
</x-sections.section>
