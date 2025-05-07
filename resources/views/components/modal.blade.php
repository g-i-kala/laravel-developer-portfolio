<div x-data="{ show: false }"
    x-show = "show"
    x-on:open-modal.window = "show = true"
    x-on:close-modal.window = "show = false"
    x-on:keydown.escape.window = "show = false"

    class='fixed z-50 inset-0'>

    {{-- Gray Backround --}}
    <div x-on:click="show = false" class='fixed inset-0 bg-gray-300 opacity-70'> </div>
    {{-- Modal Content --}}
    <div
        class="bg-bg-light m-auto fixed inset-0 max-w-2/3 max-h-2/3 flex flex-col justify-around rounded p-6 shadow-2xl">
        <div>
            <x-button x-on:click="$dispatch('close-modal')" class="font-bold hover:cursor-pointer">
                [ X ]
            </x-button>
        </div>
        <div> {{ $title }} </div>
        <div> {{ $body }} </div>
    </div>
</div>
