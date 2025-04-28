<x-layout>
    <div class="space-y-10 ">
        <section class="text-center pt-16">
            <h1 class="font-bold text-4xl">Let's Go Through My Projects </h1>
            <x-forms.form class="mt-6" action="/search">
                <x-forms.input :label="false" name="q" placeholder="Tech Stack..." />
            </x-forms.form>

        </section>
        
        <section class="pt-10">
            <x-section-heading> Featured Projects </x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6 ">
                @foreach ($featuredProjects as $project)
                <x-project-card :$project />
            @endforeach
            </div>
        </section>

        <section> 
            <x-section-heading> Tags </x-section-heading>
        
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>
            
        </section>
        
        <section class="featured__projects">
            <x-section-heading> Recent Projects </x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($projects as $project)
                  <x-project-card-wide :$project />
                @endforeach
            </div>
        
        </section>
    </div>
</x-layout> 