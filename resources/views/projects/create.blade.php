<x-layout>
    <x-page-heading>Create Project</x-page-heading>

    <x-forms.form method="POST" action="/projects" enctype="multipart/form-data">
        @csrf

        <x-forms.input label="Title" name="title" />
        <x-forms.input label="Description" name="description" />
        <x-forms.input label="Company" name="company" />
        <x-forms.input label="Location" name="location" />

        <x-forms.divider />

        <x-forms.input label="Url GitHub" name="url_github" />
        <x-forms.input label="Url Demo" name="url_demo" />

        <x-forms.checkbox label="Feature" name="featured" />

        <x-forms.input label="Tags (comma separated)" name="tags" />
        <x-forms.input label="Tech Stack" name="tech_stack" />

        <x-forms.divider />

        <x-forms.input label="Image" name="image" type="file" />
        <x-forms.input label="Image Alt Text" name="image_alt" />

        <x-forms.button>Create</x-forms.button>
        <x-link-button href="/" class="bg-gray-500">Cancel</x-link-button>
    </x-forms.form>
</x-layout>
