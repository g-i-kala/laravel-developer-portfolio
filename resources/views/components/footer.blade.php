@props(['developer'])
<footer class="flex flex-col py-4 md:flex-row justify-between items-center space-y-4 md:space-y-0 text-sm text-text">
    <div class="flex items-center space-x-4">
        <x-menu-item href="#about" class="hover:text-primary transition">About</x-menu-item>
        <x-menu-item href="#skills" class="hover:text-primary transition">Skills</x-menu-item>
        <x-menu-item href="#projects" class="hover:text-primary transition">Projects</x-menu-item>
        <x-menu-item href="#contact" class="hover:text-primary transition">Contact</x-menu-item>
    </div>
    <div class="flex items-center space-x-4">
        <a href="{{ $developer->github }}" target="_blank" aria-label="GitHub"
            class="hover:text-primary transition">
            <i class="fab fa-github fa-lg"></i>
        </a>
        <a href="{{ $developer->linkedin }}" target="_blank" aria-label="LinkedIn"
            class="hover:text-primary transition">
            <i class="fab fa-linkedin fa-lg"></i>
        </a>
        <a href="mailto:{{ $developer->user->email }}" aria-label="Email" class="hover:text-primary transition">
            <i class="fas fa-envelope fa-lg"></i>
        </a>
    </div>
    <div class="mb-4 md:mb-0 items-center">
        <p>&copy; {{ date('Y') }}
            <a href="https://karocreative.pl/designer-portfolio">KaroCreatve</a>
            . All rights reserved.
        </p>
    </div>
</footer>
