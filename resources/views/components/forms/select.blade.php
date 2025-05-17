@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'bg-white/10 border px-5 py-4 w-full',
    ];
@endphp

<x-forms.field :$label :$name>
    <select {{ $attributes($defaults) }}>
        {{ $slot }}
    </select>
</x-forms.field>
