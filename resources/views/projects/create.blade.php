<x-layout>
    <x-page-heading>New Project</x-page-heading>

    <x-forms.form method="POST" action="/projects">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="90 000 EUR" />
        <x-forms.input label="Location" name="location" placeholder="Winter Park, Florida" />

        <x-forms.select label='Schedule' name='schedule'>
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="Url" name="url" placeholder="https://acme.com/jobs/ceo-wanted" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured"/>

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education" />

        <x-forms.divider />

        <x-forms.button>Publish</x-forms.button>

    </x-forms.form>

</x-layout>