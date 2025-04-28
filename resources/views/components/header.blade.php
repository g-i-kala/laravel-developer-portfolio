<header x-data="{atTop:true}" @scroll.window="atTop = window.pageYOffset > 50 ? false : true" 
    :class="(atTop === false) ? 'opacity-0 pointer-events-none' : 'bg-transparent'"
    class="sticky transition-all duration-500 ease-in-out transform top-0 z-50 ">
        <nav class="nav flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/" class="">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="site logo" class="w-[3rem]" />
                </a>
            </div>

            <div x-data="{ mobileMenuIsOpen: false }">

                <button @click="mobileMenuIsOpen = !mobileMenuIsOpen" id="mobile-menu"
                    class="mobile-menu block lg:hidden cursor-pointer bg-transparent border-0 p-2.5"
                    x-bind:aria-expanded="mobileMenuIsOpen"
                    aria-label="Toggle navigation"
                    aria-controls="mobileMenu" data-menu-button>
                    <span class="bar block w-8 h-1 my-1.5 bg-black 200rounded-lg mx-auto transition-all duration-300"></span>
                    <span class="bar block w-8 h-1 my-1.5 bg-black rounded-lg mx-auto transition-all duration-300"></span>
                    <span class="bar block w-8 h-1 my-1.5 bg-black rounded-lg mx-auto transition-all duration-300"></span>
                </button>
            
                <!-- Mobile Full Screen Menu-->
                <div x-cloak x-show="mobileMenuIsOpen" id="full-screen-menu" role="navigation" x-show="mobileMenuIsOpen"
                    x-transition:enter="transition-opacity duration-300 ease-out"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity duration-300 ease-in"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    aria-label="Main Navigation">
            
                    <div class="fixed top-0 left-0 w-full h-screen bg-white z-100 flex items-center justify-center">
                        <button @click="mobileMenuIsOpen=!mobileMenuIsOpen" id="mobile-close"
                            aria-label="Close navigation"
                            class="absolute top-10 right-10 text-2xl text-primary font-bold pointer-events-none">
                            X
                        </button>
                        <nav role="navigation" @click.away="mobileMenuIsOpen = false"
                            aria-label="Main Navigation"
                            class="navbar">
                            <x-menu class="flex-col items-center text-2xl" />
         
                        </nav>
                    </div>
                </div>
            
                 <!-- Desktop Menu-->
                <div id="menuId"
                    class="site-nav header-menu-container hidden lg:block">
                    <nav role="navigation"
                        aria-label="Main Navigation"
                        class="navbar ">
                        <x-menu class="space-x-6" />
                    </nav>
                </div>
            </div>
        </nav>
</header>