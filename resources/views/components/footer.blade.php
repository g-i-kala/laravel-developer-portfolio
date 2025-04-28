<footer class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 text-sm text-text">
    <div class="flex items-center space-x-4">
        <x-menu-item href="#about" class="hover:text-white transition">About</x-menu-item>
        <x-menu-item href="#skills" class="hover:text-white transition">Skills</x-menu-item>
        <x-menu-item href="#projects" class="hover:text-white transition">Projects</x-menu-item>
        <x-menu-item href="#contact" class="hover:text-white transition">Contact</x-menu-item>
    </div>
    <div class="flex items-center space-x-4">
        <a href="https://github.com/yourprofile" target="_blank" aria-label="GitHub" class="hover:text-white transition">
            <i class="fab fa-github fa-lg"></i>
        </a>
        <a href="https://linkedin.com/in/yourprofile" target="_blank" aria-label="LinkedIn" class="hover:text-white transition">
            <i class="fab fa-linkedin fa-lg"></i>
        </a>
        <a href="mailto:youremail@example.com" aria-label="Email" class="hover:text-white transition">
            <i class="fas fa-envelope fa-lg"></i>
        </a>
    </div>
    <div class="mb-4 md:mb-0 items-center">
        <p>&copy; {{ date('Y') }} KaroCreatve. All rights reserved.</p>
    </div>
</footer>
