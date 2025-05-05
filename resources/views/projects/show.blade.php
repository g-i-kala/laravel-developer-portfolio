<x-layout>
    <x-page-heading>My Projects</x-page-heading>
        <div class="mt-6 space-y-6">
            @foreach ($projects as $project )
                <x-project-card-wide :$project />
            @endforeach
        </div>

        <div class="mt-6"> 
            {{ $projects->links() }}
        </div>
</x-layout>