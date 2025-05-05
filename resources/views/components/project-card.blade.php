@props(['project'])

<x-panel class="flex-col text-center">
    <div class="self-start text-sm">{{ $project->company ?? 'No Developer' }}</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-600 text-xl text-bold transition-colors duration-300">
            <a href="{{ $project->url }}" target="_blank">
                {{ $project->title }}
            </a>
        </h3>

        <p class="text-sm mt-4">{{ $project->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-1">
            @foreach ($project->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div>
        <x-developer-logo :developer="$project->developer" :width="42" />
    </div>
</x-panel>
