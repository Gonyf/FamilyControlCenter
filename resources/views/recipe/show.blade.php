<x-app-layout>
    <x-slot name="headScripts">
        <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
        <script type="text/javascript">
            window.onload = function() {
                console.log(CKEDITOR.config);
                CKEDITOR.config.removeButtons = 'Image';
                CKEDITOR.config.removePlugins = ['Image', 'uploadimage'];
            };
        </script>
    </x-slot>
    <div class="container p-6 mx-auto">
        <div class="text-center">
            <div class="inline-block border-green-600 border-4 rounded-tl-3xl rounded-tr-3xl px-24 py-3">
                <div class="text-2xl">{{ $recipe->name }}</div>
                <div class="">
                    <span>
                        {{ __('recipes.minutes') }} {{ $recipe->minutes}}
                    </span>
                    <span class="ml-10">
                        {{ __('recipes.servings') }} {{ $recipe->servings}}
                    </span>
                </div>
            </div>
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
    </div>
</x-app-layout>
