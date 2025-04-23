<header x-data="{atTop:true}" @scroll.window="atTop = window.pageYOffset > 50 ? false : true" 
    :class="(atTop === false) ? 'opacity-0 pointer-events-none' : 'bg-transparent'"
    class="sticky transition-all duration-500 ease-in-out transform top-0 z-50 ">
        <nav class="nav flex justify-between items-center p-4 border-b border-white/10">
            <div>
                <a href="/" class="">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="site logo" class="w-[3rem]" />
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <x-menu-item href="#about">about</x-menu-item>
                <x-menu-item href="#skills">skills</x-menu-item>
                <x-menu-item href="#projects">projects</x-menu-item>
                <x-menu-item href="#contact">contact</x-menu-item>
            </div>            
        </nav>
</header>