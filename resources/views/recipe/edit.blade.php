<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $recipe->name }}
        </h2>
    </x-slot>
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
        <div class="form-group">
            <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
        </div>
    </div>
</x-app-layout>
