
<a {{ $attributes->merge([
    'class' => 'inline-block py-2 px-2 font-bold transition duration-300 hover:text-primary hover:bg-bg-light hover:shadow-md'
    ]) }}>
    <span>[ </span>
    {{ $slot }}
    <span> ]</span>
</a>