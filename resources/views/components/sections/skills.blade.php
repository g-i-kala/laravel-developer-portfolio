<section id="skills" class="py-20">
    <h2 class="text-3xl font-bold text-center mb-4">Skills & Toolset</h2>
    <p class="text-center text-gray-600 mb-12">Things I use to build, debug, and ship projects.</p>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto text-sm leading-relaxed text-gray-800">
        @foreach ($skillCategories as $category)
            <x-skills.skill-category-card :$category />
        @endforeach
    </div>
</section>
