<a href="#page" 
    x-data="{visible:false}" @scroll.window="visible = window.pageYOffset < 100  ? false : true"
    :class="(visible === false) ? 'opacity-0 pointer-events-none' : 'opacity-100 text-text'"
    class="fixed bottom-8 right-4 sm:right-10 w-10 h-10 bg-bg-light flex items-center justify-center shadow-md transition-all duration-500 ease-in-out z-50 transform">
    <i class="fa-duotone fa-solid fa-arrow-up fa-2xl"></i>
</a>