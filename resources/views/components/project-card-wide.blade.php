@props(['project'])

<x-panel class="flex flex-row gap-6">
    <div>
        <x-developer-logo :developer="$project->developer"/>
    </div>
    
    <div class="flex-1 flex flex-col ">
        <a href="#" class="self-start text-sm text-gray-200">{{ $project->developer->name ?? 'No Developer' }}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">
            <a href="{{ $project->url }}" target="_blank">
                {{ $project->title }}
            </a>
        </h3>
        <p class="text-sm text-gray-400 mt-auto">{{ $project->salary }}</p>
    </div>
    <div class="flex flex-col justify-between">
        <div class="space-y-1">
            @foreach ($project->tags as $tag )
                <x-tag :$tag />
            @endforeach
        </div>
        @auth
            {{-- @if ( auth()->user()->developer && auth()->user()->developer->id === $project->developer_id )      --}}
            @if ( auth()->user()->ownsproject($project) )     
                {{-- <p>{{ $project->id }}</p> --}}
                <div class="flex flex-row space-x-4 justify-end items-center">
                    <div class="text-right">
                        <x-forms.button form="update-form-{{ $project->id }}" class="py-1 px-1 text-xs hover:bg-blue-400">Edit</x-forms.button>
                    </div>
                    <div class="text-right">
                        <x-forms.button form="delete-form-{{ $project->id }}" class="py-1 px-1 text-xs hover:bg-red-500">Delete</x-forms.button>
                    </div>

                    <form method="POST" action="/projects/edit/{{ $project->id }}" id="update-form-{{ $project->id }}" class="hidden">
                        {{-- <input type="hidden" name='projectId' value={{ $project->id }}> --}}
                        @csrf
                    </form>

                    <form method="POST" action="/projects/{{ $project->id }}" id="delete-form-{{ $project->id }}" class="hidden">
                        {{-- <input type="hidden" name='projectId' value={{ $project->id }}> --}}
                        @csrf
                        @method('DELETE')
                    </form>
                </div>  
            
            @endif
        @endauth
        
    </div>
        
</x-panel>