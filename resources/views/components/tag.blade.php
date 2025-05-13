@props(['tag', 'size' => 'base'])

@php
    $classes = 'bg-bg-light hover:bg-bg-dark transition-colors duration-300';
    if ($size === 'base') {
        $classes .= ' px-2 py-1 bg-bg-light text-xs text-muted';
    }

    if ($size === 'small') {
        $classes .= ' px-3 py-1 text-2xs';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $classes }}">{{ $tag->name }}</a>
