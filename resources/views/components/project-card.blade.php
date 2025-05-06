@props(['project'])
<div x-data="{ showModal: false }">
    <!-- Project Card -->
    <div
        class=" space-y-2 bg-bg-light flex flex-col justify-around rounded shadow-md p-6 hover:scale-105 transition duration-300 hover:shadow-2xl">
        <h3 class="font-semibold text-lg">{{ $project->title }}</h3>
        <p class="text-sm text-gray-500 mb-3">{{ Str::limit($project->description, 100) }}</p>

        <x-button x-data @click="showModal = true"
            class='mt-4 hover:bg-bg-main hover:cursor-pointer '>
            Read More
        </x-button>
        <a href="{{ $project->url_github }}" class="text-primary font-medium">GitHub →</a>
    </div>

    <!-- Modal -->
    <div x-show="showModal"
        x-transition
        class="fixed inset-0 bg-bg-main bg-opacity-50 flex items-center justify-center z-50"
        @click.away="showModal = false">
        <div class="bg-white p-6 rounded-lg shadow-xl max-w-2xl w-full">
            <h2 class="text-2xl font-semibold mb-2">{{ $project->title }}</h2>
            <p class="mb-4">{{ $project->description }}</p>
            <p><strong>Company:</strong> {{ $project->company }}</p>
            <p><strong>Location:</strong> {{ $project->location }}</p>
            <p class="mt-4">
                <a href="{{ $project->url_github }}" class="text-blue-600 underline">GitHub Repo</a>
                <span> | </span>
                <a href="{{ $project->url_demo }}" class="text-blue-600 underline">Live Demo</a>
            </p>
            <button @click="showModal = false"
                class="mt-6 bg-gray-800 text-white px-4 py-2 rounded hover:bg-gray-700">Close</button>
        </div>
    </div>
</div>
