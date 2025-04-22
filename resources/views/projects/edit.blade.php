@props(['job'])
<x-layout>
    <x-page-heading>Edit Project</x-page-heading>

    <x-forms.form method="POST" action="/jobs/update/{{ $project->id}}">
        @csrf
        @method('PATCH')
        <x-forms.input label="Title" name="title" value="{{ $project->title }}" />
        <x-forms.input label="Salary" name="salary" value="{{ $project->salary }}" />
        <x-forms.input label="Location" name="location" value="{{ $project->location }}" />

        <x-forms.select label='Schedule' name='schedule'>
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="Url" name="url" value="{{ $project->url }}" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" :isChecked="$project->featured"/>

        <x-forms.input label="Tags (comma separated)" name="tags" value="{{ implode(', ', $project->tags->pluck('name')->toArray()) }}" />

        <x-forms.divider />

        <x-forms.button>Update</x-forms.button>
        <x-link-button href="/projects/show" class="bg-gray-500">Cancel</x-link-button>

    </x-forms.form>

</x-layout>