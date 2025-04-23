
<a {{ $attributes->merge([
    'class' => 'inline-block rounded py-2 px-2 font-bold transition duration-300 hover:text-primary'
    ]) }}>
    <span>[ </span>
    {{ $slot }}
    <span> ]</span>
</a>