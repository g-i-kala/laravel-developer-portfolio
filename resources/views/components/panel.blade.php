@php
    $classes =
        'flex flex-col justify-between p-4 bg-bg-light group transition duration-300 h-full shadow-md  hover:scale-105 hover:shadow-2xl';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
