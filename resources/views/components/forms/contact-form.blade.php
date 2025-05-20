<div class="min-w-2xl">
    <h2 class="text-3xl font-bold text-center">Get In Touch</h2>
    <p class="text-center mt-2 text-gray-600">Have a project or just want to say hi? Let’s connect.</p>
    <x-forms.form method="POST" action="/contact" class="max-w-xl mx-auto mt-10 space-y-6">
        <x-forms.input type="text" name="name" placeholder="Your Name" class="w-full p-3 border" />
        <x-forms.input type="text" name="email" placeholder="Your email" class="w-full p-3 border" />
        <x-forms.textarea name="message" placeholder="Your Message"
            class="w-full p-3 border h-32"></x-forms.textarea>
        <x-button type="submit" class="w-full">Send Message</x-button>
    </x-forms.form>

    @if (session()->has('success'))
        <div x-data="{ open: true }"
            x-show="open"
            class="fixed inset-0 flex justify-center items-center">
            <div class="fixed inset-0 mx-auto bg-gray-300 opacity-80"></div>
            <div @click.outside="open = false"
                class="relative bg-white p-2 md:p-6 rounded-lg shadow-xl max-w-2xl z-100 w-96 text-center opacity-100">
                <h2 class="text-xl font-semibold mb-4">{{ session()->get('success') }}</h2>
                <p class="text-gray-600 mb-4">Thanks for reaching out!</p>
                <!-- Close Button -->
                <x-button @click="open = false"
                    class="w-32">
                    OK
                </x-button>
            </div>
        </div>
    @endif
</div>
