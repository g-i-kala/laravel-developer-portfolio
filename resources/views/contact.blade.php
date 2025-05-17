<x-layout>
    <h2 class="text-3xl font-bold text-center">Get In Touch</h2>
    <p class="text-center mt-2 text-gray-600">Have a project or just want to say hi? Let’s connect.</p>

    <x-forms.form method="POST" class="max-w-xl mx-auto mt-10 space-y-6">
        <x-forms.input type="text" name="name" placeholder="Your Name" class="w-full p-3 border" />
        <x-forms.input type="text" name="email" placeholder="Your email" class="w-full p-3 border" />
        <x-forms.textarea name="message" placeholder="Your Message" class="w-full p-3 border h-32"></x-forms.textarea>
        <x-button type="submit" class="w-full">Send Message</x-button>
    </x-forms.form>
</x-layout>
