<x-layout>
    <x-page-heading>Add Some Skills</x-page-heading>

    {{-- Category Management --}}
    <section class="mb-10">
        <h2 class="text-xl font-semibold">Skill Categories</h2>
        <x-forms.form method="POST" action="/skill-categories">

            <x-forms.input name="name" placeholder="New category name" class="input" />
            <x-button>Add Category</x-button>
            </x-froms.form>

            <ul class="mt-4 space-y-2">
                @foreach ($skillCategories as $category)
                    <li class="flex justify-between items-center">
                        {{ $category->name }}
                        <div class="space-x-2">
                            <form method="POST" id="delete-form-{{ $category->id }}"
                                action="/skill-categories/{{ $category->id }}">
                                @csrf
                                @method('DELETE')
                                <x-button for="delete-form-{{ $category->id }}"
                                    class="hover:bg-red-500">Delete</x-button>
                            </form>
                            {{-- Optional: Edit form inline --}}
                        </div>
                    </li>
                @endforeach
            </ul>
    </section>

    {{-- Skills Management --}}
    <section>
        <h2 class="text-xl font-semibold">Skills</h2>
        <x-forms.form method="POST" action="/skills/create" class="flex flex-col space-x-2">
            <div class="flex flex-row">
                <x-forms.input name="name" placeholder="Skill name" class="input" />
                <select name="skill_category_id" class="input">
                    @foreach ($skillCategories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        <x-forms.input hidden name="category_id" value={{ $category->id }} />
                    @endforeach
                </select>
                <select name="level" class="input">
                    @for ($i = 1; $i <= 5; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
            <x-button class="w-fit">Add Skill</x-button>
        </x-forms.form>

        <ul class="mt-4 space-y-2">
            @foreach ($skillCategories as $category)
                @foreach ($category->skills as $skill)
                    <li class="flex justify-between items-center">
                        {{ $skill->name }}
                        <div class="space-x-2">
                            <form method="POST" id="delete-form-{{ $skill->id }}"
                                action="/skills/{{ $skill->id }}">
                                @csrf
                                @method('DELETE')
                                <x-button for="delete-form-{{ $skill->id }}"
                                    class="hover:bg-red-500">Delete</x-button>
                            </form>
                            {{-- Optional: Edit form inline --}}
                        </div>
                    </li>
                @endforeach
            @endforeach
        </ul>

        {{-- Optionally list skills per category here --}}
    </section>

</x-layout>
