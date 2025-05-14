@props(['name'])
<x-layout>
    <x-page-heading>Results for {{ request('q') ?? ($name ?? '') }}</x-page-heading>

    <div class="space-y-6">
        @foreach ($projects as $project)
            <x-project-card-wide :$project />
        @endforeach
    </div>
</x-layout>
