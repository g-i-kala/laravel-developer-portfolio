@props(['job'])

<x-panel class="flex-col text-center">
    <div class="self-start text-sm">{{ $job->employer->name }}</div>

    <div class="py-8">
        <h3 class="group-hover:text-blue-600 text-xl text-bold transition-colors duration-300">
            <a href="{{ $job->url }}" target="_blank">
                {{ $job->title }}
            </a>
        </h3>
       
        <p class="text-sm mt-4">{{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-1">
            @foreach ($job->tags as $tag )
                <x-tag :$tag size="small"/>
            @endforeach
        </div>
        <x-employer-logo :employer="$job->employer" :width="42"/>
    </div>
</x-panel>