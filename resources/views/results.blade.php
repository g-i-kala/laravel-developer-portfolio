<x-layout>
    <x-page-heading>Results</x-page-heading>

    <div class="space-y-6">
        @foreach ($projects as $project)
            <x-project-card-wide :$project />
        @endforeach
    </div>
</x-layout>
