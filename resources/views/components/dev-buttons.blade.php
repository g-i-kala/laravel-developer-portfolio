<div class="w-full text-right">
    @auth
        <div class="flex space-x-6 font-bold">
            <a href="/projects/show">My Projects</a>
            <a href="/projects/create">Add a Project</a>
            <form method="POST" action="/logout">
                @csrf
                @method("DELETE")
    
                <button>Log Out</button>
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