@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2">
    <span class="text-black">::</span>
    <label class="font-bold" for="{{ $name }}">{{ $label }}</label>
</div>
