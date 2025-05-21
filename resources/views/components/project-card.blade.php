@props(['project'])
<div x-data="{ showModal: false }">
    <!-- Project Card -->
    <div
        class="space-y-2 bg-bg-light h-full flex flex-col justify-between rounded shadow-md p-6 hover:scale-105 transition duration-300 hover:shadow-2xl">
        <h3 class="font-semibold text-lg">{{ $project->title }}</h3>
        <p class="text-sm text-gray-500 mb-3">{{ Str::limit($project->description, 100) }}</p>

        <div class="flex flex-col space-y-4">
            <x-button x-data @click="showModal = true;  document.body.classList.add('overflow-hidden')"
                class='mt-4 hover:bg-bg-main hover:cursor-pointer '>
                Read More
            </x-button>
            <a href="{{ $project->url_github }}" class="text-primary font-medium">GitHub →</a>
        </div>
    </div>

    {{-- Modal --}}
    <div x-show="showModal"
        x-transition
        class="fixed inset-0 flex items-center justify-center z-50">
        {{-- Gray Backround --}}
        <div class='fixed inset-0 bg-gray-300 opacity-80'> </div>
        <div class="relative bg-white p-2 md:p-6 rounded-lg shadow-xl max-w-2xl w-full z-100 overflow-y-auto max-h-screen"
            @click.outside="showModal = false;  document.body.classList.remove('overflow-hidden')">
            <button @click="showModal = false;  document.body.classList.remove('overflow-hidden')"
                class="absolute top-2 right-2 md:right-4 md:top-4 hover:bg-bg-main text-sm font-semibold border-0 hover:cursor-pointer">[
                X ]</button>

            <h2 class="text-2xl font-semibold">{{ $project->title }}</h2>
            <p class="mb-2 text-sm">deveoped for {{ $project->company }}</p>
            <a href="{{ $project->url_demo }}">
                <img class="shadow-xs shadow-muted" src={{ $project->image }} alt="{{ $project->image_alt }}" />
            </a>

            <div class="flex flex-col md:flex-row gap-2 justify-around items-center mt-4">

                <div class="flex flex-col space-y-4 w-full md:w-3/4 mb-4">
                    <p class="text-sm text-left"><strong>Location:</strong> {{ $project->location }}</p>

                    @php
                        $description = explode('.', $project->description);
                    @endphp
                    <ul class="">
                        @foreach ($description as $item)
                            @if (trim($item) !== '')
                                <li class="text-left">-> {{ $item }}</li>
                            @endif
                        @endforeach
                    </ul>
                    <ul class="flex gap-2 flex-wrap text-xs text-muted">
                        @foreach ($project->techStacks as $techStack)
                            <li>
                                <x-tech-stack :$techStack class="border-none bg-bg-light" />
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="flex flex-row md:flex-col justify-center items-center gap-2 w-full md:w-1/4">

                    <x-link-button href="{{ $project->url_github }}" class="w-1/2 md:w-full">GitHub
                        Repo</x-link-button>
                    <x-link-button href="{{ $project->url_demo }}" class="w-1/2 md:w-full">Live
                        Demo</x-link-button>

                </div>
            </div>

        </div>
    </div>
</div>
