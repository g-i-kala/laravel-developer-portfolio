@props(['project'])

<x-panel class="flex flex-col md:flex-row gap-6">

    <div class="flex-1 flex flex-col w-full md:w-2/3 justify-between space-y-4">

        <a href="#" class="self-start text-sm text-primary">{{ $project->company ?? 'No Developer' }}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-primary transition-colors duration-300">
            <a href="{{ $project->url_demo }}" target="_blank">
                {{ $project->title }}
            </a>
        </h3>
        <div class="text-sm text-text mt-2 mb-auto">
            @php
                $description = explode('.', $project->description);
            @endphp
            <ul class="">
                @foreach ($description as $item)
                    @if (trim($item) !== '')
                        <li class="text-left list-inside">-> {{ $item }}</li>
                    @endif
                @endforeach
            </ul>
        </div>
        {{-- <div class="space-y-1 space-x-2">
            @foreach ($project->tags as $tag)
                <x-tag :$tag size="small" />
            @endforeach
        </div> --}}
    </div>
    <div class="flex flex-col w-full md:w-1/3 space-y-4">
        <div>
            <ul class="flex gap-2 flex-wrap text-xs text-gray-600">
                @foreach ($project->techStacks as $tech)
                    <li class="px-2 py-1 bg-bg-light">{{ $tech->name }}
                    </li>
                @endforeach
            </ul>
        </div>


        <a href="{{ $project->url_demo }}" class="w-full">
            <img src={{ $project->image }} alt="{{ $project->image_alt }}" />
        </a>

        <div class="flex flex-col md:flex-row justify-center items-center gap-2 w-full text-center">

            <x-link-button href="{{ $project->url_github }}" class="w-1/2 md:w-full">GitHub
                Repo</x-link-button>
            <x-link-button href="{{ $project->url_demo }}" class="w-1/2 md:w-full">Live
                Demo</x-link-button>

        </div>
        @auth
            {{-- @if (auth()->user()->developer && auth()->user()->developer->id === $project->developer_id)      --}}
            @if (auth()->user()->ownsproject($project))
                {{-- <p>{{ $project->id }}</p> --}}
                <div class="flex flex-row space-x-4 justify-end items-center">
                    <div class="text-right">
                        <x-forms.button form="update-form-{{ $project->id }}"
                            class="py-1 px-1 text-xs hover:bg-blue-400">Edit</x-forms.button>
                    </div>
                    <div class="text-right">
                        <x-forms.button form="delete-form-{{ $project->id }}"
                            class="py-1 px-1 text-xs hover:bg-red-500">Delete</x-forms.button>
                    </div>

                    <form method="POST" action="/projects/edit/{{ $project->id }}" id="update-form-{{ $project->id }}"
                        class="hidden">
                        {{-- <input type="hidden" name='projectId' value={{ $project->id }}> --}}
                        @csrf
                    </form>

                    <form method="POST" action="/projects/{{ $project->id }}" id="delete-form-{{ $project->id }}"
                        class="hidden">
                        {{-- <input type="hidden" name='projectId' value={{ $project->id }}> --}}
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            @endif
        @endauth

    </div>

</x-panel>
