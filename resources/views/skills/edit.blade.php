@props(['job'])
<x-layout>
    <x-page-heading>Edit Project</x-page-heading>

    <x-forms.form method="POST" action="/jobs/update/{{ $project->id}}">
        @csrf
        @method('PATCH')
        <x-forms.input label="Title" name="title" value="{{ $project->title }}" />
        <x-forms.input label="Description" name="description" value="{{ $project->description }}" />
        <x-forms.input label="Company" name="company" value="{{ $project->company }}" />
        <x-forms.input label="Location" name="location" value="{{ $project->location }}" />

        <x-forms.divider />    
        
        <x-forms.input label="Url GitHub" name="url" value="{{ $project->url_github }}" />
        <x-forms.input label="Url Demo" name="url_demo" value="{{ $project->url_demo }}" />

        <x-forms.checkbox label="Feature (Costs Extra)" name="featured" :isChecked="$project->featured"/>

        <x-forms.input label="Tags (comma separated)" name="tags" value="{{ implode(', ', $project->tags->pluck('name')->toArray()) }}" />
        <x-forms.input label="Tech Stack (comma separated)" name="tech_stack" value="{{ implode(', ', $project->tach_stack->pluck('name')->toArray()) }}" />

        <x-forms.divider />

        <x-forms.input label="Image" name="image" value="{{ $project->image }}" />
        <x-forms.input label="Image" name="image_alt" value="{{ $project->image_alt }}" />

        <x-forms.button>Update</x-forms.button>
        <x-link-button href="/projects/show" class="bg-gray-500">Cancel</x-link-button>

    </x-forms.form>

</x-layout>