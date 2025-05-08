@props(['skillCategories'])
<div class="space-y-10 ">
    <section class="pt-10">
        <x-section-heading> Skill Categories </x-section-heading>
        <div class="flex flex-col gap-8 mt-6 ">
            @foreach ($skillCategories as $category)
                <p> {{ $category->name }} </p>
            @endforeach
        </div>
    </section>
</div>
