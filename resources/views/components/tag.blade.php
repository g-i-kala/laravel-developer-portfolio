@props(['tag', 'size' => 'base'])

@php
    $classes = 'mt-4 bg-bg-light hover:bg-bg-dark transition-colors duration-300 border-none';
    if ($size === 'base') {
        $classes .= ' px-2 py-1 bg-bg-light text-xs text-muted';
    }

    if ($size === 'small') {
        $classes .= 'px-3 py-1 text-2xs';
    }
@endphp

<x-link-button href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</x-link-button>
