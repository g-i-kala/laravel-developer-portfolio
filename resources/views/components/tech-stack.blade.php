@props(['techStack'])

@php
    $classes = 'px-2 py-1 hover:bg-bg-light';
@endphp

<x-link-button href="{{ route('techstack.show', $techStack) }}"
    class="{{ $classes }}">{{ $techStack->name }}</x-link-button>
