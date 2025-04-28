
<a {{ $attributes->merge([
    'class' => 'inline-block py-2 px-2 shadow-sm font-bold transition duration-300 hover:text-primary hover:bg-bg-light hover:shadow-xs'
    ]) }}>
    <span>[ </span>
    {{ $slot }}
    <span> ]</span>
</a>