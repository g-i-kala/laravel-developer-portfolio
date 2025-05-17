@props(['name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'bg-white/10 border px-5 py-4 w-full',
        'value' => old($name),
    ];
@endphp

<x-forms.field :$name>
    <textarea {{ $attributes($defaults) }}>{{ old($name) }}</textarea>
</x-forms.field>
