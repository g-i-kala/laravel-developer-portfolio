@props(['developer'])
<x-sections.section id="hero">
    <h1 class="text-2xl font-bold">Hi, I’m {{ $developer->full_name ?? 'Jane Doe' }} </h1>
    <h2 class="text-4xl font-bold">Creative Full-Stack Developer </h2>

    <div class="w-full sm:w-1/2 my-4">
        <p class="text-xl mt-4 text-secondary text-left" data-aos="fade-right" data-aos-delay="400">From syntax to
            style, </p>
        <p class="text-xl mt-4 text-secondary text-center" data-aos="fade" data-aos-delay="600">I build modern web
            experiences </p>
        <p class="text-xl mt-4 text-secondary text-right" data-aos="fade-left" data-aos-delay="800">with Laravel,
            PHP & WordPress.</p>
    </div>
    <div class="mt-6 flex justify-center gap-4">
        <x-link-button href="#projects" class="btn">View Projects</x-link-button>
        <x-link-button href="/resume/Ankiewicz_CV.pdf" class="btn-secondary">Download Resume</x-link-button>
    </div>
</x-sections.section>
