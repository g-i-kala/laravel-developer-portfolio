<x-layout>
    <div class="space-y-10 ">
        <section class="text-center pt-16">
            <h1 class="font-bold text-4xl">Things I use to build, debug, and ship projects.</h1>
        </section>

        <section class="pt-10">
            @foreach ($skillCategories as $category)
                <x-skills.skill-category-card :$category />
            @endforeach
        </section>
    </div>
</x-layout>
