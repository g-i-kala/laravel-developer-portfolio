@props(['category'])
<div>
    <div class="border-b border-b-primary">
        <x-section-heading> {{ $category->name }} </x-section-heading>
    </div>
    <ul class="flex flex-col my-4 list-disc ">
        @foreach ($category->skills as $skill)
            <li> {{ $skill->name }} </li>
        @endforeach
    </ul>
</div>
