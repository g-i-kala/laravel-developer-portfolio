<div class="w-full text-right">
    @auth
        <div class="flex space-x-6 font-bold">
            <x-link-button href="/projects/show">My Projects</x-link-button>
            <x-link-button href="/projects/create">Add a Project</x-link-button>
            <form method="POST" action="/logout">
                @csrf
                @method("DELETE")
    
                <button class="inline-block shadow-md py-2 px-2 font-bold transition duration-300 hover:text-primary">Log Out</button>
            </form>
        </div>
    @endauth
    @guest
        <div class="space-x-6 font-bold">
            <x-link-button href="/register">Sign Up</x-link-button>
            <x-link-button href="/login">Log In</x-link-button>
        </div>
    @endguest
</div>