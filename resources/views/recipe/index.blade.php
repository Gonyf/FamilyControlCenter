<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Recipes') }}
        </h2>
    </x-slot>
    <div class="container mx-auto">
        <div class="flex flex-wrap m-8">
            @foreach ($recipes as $recipe)
            <div class=" flex-none w-3/12">
                <a href="{{ $recipe->route() }}">
                    <div class="p-5 shadow-lg rounded-lg bg-white m-4">
                        {{ $recipe->name }}
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
