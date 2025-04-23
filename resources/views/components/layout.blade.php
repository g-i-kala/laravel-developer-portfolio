<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    @vite (['resources/js/app.js'])
</head>
<body class="bg-bg-main text-text font-inter pb-20">
    <div class="wrapper px-10">
        <nav class="nav flex justify-between items-center p-4 border-b border-white/10">
            <div>
                <a href="/" class="">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="site logo" class="w-[3rem]" />
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <x-menu-item href="#">about</x-menu-item>
                <x-menu-item href="#">skills</x-menu-item>
                <x-menu-item href="#">projects</x-menu-item>
                <x-menu-item href="#">contact</x-menu-item>
            </div>            
        </nav>

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

        <div class="main mx-auto mt-10 max-w-[986px]">
            {{ $slot }}
        </div>
    </div>
</body>
</html>