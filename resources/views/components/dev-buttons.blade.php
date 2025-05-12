<div class="w-full text-right">
    @auth
        <div class="flex flex-col items-start space-x-6 space-y-4 font-bold">
            <div>
                <x-link-button href="/projects/show">My Projects</x-link-button>
                <x-link-button href="/projects/create">Add a Project</x-link-button>
                <x-link-button href="/skills/create">Manage Skills</x-link-button>

            </div>
            <form method="POST" action="/logout">
                @csrf
                @method('DELETE')

                <button class="inline-block shadow-md py-2 px-2 font-bold transition duration-300 hover:text-primary">Log
                    Out</button>
            </form>
        </div>
    @endauth
    {{-- @guest
        <div class="space-x-6 font-bold">
            <x-link-button href="/register">Sign Up</x-link-button>
            <x-link-button href="/login">Log In</x-link-button>
        </div>
    @endguest --}}
</div>
