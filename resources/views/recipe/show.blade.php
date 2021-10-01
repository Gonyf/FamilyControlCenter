<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recipes') }}
        </h2>
    </x-slot>
    <div class="container p-6 mx-auto">
        <h1 class="text-2xl">{{ $recipe->name }}</h1>
        <div class="">
            <span>
                {{ __('recipes.minutes') }} {{ $recipe->minutes}}
            </span>
            <span class="ml-10">
                {{ __('recipes.servings') }} {{ $recipe->servings}}
            </span>
        </div>
        <div class="pt-6">{!! $recipe->description !!}</div>

        <div class="border w-6/12 mx-auto">
            <table class="table-auto w-full">
                <thead>
                    <tr class="bg-blue-300">
                        <td class="p-2">
                            {{ __('recipes.amount') }}
                        </td>
                        <td class="p-2">
                            {{ __('recipes.unit') }}
                        </td>
                        <td class="p-2">
                            {{ __('recipes.ingredient') }}
                        </td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recipe->ingredients as $ingredient)
                    <tr>
                        <td class="p-2">
                            {{ $ingredient->amount }}
                        </td>
                        <td class="p-2">
                            {{ $ingredient->unit }}
                        </td>
                        <td class="p-2">
                            {{ $ingredient->name }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="pt-6">{!! $recipe->guide !!}</div>

        <div class="form-group">
            <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
        </div>

    </div>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
</x-app-layout>